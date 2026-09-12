<section class="mt-32 pc:mt-88">
  <div class="mx-auto w-343 md:w-736 pc:w-1450">
    <?php if (have_rows('menu')) : ?>
      <div class="flex flex-col gap-y-80">
        <?php while (have_rows('menu')) : the_row(); ?>
          <?php
          $menu_index = get_row_index();
          $menu_name  = get_sub_field('menu__name');

          // menu__tab を配列に集約
          $tabs = [];
          if (have_rows('menu__tab')) :
            while (have_rows('menu__tab')) : the_row();
              // costume をタブごとに初期化して集約
              $costumes = [];
              if (have_rows('costume')) :
                while (have_rows('costume')) : the_row();
                  $costumes[] = [
                    'grade'        => get_sub_field('grade'),
                  ];
                endwhile;
              endif;

              // product-img-list をタブごとに初期化して集約
              $productImgList = [];
              if (have_rows('product-img-list')) :
                while (have_rows('product-img-list')) : the_row();
                  $productImgList[] = [
                    'productImg'        => get_sub_field('product-img'),
                    'productImgTtl'        => get_sub_field('product-img-ttl'),
                  ];
                endwhile;
              endif;

              // ← ここで costume を tabs[] に格納する点が重要です
              $tabs[] = [
                'tab__name'          => get_sub_field('tab__name'),
                'tab__img'            => get_sub_field('tab__img'),
                'weekday'      => get_sub_field('weekday'),
                'weekday-price'      => get_sub_field('weekday-price'),
                'time'               => get_sub_field('time'),
                'price-description'  => get_sub_field('price-description'),
                'price-img'  => get_sub_field('price-img'),
                'course-description' => get_sub_field('course-description'),
                'course-notes'       => get_sub_field('course-notes'),
                'costume'            => $costumes,
                'product-description' => get_sub_field('product-description'),
                'product-img'  => get_sub_field('product-img'),
                'product-img-list'            => $productImgList,
              ];

            endwhile;
          endif;
          ?>
          <section class="js-menu-block scroll-mt-70 pc:scroll-mt-160" id="menu-<?php echo esc_attr($menu_index); ?>">
            <?php if ($menu_name) : ?>
              <div class="flex items-center flex-col gap-y-4 pc:gap-y-8">
                <h2 class="text-20 pc:text-30 font-normal font-zen-maru-gothic half-leading"><?php echo esc_html($menu_name); ?></h2>
              </div>
            <?php endif; ?>

            <?php if (! empty($tabs)) : ?>
              <?php if (count($tabs) > 1) : ?>
                <div class="mt-24 pc:mt-32">
                  <div class="flex justify-center gap-x-8 pc:gap-x-124" role="tablist" aria-label="<?php echo esc_attr($menu_name ?: 'Menu Tabs'); ?>">
                    <?php foreach ($tabs as $i => $tab) :
                      $tab_id = 'menu-' . $menu_index . '-tab-' . ($i + 1);
                    ?>
                      <button
                        class="relative w-80 pc:w-160 aspect-square bg-light-gray opacity-40 aria-selected:opacity-100 transition-opacity duration-300 group after:content-[''] after:absolute after:-bottom-4 after:left-1/2 after:-translate-x-1/2 after:translate-y-full after:w-50 after:h-44 aria-selected:after:bg-[url('/wp-content/themes/studio-tanaka_theme/assets/media/images/common/svg-triangle.svg')]"
                        id="<?php echo esc_attr($tab_id); ?>"
                        type="button"
                        role="tab"
                        aria-controls="<?php echo esc_attr($tab_id); ?>-panel"
                        aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>">
                        <?php
                        // ACF画像フィールド tab__img を取得
                        $tab_img = $tab['tab__img'] ?? null;

                        if ($tab_img) {
                          if (is_array($tab_img)) {
                            // 返却形式が「配列」の場合
                            $img_url = esc_url($tab_img['url']);
                            $img_alt = esc_attr($tab_img['alt']);
                          } elseif (is_numeric($tab_img)) {
                            // 返却形式が「ID」の場合
                            $img_url = esc_url(wp_get_attachment_url($tab_img));
                            $img_alt = esc_attr(get_post_meta($tab_img, '_wp_attachment_image_alt', true));
                          } else {
                            // 返却形式が「URL」の場合
                            $img_url = esc_url($tab_img);
                            $img_alt = '';
                          }
                          echo '<img src="' . $img_url . '" alt="' . $img_alt . '" class="w-full h-full object-contain" loading="lazy">';
                        } else {
                          // フォールバック：tab__nameをテキストで表示
                          echo '<span class="text-20 pc:text-24 text-white">' . esc_html($tab['tab__name']) . '</span>';
                        }
                        ?>
                      </button>


                    <?php endforeach; ?>
                  </div>
                </div>
              <?php endif; ?>

              <?php foreach ($tabs as $j => $tab) :
                $panel_id = 'menu-' . $menu_index . '-tab-' . ($j + 1) . '-panel';
              ?>
                <div class="mt-14 pc:mt-28 relative">
                  <div
                    class="bg-[#f0f0eb] pt-36 pc:pt-64 px-16 pc:px-72 pb-40 overflow-hidden"
                    id="<?php echo esc_attr($panel_id); ?>"
                    role="tabpanel"
                    aria-labelledby="<?php echo esc_attr(str_replace('-panel', '', $panel_id)); ?>"
                    <?php echo $j === 0 ? '' : 'hidden'; ?>>
                    <div class="flex flex-wrap justify-center gap-24 pc:gap-48">
                      <?php if (! empty($tab['weekday-price'])) : ?>
                        <div class="flex items-center gap-x-12 pc:gap-x-24">
                          <?php if (! empty($tab['weekday'])) : ?>
                            <div class="shrink-0 h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                              <span class="text-12 pc:text-16 leading-none half-leading">
                                <?php echo wp_kses_post($tab['weekday']); ?>
                              </span>
                            </div>
                          <?php endif; ?>
                          <p class="text-16 pc:text-32 leading-none half-leading">
                            ¥<?php echo esc_html(number_format((int) $tab['weekday-price'])); ?>
                          </p>
                        </div>
                      <?php endif; ?>
                      <?php if (! empty($tab['time'])) : ?>
                        <div class="flex items-center gap-x-12 pc:gap-x-24">
                          <p class="text-14 pc:text-30 leading-none half-leading">
                            <?php echo wp_kses_post($tab['time']); ?>
                          </p>
                        </div>
                      <?php endif; ?>
                    </div>
                    <?php if (! empty($tab['price-description'])) : ?>
                      <div class="mt-32 pc:mt-40">
                        <div class="max-w-640 mx-auto">
                          <p class="text-14 pc:text-18 leading-[1.5] half-leading">
                            <?php echo wp_kses_post($tab['price-description']); ?>
                          </p>
                        </div>
                      </div>
                    <?php endif; ?>
                    <?php
                    // price-img を出力（ID / 配列 / URL いずれにも対応）
                    if (! empty($tab['price-img'])) {
                      $src     = $tab['price-img'];
                      $img_id  = 0;
                      $img_alt = '';

                      if (is_array($src)) {
                        // ACF「画像（配列）」返却
                        $img_id  = isset($src['ID']) ? (int) $src['ID'] : 0;
                        $img_alt = isset($src['alt']) ? $src['alt'] : '';
                        if (! $img_id && ! empty($src['url'])) {
                          $img_id = attachment_url_to_postid($src['url']);
                        }
                      } elseif (is_numeric($src)) {
                        // ACF「画像ID」返却
                        $img_id = (int) $src;
                      } elseif (is_string($src)) {
                        // ACF「画像URL」返却
                        $img_id = attachment_url_to_postid($src);
                      }

                      if ($img_id) {
                        // 添付の alt を優先
                        if ($img_alt === '') {
                          $img_alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);
                        }
                        echo '<div class="mt-24 pc:mt-32 flex justify-center">';
                        echo wp_get_attachment_image(
                          $img_id,
                          'large',                 // 必要に応じて 'full' やカスタムサイズへ変更
                          false,
                          [
                            'class'   => 'max-w-640 w-full',
                            'loading' => 'lazy',
                            'alt'     => esc_attr($img_alt),
                          ]
                        );
                        echo '</div>';
                      } else {
                        // 添付IDが取得できない外部URL等のフォールバック
                        $url = is_array($src) && !empty($src['url']) ? $src['url'] : (is_string($src) ? $src : '');
                        if ($url) {
                          echo '<div class="mt-24 pc:mt-32 flex justify-center">';
                          echo '<img class="max-w-640 w-full" src="' . esc_url($url) . '" alt="" loading="lazy">';
                          echo '</div>';
                        }
                      }
                    }
                    ?>
                    <?php if (! empty($tab['course-description'])) : ?>
                      <div class="mt-32 pc:mt-48">
                        <div class="border-t border-black pt-32 pc:pt-48">
                          <p class="text-18 pc:text-24 text-center font-medium">
                            コース内容
                          </p>
                          <div class="mt-24 pc:mt-32">
                            <div class="max-w-640 mx-auto flex flex-col gap-y-32">
                              <p class="text-16 pc:text-20">
                                <?php echo wp_kses_post($tab['course-description']); ?>
                              </p>
                              <?php if (! empty($tab['course-notes'])) : ?>
                                <p class="text-14 pc:text-18">
                                  <?php echo wp_kses_post($tab['course-notes']); ?>
                                </p>
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endif; ?>
                    <?php if (! empty($tab['product-description'])) : ?>
                      <div class="mt-32 pc:mt-48">
                        <div class="border-t border-black pt-32 pc:pt-48">
                          <p class="text-18 pc:text-24 text-center font-medium">
                            コース商品
                          </p>
                          <div class="mt-24 pc:mt-32">
                            <p class="text-16 pc:text-20 max-w-640 mx-auto">
                              <?php echo wp_kses_post($tab['product-description']); ?>
                            </p>
                          </div>
                          <?php if (! empty($tab['product-img-list'])) : ?>
                            <div class="mt-24 pc:mt-32 flex flex-wrap justify-center gap-16 pc:gap-32">
                              <?php foreach ($tab['product-img-list'] as $idx => $c) : ?>
                                <?php
                                // 収集時のキーに合わせて取得
                                $src  = $c['productImg']    ?? null;
                                $ttl  = $c['productImgTtl'] ?? '';
                                if (empty($src)) {
                                  continue;
                                }

                                $img_id  = 0;
                                $img_alt = '';

                                if (is_array($src)) {
                                  // ACF「画像（配列）」返却
                                  $img_id  = isset($src['ID']) ? (int) $src['ID'] : 0;
                                  $img_alt = isset($src['alt']) ? $src['alt'] : '';
                                  if (!$img_id && !empty($src['url'])) {
                                    $img_id = attachment_url_to_postid($src['url']);
                                  }
                                } elseif (is_numeric($src)) {
                                  // ACF「画像ID」返却
                                  $img_id = (int) $src;
                                } elseif (is_string($src)) {
                                  // ACF「画像URL」返却
                                  $img_id = attachment_url_to_postid($src);
                                }
                                ?>

                                <?php if ($img_id) : ?>
                                  <?php
                                  if ($img_alt === '') {
                                    $img_alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);
                                  }
                                  ?>
                                  <figure class="w-[calc((100%-16rem)/2)] pc:w-[calc((100%-32rem*3)/4)]">
                                    <?php
                                    echo wp_get_attachment_image(
                                      $img_id,
                                      'large',
                                      false,
                                      [
                                        'class'   => 'max-w-640 w-full',
                                        'loading' => 'lazy',
                                        'alt'     => esc_attr($img_alt),
                                      ]
                                    );
                                    ?>
                                    <?php if ($ttl !== '') : ?>
                                      <figcaption class="mt-8 text-12 pc:text-20 text-center">
                                        <?php echo esc_html($ttl); ?>
                                      </figcaption>
                                    <?php endif; ?>
                                  </figure>
                                <?php else : ?>
                                  <?php
                                  // 添付IDが取得できない外部URL等のフォールバック
                                  $url = is_array($src) && !empty($src['url']) ? $src['url'] : (is_string($src) ? $src : '');
                                  if ($url) :
                                  ?>
                                    <figure class="w-[calc((100%-16rem)/2)] pc:w-[calc((100%-32rem*3)/4)]">
                                      <img class="max-w-640 w-full" src="<?php echo esc_url($url); ?>" alt="" loading="lazy">
                                      <?php if ($ttl !== '') : ?>
                                        <figcaption class="mt-8 text-12 pc:text-20 text-center">
                                          <?php echo esc_html($ttl); ?>
                                        </figcaption>
                                      <?php endif; ?>
                                    </figure>
                                  <?php endif; ?>
                                <?php endif; ?>
                              <?php endforeach; ?>

                            </div>
                          <?php endif; ?>

                        </div>
                      </div>
                    <?php endif; ?>
                    <?php if (! empty($tab['costume'])) : ?>
                      <div class="mt-32 pc:mt-48">
                        <div class="border-t border-black pt-32 pc:pt-48">
                          <p class="text-18 pc:text-24 text-center font-medium">衣裳グレード</p>

                          <div class="mt-24 pc:mt-32">
                            <div class="flex flex-wrap justify-center gap-16 pc:gap-32">
                              <?php foreach ($tab['costume'] as $idx => $c) : ?>
                                <?php if (! empty($c['grade'])) : ?>
                                  <div class="flex flex-col gap-y-8">
                                    <div class="shrink-0 aspect-square w-56 pc:w-96 bg-[#666] p-4 pc:p-16 flex flex-col gap-y-8 items-center justify-center text-white">
                                      <span class="text-24 pc:text-40 half-leading">
                                        <?php
                                        // 最後の要素か判定
                                        $is_last = ($idx === array_key_last($tab['costume']));
                                        if ($idx >= 3 && $is_last) {
                                          // 4回目以降かつ最後なら「S」
                                          echo 'S';
                                        } else {
                                          // 通常は A, B, C, D... とアルファベット表示
                                          echo chr(65 + $idx);
                                        }
                                        ?>
                                      </span>
                                      <span class="text-9 pc:text-16 half-leading">
                                        グレード
                                      </span>
                                    </div>
                                    <p class="text-12 pc:text-20 text-center leading-none">
                                      ¥<?php echo esc_html(number_format((int) $c['grade'])); ?>
                                    </p>
                                  </div>
                                <?php endif; ?>
                              <?php endforeach; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </section>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php
