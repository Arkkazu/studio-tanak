<?php

/**
 * カテゴリーアーカイブ。NEWS / TOPICS の一覧ページ（/news/）と /blog/ に適用される。
 *
 * レイアウトは既存コードの流用。
 *  - FVと本文セクションの構造・余白 … archive-ai-gallery.php
 *  - 記事カード（日付・タイトル・Read More）… front-page.php の NEWS / TOPICS セクション
 *  - ページャーの枠線ボタン … front-page.php のアートギャラリー導線
 *
 * 固定ページ（page-news.php）ではなくカテゴリーアーカイブにしている理由：
 * このサイトのパーマリンクは /%category%/%post_id%/ で、/news/ はカテゴリー、
 * /news/<投稿ID>/ はそのカテゴリーの記事という関係にある。同じスラッグへ固定ページを
 * 置くと必ず衝突する。2026-09-19 実測：スラッグ `news` の固定ページを作ると
 * /news/3367/ が 301 -> /news/ になり記事が開けなくなった（ページ削除で200へ復帰）。
 * /news/ へ到達させるリライト規則は inc/custom-post.php で登録する。
 */

get_header();

// 投稿タイトルに許可する要素。front-page.php の NEWS / TOPICS と同じ許可リスト。
$news_title_allowed_html = array(
  'br'     => array(),
  'em'     => array(),
  'strong' => array(),
);

$news_paged       = max(1, (int) get_query_var('paged'));
$news_total_pages = (int) $GLOBALS['wp_query']->max_num_pages;
$news_term        = get_queried_object();
$news_term_link   = ($news_term instanceof WP_Term) ? get_category_link($news_term->term_id) : home_url('/');

$news_page_url = static function (int $page) use ($news_term_link) {
  $base = trailingslashit($news_term_link);
  return $page <= 1 ? $base : $base . 'page/' . $page . '/';
};
?>

<main class="overflow-hidden bg-white pb-120 pc:pb-240">
  <section class="relative aspect-square pc:aspect-[1920/480] overflow-hidden bg-[#f1ede7]">
    <div class="relative h-full">
      <div class="absolute inset-0 mx-auto max-w-920">
        <div class="absolute left-24 pc:left-64 top-96 pc:top-176 z-10 flex max-pc:flex-row-reverse items-start gap-16 pc:flex-col pc:gap-12">
          <h1 class="text-18 pc:text-20 font-montserrat font-light leading-none tracking-[0.18em] pc:tracking-[0.22em] [writing-mode:vertical-rl] pc:[writing-mode:horizontal-tb]">
            NEWS / TOPICS
          </h1>
          <p class="text-12 text-black leading-none tracking-[0.05em] [writing-mode:vertical-rl] pc:[writing-mode:horizontal-tb]">
            <?php echo esc_html(single_cat_title('', false)); ?>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-white px-20 pc:px-40 pt-80 pc:pt-150">
    <?php if (have_posts()) : ?>
      <ul class="mx-auto grid max-w-1200 md:grid-cols-3 gap-64">
        <?php while (have_posts()) : ?>
          <?php the_post(); ?>
          <li>
            <a class="flex flex-col gap-16" href="<?php echo esc_url(get_permalink()); ?>">
              <div class="flex flex-col gap-8">
                <time class="text-10 text-black leading-[1.3] tracking-[0.05em]" datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
                  <?php echo esc_html(get_the_date('Y.m.d')); ?>
                </time>
              </div>
              <div class="flex flex-col gap-12">
                <h2 class="text-12 text-black leading-[1.6]">
                  <?php echo wp_kses(get_the_title(), $news_title_allowed_html); ?>
                </h2>
              </div>
              <span class="flex items-center gap-8">
                <span class="text-10 font-montserrat tracking-[0.05em]">
                  Read More
                </span>
                <?php [$src, $wh] = theme_img_src_wh("src/images/common/arrow-right.svg"); ?>
                <img class="w-[10.54rem] block" src="<?php echo $src; ?>" alt="" aria-hidden="true" loading="lazy" <?php echo $wh; ?>>
              </span>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>

      <?php
      // ページャーは paginate_links() を使わず自前で組む。あちらは page-numbers 等の
      // WordPress側クラスを出力し、この案件のユーティリティ統一から外れるため
      // （C:/AI/web-development/rules/html.md「Tailwind等のユーティリティで統一している案件」）。
      ?>
      <?php if ($news_total_pages > 1) : ?>
        <nav class="mx-auto mt-80 pc:mt-120 max-w-1200" aria-label="記事一覧のページ送り">
          <ul class="flex flex-wrap items-center justify-center gap-12">
            <?php if ($news_paged > 1) : ?>
              <li>
                <a class="flex items-center justify-center min-w-42 min-h-42 px-12 border border-black text-10 text-black font-montserrat tracking-[0.05em] transition-opacity duration-300 pc:hover:opacity-50" href="<?php echo esc_url($news_page_url($news_paged - 1)); ?>">
                  Prev
                </a>
              </li>
            <?php endif; ?>

            <?php for ($news_page = 1; $news_page <= $news_total_pages; $news_page++) : ?>
              <li>
                <?php if ($news_page === $news_paged) : ?>
                  <span class="flex items-center justify-center min-w-42 min-h-42 px-12 border border-black bg-black text-10 text-white font-montserrat tracking-[0.05em]" aria-current="page">
                    <?php echo esc_html((string) $news_page); ?>
                  </span>
                <?php else : ?>
                  <a class="flex items-center justify-center min-w-42 min-h-42 px-12 border border-black text-10 text-black font-montserrat tracking-[0.05em] transition-opacity duration-300 pc:hover:opacity-50" href="<?php echo esc_url($news_page_url($news_page)); ?>" aria-label="<?php echo esc_attr($news_page . 'ページ目へ'); ?>">
                    <?php echo esc_html((string) $news_page); ?>
                  </a>
                <?php endif; ?>
              </li>
            <?php endfor; ?>

            <?php if ($news_paged < $news_total_pages) : ?>
              <li>
                <a class="flex items-center justify-center min-w-42 min-h-42 px-12 border border-black text-10 text-black font-montserrat tracking-[0.05em] transition-opacity duration-300 pc:hover:opacity-50" href="<?php echo esc_url($news_page_url($news_paged + 1)); ?>">
                  Next
                </a>
              </li>
            <?php endif; ?>
          </ul>
        </nav>
      <?php endif; ?>
    <?php else : ?>
      <p class="mx-auto max-w-1200 text-center text-12 text-black">
        記事はまだありません。
      </p>
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>
