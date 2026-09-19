<?php

/**
 * 投稿の詳細ページ。トップページの NEWS / TOPICS セクションのリンク先。
 *
 * レイアウトは既存テンプレートの流用。
 *  - FVと本文セクションの構造・余白 … archive-ai-gallery.php
 *  - 日付・タイトル・Read More のタイポグラフィ … front-page.php の NEWS / TOPICS カード
 *  - Moreボタン … front-page.php のアートギャラリー導線
 *
 * ファイル名について：この案件の投稿タイプは `post`（カテゴリー news / blog）で、
 * `news` というカスタム投稿タイプは存在しない。WordPressのテンプレート階層では
 * `single-news.php` は投稿タイプ `news` にしか適用されないため、
 * 実際に適用される `single.php` として作成している。
 */

get_header();

$single_categories = get_the_category();
$single_prev = get_previous_post();
$single_next = get_next_post();
?>

<main class="overflow-hidden bg-white pb-120 pc:pb-240">
  <?php while (have_posts()) : ?>
    <?php the_post(); ?>

    <section class="relative aspect-square pc:aspect-[1920/480] overflow-hidden bg-[#f1ede7]">
      <div class="relative h-full">
        <div class="absolute inset-0 mx-auto max-w-920">
          <span class="absolute left-24 pc:left-64 top-96 pc:top-176 z-10 text-18 pc:text-20 font-montserrat font-light leading-none tracking-[0.18em] pc:tracking-[0.22em] [writing-mode:vertical-rl] pc:[writing-mode:horizontal-tb]">
            NEWS / TOPICS
          </span>
        </div>
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('full', array(
            'class'   => 'absolute inset-0 block h-full w-full object-cover',
            'alt'     => '',
            'loading' => 'eager',
            'fetchpriority' => 'high',
          )); ?>
        <?php endif; ?>
      </div>
    </section>

    <section class="bg-white px-20 pc:px-40 pt-80 pc:pt-150">
      <article class="mx-auto max-w-840">
        <div class="flex flex-col gap-16 border-b border-black pb-24">
          <div class="flex flex-wrap items-center gap-16">
            <time class="text-10 text-black leading-[1.3] tracking-[0.05em]" datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
              <?php echo esc_html(get_the_date('Y.m.d')); ?>
            </time>
            <?php if ($single_categories) : ?>
              <ul class="flex flex-wrap items-center gap-8">
                <?php foreach ($single_categories as $single_category) : ?>
                  <li>
                    <span class="text-10 text-black font-montserrat uppercase tracking-[0.05em]">
                      <?php echo esc_html($single_category->name); ?>
                    </span>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
          <h1 class="text-17 text-black font-semibold leading-[1.6]">
            <?php the_title(); ?>
          </h1>
        </div>

        <?php
        // 本文はブロックエディターの入力で、h3から始まる記事がある（h1の次がh3になり
        // W3Cが「見出しレベルを1つ飛ばした」とエラーにする）。テンプレート側から本文の
        // 見出しレベルは変えられないため、視覚に影響しない親h2を置いて階層を成立させる。
        // 根拠：C:/AI/web-development/rules/corrections.md 2026-07-24「sectionと見出し階層の一致」
        // 「視覚上の親見出しがない下位sectionだけは、レイアウトに影響しない視覚非表示の親h2を置く」
        ?>
        <h2 class="sr-only">記事本文</h2>
        <div class="single-post-body mt-40 pc:mt-64">
          <?php the_content(); ?>
        </div>
      </article>

      <?php if ($single_prev || $single_next) : ?>
        <nav class="mx-auto mt-80 pc:mt-120 max-w-840" aria-label="記事の前後">
          <ul class="grid gap-40 md:grid-cols-2">
            <?php if ($single_prev) : ?>
              <li>
                <a class="flex flex-col gap-12" href="<?php echo esc_url(get_permalink($single_prev)); ?>">
                  <span class="text-10 font-montserrat tracking-[0.05em]">
                    Previous
                  </span>
                  <span class="text-12 text-black leading-[1.6]">
                    <?php echo esc_html(get_the_title($single_prev)); ?>
                  </span>
                </a>
              </li>
            <?php endif; ?>
            <?php if ($single_next) : ?>
              <li class="md:text-right">
                <a class="flex flex-col gap-12" href="<?php echo esc_url(get_permalink($single_next)); ?>">
                  <span class="text-10 font-montserrat tracking-[0.05em]">
                    Next
                  </span>
                  <span class="text-12 text-black leading-[1.6]">
                    <?php echo esc_html(get_the_title($single_next)); ?>
                  </span>
                </a>
              </li>
            <?php endif; ?>
          </ul>
        </nav>
      <?php endif; ?>

      <div class="mx-auto mt-80 pc:mt-120 max-w-840">
        <a class="mx-auto flex items-center justify-center max-w-295 md:max-w-440 w-full min-h-42 border border-black transition-opacity duration-300 pc:hover:opacity-50" href="<?php echo esc_url(home_url('/#news')); ?>">
          <span class="text-12 text-black">
            Back to News
          </span>
        </a>
      </div>
    </section>

  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