// 現在ページのタイトル（完全一致で使用）
$current_title = trim(wp_strip_all_tags(get_the_title(get_queried_object_id())));

// 固定ページでも機能するように両方を考慮
$paged = max(1, get_query_var('paged'), get_query_var('page'));

// 件数はクッキー優先、なければ 1
$ppp = isset($_COOKIE['posts_per_page']) ? intval($_COOKIE['posts_per_page']) : 16;

// タクソノミー絞り込み：ターム【名前】＝ページタイトル、かつ "on-location"（スラッグ）を除外
$tax_query = array(
  'relation' => 'AND',
  array(
    'taxonomy'         => 'gallery-cat',
    'field'            => 'name',            // ← ターム「名」での照合
    'terms'            => array($current_title),
    'operator'         => 'IN',
    'include_children' => false,             // 子タームも含める場合は true
  ),
  array(
    'taxonomy' => 'gallery-cat',
    'field'    => 'slug',
    'terms'    => array('on-location'),    // 除外ターム（スラッグ）
    'operator' => 'NOT IN',
  ),
);

$args = array(
  'posts_per_page' => $ppp,
  'post_type'      => 'gallery',
  'post_status'    => 'publish',
  'order'          => 'DESC',
  'paged'          => $paged,
  'tax_query'      => $tax_query,
);

