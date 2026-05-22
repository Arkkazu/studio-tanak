<?php
/* Template Name: 七五三ページ */
get_header();

$heading_block = function (string $title, string $subtitle): void { ?>
  <div class="text-center">
    <p class="text-14 font-montserrat font-light tracking-[0.15em] border-b border-border pb-8"><?php echo esc_html($title); ?></p>
    <p class="mt-8 text-11 font-thin tracking-[0.05em]"><?php echo esc_html($subtitle); ?></p>
  </div>
<?php };

$plans = [
  [
    'id'          => '01',
    'title'       => 'Studio shooting',
    'open'        => false,
    'default_tab' => 'premium',
    'tabs' => [
      'light'    => ['color' => '#c8c0b5', 'label' => 'Light'],
      'standard' => ['color' => '#b8b0a5', 'label' => 'Standard'],
      'premium'  => ['color' => '#a89080', 'label' => 'Premium'],
    ],
    'courses' => [
      'light' => [
        'name'     => 'WEEKDAY / LIGHT COURSE',
        'subtitle' => 'スタジオ撮影のみ',
        'price'    => '¥33,000',
        'duration' => '120',
        'features' => [
          '土日祝日は＋¥5,500となります',
          ['text' => '各種オプション詳細は ', 'link' => ['href' => '#', 'label' => 'こちら']],
        ],
        'campaign_border' => '#8a8078',
        'contents' => [
          ['label' => 'Contents/01', 'text' => '本人撮影'],
          ['label' => 'Contents/02', 'text' => '衣装1着（洋or 和）'],
          ['label' => 'Contents/03', 'text' => '着付け'],
          ['label' => 'Contents/04', 'text' => 'ヘアメイク'],
        ],
        'contents_note' => [
          '・ヘア／メイク／着付は本人分のみとなっております'
        ],
        'products' => [
          ['label' => 'Products 01', 'html' => 'セレクトデータ２０カット'],
          ['label' => 'Products 02', 'html' => '２面台紙（六つ切り２枚）'],
        ],
        'products_placeholder' => '#b8b0a5',
      ],
      'standard' => [
        'name'     => 'WEEKDAY / STANDARD COURSE',
        'subtitle' => 'スタジオ撮影のみ',
        'price'    => '¥66,000',
        'duration' => '120',
        'features' => [
          '土日祝日は＋¥5,500となります',
          ['text' => '各種オプション詳細は ', 'link' => ['href' => '#', 'label' => 'こちら']],
        ],
        'campaign_border' => '#8a8078',
        'contents' => [
          ['label' => 'Contents/01', 'text' => '本人撮影'],
          ['label' => 'Contents/02', 'text' => '衣装2着（洋 or 和）'],
          ['label' => 'Contents/03', 'text' => '着付け'],
          ['label' => 'Contents/04', 'text' => 'ヘアメイク'],
          ['label' => 'Contents/05', 'text' => '家族撮影（4名まで）'],
        ],
        'contents_note' => [
          '・ヘアチェンジは含まない（10分以内の簡単なアレンジはOK）',
          '・ヘア／メイク／着付は本人分のみとなっております'
        ],
        'products' => [
          ['label' => 'Products 01', 'html' => 'セレクトデータ50カット'],
          ['label' => 'Products 02', 'html' => 'クレイミニ8P×8カット'],
          ['label' => 'Products 03', 'html' => 'ロケットペンダント（チェーン付）'],
          ['label' => 'Products 04', 'html' => 'AGアートポスター'],
          ['label' => 'Products 05', 'html' => 'AGアートデータ'],
          ['label' => 'Products 06', 'html' => 'ナチュラルフォトブロック2個'],
        ],
        'products_placeholder' => '#a8a098',
      ],
      'premium' => [
        'name'     => 'WEEKDAY / PREMIUM COURSE',
        'subtitle' => 'スタジオ撮影のみ',
        'price'    => '¥99,000',
        'duration' => '120',
        'features' => [
          '土日祝日は＋¥5,500となります',
          ['text' => '各種オプション詳細は ', 'link' => ['href' => '#', 'label' => 'こちら']],
        ],
        'campaign_border' => '#7a6858',
        'contents' => [
          ['label' => 'Contents/01', 'text' => '本人撮影'],
          ['label' => 'Contents/02', 'text' => '衣装2着（洋 or 和）'],
          ['label' => 'Contents/03', 'text' => '着付け'],
          ['label' => 'Contents/04', 'text' => 'ヘアメイク'],
          ['label' => 'Contents/05', 'text' => '家族撮影（4名まで）'],
          ['label' => 'Contents/06', 'text' => '大家族撮影付'],
        ],
        'contents_note' => [
          '・ヘアチェンジは含まない（10分以内の簡単なアレンジはOK）',
          '・ヘア／メイク／着付は本人分のみとなっております'
        ],
        'products' => [
          ['label' => 'Products 01', 'html' => 'セレクトデータ50カット'],
          ['label' => 'Products 02', 'html' => 'クレイミニ10P×10カット'],
          ['label' => 'Products 03', 'html' => 'ロケットペンダント（チェーン付）'],
          ['label' => 'Products 04', 'html' => 'AGアートポスター'],
          ['label' => 'Products 05', 'html' => 'AGアートデータ'],
          ['label' => 'Products 06', 'html' => 'ナチュラルフォトブロック2個'],
        ],
        'products_placeholder' => '#907060',
      ],
    ],
  ],
  [
    'id'          => '02',
    'title'       => 'Go out / No location photo',
    'open'        => true,
    'default_tab' => '3years',
    'tabs' => [
      '7years'  => ['color' => '#c8c0b5', 'label' => '7 years'],
      '5years'  => ['color' => '#b8b0a5', 'label' => '5 years'],
      '3years'  => ['color' => '#a89080', 'label' => '3 years'],
    ],
    'courses' => [
      '7years' => [
        'name'            => 'WEEKDAY / 7 years COURSE',
        'subtitle'        => 'お出かけ／出張撮影なし',
        'price'           => '¥18,700',
        'duration'        => '120',
        'features'        => [
          '土日祝日は＋¥5,500となります',
          'グレードにより衣装代別途',
          '外出衣装貸出は一日延長＋¥5,500となります',
          '衣裳持ち込み＋¥9,900となります',
          ['text' => '各種オプション詳細は ', 'link' => ['href' => '#', 'label' => 'こちら']],

        ],
        'campaign_border' => '#8a8078',
        'contents'        => [
          ['label' => 'Contents/01', 'text' => 'ヘアメイク'],
          ['label' => 'Contents/02', 'text' => '着付け'],
        ],
        'contents_note'   => [
          '衣装はグレードにより別途',
          'ヘア／メイク／着付は本人分のみとなっております'
        ],
        'grades' => [
          ['letter' => 'A', 'price' => '¥9,900'],
          ['letter' => 'B', 'price' => '¥18,700'],
          ['letter' => 'C', 'price' => '¥27,500'],
        ],
        'products'        => [],
        'products_placeholder' => '#b8b0a5',
      ],
      '5years' => [
        'name'            => 'WEEKDAY / 5 years COURSE',
        'subtitle'        => 'お出かけ／出張撮影なし',
        'price'           => '¥7,700',
        'duration'        => '60',
        'features'        => [
          '土日祝日は＋¥5,500となります',
          'グレードにより衣装代別途',
          '外出衣装貸出は一日延長＋¥5,500となります',
          '衣裳持ち込み＋¥9,900となります',
          ['text' => '各種オプション詳細は ', 'link' => ['href' => '#', 'label' => 'こちら']],
        ],
        'campaign_border' => '#8a8078',
        'contents'        => [
          ['label' => 'Contents/01', 'text' => 'ヘアメイク'],
          ['label' => 'Contents/02', 'text' => '着付け'],
        ],
        'contents_note'   => [
          '衣装はグレードにより別途',
          'ヘア／メイク／着付は本人分のみとなっております'
        ],
        'grades' => [
          ['letter' => 'A', 'price' => '¥5,500'],
          ['letter' => 'B', 'price' => '¥9,900'],
          ['letter' => 'C', 'price' => '¥16,500'],
        ],
        'products'        => [],
        'products_placeholder' => '#a8a098',
      ],
      '3years' => [
        'name'            => 'WEEKDAY / 3 years COURSE',
        'subtitle'        => 'お出かけ／出張撮影なし',
        'price'           => '¥13,200',
        'duration'        => '60',
        'features'        => [
          '土日祝日は＋¥5,500となります',
          'グレードにより衣装代別途',
          '外出衣装貸出は一日延長＋¥5,500となります',
          '衣裳持ち込み＋¥9,900となります',
          ['text' => '各種オプション詳細は ', 'link' => ['href' => '#', 'label' => 'こちら']],
        ],
        'campaign_border' => '#7a6858',
        'contents'        => [
          ['label' => 'Contents/01', 'text' => '本人撮影'],
          ['label' => 'Contents/02', 'text' => '衣装2着（洋 or 和）'],
        ],
        'contents_note'   => [
          '衣装はグレードにより別途',
          'ヘア／メイク／着付は本人分のみとなっております'
        ],
        'grades' => [
          ['letter' => 'A', 'price' => '¥5,500'],
          ['letter' => 'B', 'price' => '¥9,900'],
          ['letter' => 'C', 'price' => '¥16,500'],
        ],
        'products'        => [],
        'products_placeholder' => '#a89080',
      ],
    ],
  ],
  [
    'id'          => '03',
    'title'       => 'Go out / Location photo',
    'tabs' => [
      'light'    => ['color' => '#c8c0b5', 'label' => 'Light'],
      'standard' => ['color' => '#b8b0a5', 'label' => 'Standard'],
      'premium'  => ['color' => '#a89080', 'label' => 'Premium'],
    ],
    'courses' => [
      'light' => [
        'name'     => 'LOCATION LIGHT COURSE',
        'subtitle' => 'ステップ③お参り＋ロケーション撮影',
        'price'    => '¥45,000',
        'duration' => '120',
      ],
      'standard' => [
        'name'     => 'LOCATION STANDARD COURSE',
        'subtitle' => 'ステップ③お参り＋ロケーション撮影',
        'price'    => '¥65,000',
        'duration' => '120',
      ],
      'premium' => [
        'name'     => 'LOCATION PREMIUM COURSE',
        'subtitle' => 'ステップ③お参り＋ロケーション撮影',
        'price'    => '¥85,000',
        'duration' => '120',
      ],
    ],
  ],
];
?>