$query = new WP_Query($args);

if ($query->have_posts()):
?>

  <section class="mt-32 pc:mt-88">
    <div class="mx-auto w-343 md:w-736 pc:w-1450">

      <div class="flex items-center flex-col gap-y-4 pc:gap-y-8">
        <h2 class="text-20 pc:text-30 font-normal font-zen-maru-gothic half-leading">
          ギャラリー
        </h2>
      </div>


      <div class="mt-24 pc:mt-32">
        <div class="grid grid-cols-2 pc:grid-cols-4 gap-8">
          <?php while ($query->have_posts()): $query->the_post();
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
            <a class="block aspect-square" data-fancybox href="<?php echo esc_url($thumbnail_url); ?>">
              <img class="w-full h-full object-cover" src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>">
            </a>
          <?php endwhile; ?>
        </div>
      </div>

      <?php
      // ページネーション
      $total = max(1, (int) $query->max_num_pages);
      $big   = 999999999;

      $pagination = paginate_links(array(
        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'    => '/page/%#%/',   // パーマリンク設定に応じて調整（クエリ式なら '?paged=%#%' など）
        'current'   => $paged,
        'total'     => $total,
        'mid_size'  => 1,
        'prev_text' => 'Prev',
        'next_text' => 'Next',
        'type'      => 'list',
      ));

      if ($pagination) {
        echo '<nav class="mt-24 pc:mt-32 pagination">' . $pagination . '</nav>';
      }
      ?>

    </div>
  </section>

<?php
endif;
wp_reset_postdata();
?>