<main>

  <!-- FV -->
  <section class="relative bg-white overflow-hidden">
    <div class="mx-auto max-w-1200">
      <div class="relative flex items-center gap-120">
        <div class="w-[55%] relative">
          <?php [$src, $wh] = theme_img_src_wh("src/images/shichigosan/fv.webp"); ?>
          <img
            class="w-full block"
            src="<?php echo $src; ?>"
            alt="七五三"
            loading="eager"
            <?php echo $wh; ?>>
        </div>
        <div class="">
          <span class="text-14 font-montserrat font-light tracking-[0.3em] text-black">
            SHICHIGOSAN
          </span>
        </div>
      </div>
    </div>
  </section>

  <!-- 753 PLAN -->
  <section class="bg-white px-20" id="plan">
    <div class="mx-auto max-w-1200">

      <div class="mt-150 flex justify-center">
        <h2 class="text-16 font-montserrat font-light tracking-[0.05em]">
          753 PLAN
        </h2>
      </div>

      <div class="mt-150 mx-auto max-w-756 grid gap-80">

        <?php foreach ($plans as $plan) :
          $is_open    = !empty($plan['open']);
          $default_tab = $plan['default_tab'] ?? 'light';
        ?>
          <div class="js-accordion-item" data-open="<?php echo $is_open ? 'true' : 'false'; ?>">
            <button
              type="button"
              class="js-accordion-trigger mx-auto max-w-335 w-full border-b border-[#605f5f] flex items-center justify-between pl-20 py-8 transition-opacity duration-300 pc:hover:opacity-50"
              aria-expanded="<?php echo $is_open ? 'true' : 'false'; ?>">
              <span class="text-12 font-montserrat font-light tracking-[0.05em]">
                <?php echo esc_html($plan['id']); ?>&emsp;<?php echo esc_html($plan['title']); ?>
              </span>
              <span class="js-accordion-icon text-22 font-light leading-none"><?php echo $is_open ? '−' : '+'; ?></span>
            </button>
            <div class="js-accordion-content" <?php if ($is_open) echo ' style="max-height:none"'; ?>>
              <div class="pb-80">
                <div class="pt-80 js-tab-group">

                  <div class="grid grid-cols-3 gap-10">
                    <?php foreach ($plan['tabs'] as $tab_key => $tab) : ?>
                      <button
                        type="button"
                        class="js-tab-btn [clip-path:polygon(10rem_0%,100%_0%,100%_100%,0%_100%,0%_10rem)] py-16 text-12 font-montserrat font-light tracking-[0.1em] transition-opacity duration-200"
                        style="background-color:<?php echo esc_attr($tab['color']); ?>"
                        data-tab="<?php echo esc_attr($tab_key); ?>"
                        aria-selected="<?php echo $tab_key === $default_tab ? 'true' : 'false'; ?>">
                        <?php echo esc_html($tab['label']); ?>
                      </button>
                    <?php endforeach; ?>
                  </div>

                  <?php foreach ($plan['tabs'] as $tab_key => $tab) :
                    $course = $plan['courses'][$tab_key];
                  ?>
                    <div
                      class="js-tab-panel px-60 py-150"
                      style="background-color:<?php echo esc_attr($tab['color']); ?>"
                      data-tab-panel="<?php echo esc_attr($tab_key); ?>"
                      aria-hidden="<?php echo $tab_key === $default_tab ? 'false' : 'true'; ?>">

                      <div class="grid gap-150">
                        <div class="grid gap-80">
                          <?php $heading_block($course['name'], $course['subtitle']); ?>
                          <div class="grid pc:grid-cols-2 gap-80">
                            <?php get_template_part('template-parts/common/inc-dash-row', null, ['label' => 'Price',    'value' => $course['price'],    'suffix' => '(tax in)', 'value_class' => 'text-22 font-light', 'montserrat' => true]); ?>
                            <?php get_template_part('template-parts/common/inc-dash-row', null, ['label' => 'Duration', 'value' => $course['duration'], 'suffix' => 'min',      'value_class' => 'text-22 font-light', 'montserrat' => true]); ?>
                          </div>
                          <?php if (!empty($course['features'])) : ?>
                            <ul class="flex flex-wrap justify-center gap-40">
                              <?php foreach ($course['features'] as $feature) : ?>
                                <li class="text-center text-11 font-thin leading-[2]">・<?php
                                                                                        if (is_array($feature)) {
                                                                                          echo esc_html($feature['text']);
                                                                                          if (!empty($feature['link'])) {
                                                                                            printf('<a href="%s" class="underline">%s</a>', esc_url($feature['link']['href']), esc_html($feature['link']['label']));
                                                                                          }
                                                                                        } else {
                                                                                          echo esc_html($feature);
                                                                                        }
                                                                                        ?></li>
                              <?php endforeach; ?>
                            </ul>
                          <?php endif; ?>
                          <?php if (!empty($course['campaign_border'])) : ?>
                            <div class="border p-32 text-center" style="border-color:<?php echo esc_attr($course['campaign_border']); ?>">
                              <p class="text-11 font-montserrat font-light tracking-[0.1em] mb-12">CAMPAIGN</p>
                              <p class="text-11 font-thin leading-[2]">※キャンペーン期間中は商品の組み合わせが自由</p>
                            </div>
                          <?php endif; ?>
                        </div>

                        <?php if (!empty($course['contents'])) : ?>
                          <div class="grid gap-80">
                            <?php $heading_block('COURSE CONTENTS', 'コース内容'); ?>
                            <div class="grid pc:grid-cols-2 gap-x-80 gap-y-40">
                              <?php foreach ($course['contents'] as $item) : ?>
                                <?php get_template_part('template-parts/common/inc-dash-row', null, ['label' => $item['label'], 'html' => esc_html($item['text'])]); ?>
                              <?php endforeach; ?>
                            </div>
                            <?php if (!empty($course['contents_note'])) : ?>
                              <ul class="flex flex-wrap justify-center gap-40">
                                <?php foreach ($course['contents_note'] as $note) : ?>
                                  <li class="text-center text-10 font-thin leading-[2]">・<?php
                                                                                          if (is_array($note)) {
                                                                                            echo esc_html($note['text']);
                                                                                            if (!empty($note['link'])) {
                                                                                              printf('<a href="%s" class="underline">%s</a>', esc_url($note['link']['href']), esc_html($note['link']['label']));
                                                                                            }
                                                                                          } else {
                                                                                            echo esc_html($note);
                                                                                          }
                                                                                          ?></li>
                                <?php endforeach; ?>
                              </ul>
                            <?php endif; ?>
                          </div>
                        <?php endif; ?>

                        <?php if (!empty($course['grades'])) : ?>
                          <div class="grid gap-80">
                            <?php $heading_block('COSTUME GRADE', '衣装グレード'); ?>
                            <div class="mx-auto max-w-280 w-full grid grid-cols-3 gap-20">
                              <?php foreach ($course['grades'] as $grade) : ?>
                                <div class="text-center">
                                  <div class="aspect-square bg-[#605f5f] flex flex-col items-center justify-center gap-8">
                                    <span class="text-32 font-montserrat font-light text-white leading-none"><?php echo esc_html($grade['letter']); ?></span>
                                    <span class="text-10 font-montserrat font-light text-white tracking-[0.2em]">GRADE</span>
                                  </div>
                                  <p class="mt-8 text-12 font-montserrat font-light leading-none"><?php echo esc_html($grade['price']); ?></p>
                                </div>
                              <?php endforeach; ?>
                            </div>
                          </div>
                        <?php endif; ?>

                        <?php if (!empty($course['products'])) : ?>
                          <div class="grid gap-80">
                            <?php $heading_block('COURSE PRODUCTS', 'セット内容'); ?>
                            <div class="grid pc:grid-cols-2 gap-x-80 gap-y-40">
                              <?php foreach ($course['products'] as $product) : ?>
                                <?php get_template_part('template-parts/common/inc-dash-row', null, ['label' => $product['label'], 'html' => $product['html']]); ?>
                              <?php endforeach; ?>
                            </div>
                            <?php if (!empty($course['products_placeholder'])) : ?>
                              <div class="mt-80 aspect-[16/9]" style="background-color:<?php echo esc_attr($course['products_placeholder']); ?>"></div>
                            <?php endif; ?>
                          </div>
                        <?php endif; ?>

                      </div>

                    </div>
                  <?php endforeach; ?>

                  <div class="grid grid-cols-3 gap-10">
                    <?php foreach ($plan['tabs'] as $tab_key => $tab) : ?>
                      <button
                        type="button"
                        class="js-tab-btn [clip-path:polygon(0%_0%,100%_0%,100%_calc(100%-10rem),calc(100%-10rem)_100%,0%_100%,0%_0%)] py-16 text-12 font-montserrat font-light tracking-[0.1em] transition-opacity duration-200"
                        style="background-color:<?php echo esc_attr($tab['color']); ?>"
                        data-tab="<?php echo esc_attr($tab_key); ?>"
                        aria-selected="<?php echo $tab_key === $default_tab ? 'true' : 'false'; ?>">
                        <?php echo esc_html($tab['label']); ?>
                      </button>
                    <?php endforeach; ?>
                  </div>

                </div><!-- end js-tab-group -->
              </div>
            </div><!-- end js-accordion-content -->
          </div><!-- end accordion item -->
        <?php endforeach; ?>

      </div><!-- end accordion list -->

      <div class="pb-150"></div>

    </div>
  </section>

  <!-- GALLERY -->
  <section class="bg-[#d8d3cd] px-20 py-80" id="gallery">
    <div class="mx-auto max-w-1200">
      <div class="grid gap-80">
        <div class="flex justify-center">
          <h2 class="text-14 font-montserrat font-light tracking-[0.05em]">
            GALLERY
          </h2>
        </div>
        <div class="grid grid-cols-4 gap-8">
          <?php for ($i = 1; $i <= 8; $i++) : ?>
            <div class="aspect-square bg-[#c8c0b5]">
              <!-- ギャラリー画像 <?php echo $i; ?> -->
            </div>
          <?php endfor; ?>
        </div>
        <div class="flex justify-center">
          <a class="flex items-center justify-center max-w-440 w-full min-h-42 border border-[#605f5f] transition-opacity duration-300 pc:hover:opacity-50" href="#">
            <span class="text-12">More</span>
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>