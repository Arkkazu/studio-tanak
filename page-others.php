<?php
/* Template Name: OTHERSページ */

$studio_course_notes = [
  ['text' => '＊ 土日祝日は＋¥5,500となります'],
  ['text' => '＊ 各種オプション詳細は ', 'link' => 'こちら'],
];

$menu_sections = [
  [
    'anchor' => 'others-id-photo',
    'number' => '01',
    'title' => 'ID photo',
    'title_ja' => '証明写真',
    'modal_title' => '証明写真（予約制）',
    'image' => 'src/images/others/ta7ca_others02@2x.webp',
    'groups' => [
      [
        'title' => 'Studio shooting',
        'title_ja' => 'スタジオ撮影',
        'courses' => [
          [
            'name' => 'PRINT&DATA',
            'price' => '¥6,600',
            'modal' => [
              'id' => 'others-course-modal-id-print-data',
              'name' => 'PRINT&DATA COURSE',
              'group_title' => '',
              'subtitle' => '平日／スタジオ撮影',
              'duration' => '15',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影', "3.5〜4.5cmまでのサイズ\n4枚プリント", '1カットデータ', '美肌修正レタッチ'],
              'products' => [],
            ],
          ],
          [
            'name' => 'DATA',
            'price' => '¥4,400',
            'modal' => [
              'id' => 'others-course-modal-id-data',
              'name' => 'DATA COURSE',
              'group_title' => '',
              'subtitle' => '平日／スタジオ撮影',
              'duration' => '15',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影', '1カットデータ', '美肌修正レタッチ'],
              'products' => [],
            ],
          ],
          [
            'name' => 'PRINT',
            'price' => '¥3,300',
            'modal' => [
              'id' => 'others-course-modal-id-print',
              'name' => 'PRINT COURSE',
              'group_title' => '',
              'subtitle' => '平日／スタジオ撮影',
              'duration' => '15',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影', "3.5〜4.5cmまでのサイズ\n4枚プリント", '美肌修正レタッチ'],
              'products' => [],
            ],
          ],
        ],
      ],
    ],
  ],
  [
    'anchor' => 'others-store-real-estate',
    'number' => '02',
    'title' => 'Store Photography<br>Real Estate Photo',
    'title_ja' => '店舗・住宅撮影',
    'image' => 'src/images/others/ta7ca_others03@2x.webp',
    'groups' => [
      [
        'title' => 'Location photo',
        'title_ja' => '出張撮影',
        'courses' => [
          [
            'name' => 'PREMIUM',
            'price' => '¥66,000',
            'modal' => [
              'id' => 'others-course-modal-store-premium',
              'name' => 'PREMIUM COURSE',
              'subtitle' => '平日／プレミアムコース',
              'duration' => '60',
              'notes' => $studio_course_notes,
              'contents' => ['内観・外観撮影'],
              'products' => ['レタッチ済みデータ', 'HISTOIRE 10P', 'アートデータ', 'アルバムスタンド S'],
            ],
          ],
          [
            'name' => 'STANDARD',
            'price' => '¥44,000',
            'modal' => [
              'id' => 'others-course-modal-store-standard',
              'name' => 'STANDARD COURSE',
              'subtitle' => '平日／スタンダードコース',
              'duration' => '60',
              'notes' => $studio_course_notes,
              'contents' => ['内観・外観撮影'],
              'products' => ['レタッチ済みデータ'],
            ],
          ],
        ],
      ],
    ],
  ],
  [
    'anchor' => 'others-pre-wedding',
    'number' => '03',
    'title' => 'Pre-wedding photo',
    'title_ja' => '結婚式前撮り（ロケ撮影）',
    'image' => 'src/images/others/ta7ca_others04@2x.webp',
    'groups' => [
      [
        'title' => 'Location photo',
        'title_ja' => '出張撮影',
        'courses' => [
          [
            'name' => 'PREMIUM',
            'price' => '¥132,000',
            'modal' => [
              'id' => 'others-course-modal-pre-wedding-premium',
              'name' => 'PREMIUM COURSE',
              'subtitle' => '平日／プレミアムコース',
              'duration' => '120',
              'notes' => $studio_course_notes,
              'contents' => ['出張撮影'],
              'products' => ['レタッチ済みデータ 100', 'MURAL or PETIT BOIS', 'HISTOIRE 20P', 'アートデータ', 'アルバムスタンド M'],
            ],
          ],
          [
            'name' => 'STANDARD',
            'price' => '¥110,000',
            'modal' => [
              'id' => 'others-course-modal-pre-wedding-standard',
              'name' => 'STANDARD COURSE',
              'subtitle' => '平日／スタンダードコース',
              'duration' => '120',
              'notes' => $studio_course_notes,
              'contents' => ['出張撮影'],
              'products' => ['レタッチ済みデータ 100', 'HISTOIRE 20P', 'アートデータ', 'アルバムスタンド S'],
            ],
          ],
          [
            'name' => 'LIGHT',
            'price' => '¥88,000',
            'modal' => [
              'id' => 'others-course-modal-pre-wedding-light',
              'name' => 'LIGHT COURSE',
              'subtitle' => '平日／ライトコース',
              'duration' => '120',
              'notes' => $studio_course_notes,
              'contents' => ['出張撮影'],
              'products' => ['HISTOIRE 10P'],
            ],
          ],
        ],
      ],
    ],
  ],
];

get_header();
?>

<main class="overflow-hidden bg-white pb-160 pc:pb-240">
  <section class="relative px-20 pt-120">
    <div class="relative mx-auto max-w-688">
      <div class="vertical-rl-mixed absolute left-0 top-80 flex items-end gap-12">
        <h1 class="text-18 font-montserrat font-light leading-none tracking-[0.18em] pc:text-24">
          OTHERS
        </h1>
      </div>
      <div class="mx-auto w-280 pc:w-560">
        <?php [$src, $wh] = theme_img_src_wh('src/images/others/kv.webp'); ?>
        <img class="block w-full" src="<?php echo $src; ?>" alt="" loading="eager" fetchpriority="high" <?php echo $wh; ?>>
      </div>
    </div>
  </section>

  <?php foreach ($menu_sections as $section) : ?>
    <section id="<?php echo esc_attr($section['anchor']); ?>" class="mt-120 px-20 pc:mt-160">
      <div class="mx-auto max-w-688 pc:relative">
        <div class="relative flex items-center justify-center">
          <div class="relative flex flex-col items-center gap-4">
            <?php [$src, $wh] = theme_img_src_wh('src/images/common/' . $section['number'] . '.svg'); ?>
            <img class="absolute -left-20 block w-48 -translate-x-full pc:w-71" src="<?php echo $src; ?>" alt="" loading="lazy" <?php echo $wh; ?>>
            <h2 class="text-center text-15 font-montserrat font-light leading-[1.2] tracking-[0.05em] pc:text-16">
              <?php echo wp_kses($section['title'], ['br' => ['class' => true]]); ?>
            </h2>
            <p class="text-10 font-light leading-[1.2] text-gray pc:text-13">
              <?php echo esc_html($section['title_ja']); ?>
            </p>
          </div>
        </div>

        <div class="mt-20 flex flex-col gap-90 pc:mt-80 pc:gap-150">
          <?php foreach ($section['groups'] as $group) : ?>
            <section class="flex flex-col gap-40 pc:gap-80">
              <div class="flex items-center justify-between">
                <div class="flex w-170 shrink-0 flex-col gap-6 pc:w-auto pc:shrink">
                  <h3 class="text-14 font-montserrat font-light leading-[1.2] tracking-[0.05em]">
                    <?php echo esc_html($group['title']); ?>
                  </h3>
                  <p class="text-10 font-light leading-[1.2] text-gray">
                    <?php echo esc_html($group['title_ja']); ?>
                  </p>
                </div>
                <div class="relative w-160 max-pc:-mr-16 shrink-0 pc:absolute pc:-top-42 pc:right-0 pc:w-147">
                  <?php [$src, $wh] = theme_img_src_wh($section['image']); ?>
                  <img class="block w-full" src="<?php echo $src; ?>" alt="" loading="lazy" <?php echo $wh; ?>>
                </div>
              </div>

              <ul class="px-20 grid gap-y-56">
                <?php foreach ($group['courses'] as $course) : ?>
                  <?php $modal_id = $course['modal']['id'] ?? 'others-course-modal'; ?>
                  <li class="pl-40">
                    <button
                      type="button"
                      class="js-kids-course-modal-trigger flex w-full items-center justify-between gap-20 border-b border-[#605f5f] px-4 pb-12 text-left transition-opacity duration-300 hoverable:hover:opacity-50"
                      aria-controls="<?php echo esc_attr($modal_id); ?>"
                      aria-haspopup="dialog"
                      data-kids-course-modal-target="<?php echo esc_attr($modal_id); ?>"
                      data-kids-course-modal-group="<?php echo esc_attr($group['title']); ?>"
                      data-kids-course-modal-group-ja="<?php echo esc_attr($group['title_ja']); ?>"
                      data-kids-course-modal-name="<?php echo esc_attr($course['name']); ?>"
                      data-kids-course-modal-price="<?php echo esc_attr($course['price']); ?>">
                      <span class="text-12 font-montserrat font-light leading-none tracking-[0.05em]">
                        <?php echo esc_html($course['name']); ?>
                      </span>
                      <span class="flex items-center gap-16">
                        <span class="text-12 font-montserrat font-light leading-none tracking-[0.05em]">
                          <span class="text-8">¥</span><?php echo esc_html(ltrim($course['price'], '¥')); ?>
                        </span>
                        <?php [$src, $wh] = theme_img_src_wh('src/images/common/circe-arrow-right.svg'); ?>
                        <img class="block w-16 shrink-0" src="<?php echo $src; ?>" alt="" loading="lazy" <?php echo $wh; ?>>
                      </span>
                    </button>
                  </li>
                <?php endforeach; ?>
              </ul>
            </section>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endforeach; ?>
</main>

<?php
add_action('wp_footer', static function () use ($menu_sections): void {
  foreach ($menu_sections as $modal_section) {
    foreach ($modal_section['groups'] as $modal_group) {
      foreach ($modal_group['courses'] as $modal_course) {
        if (empty($modal_course['modal'])) {
          continue;
        }

        get_template_part('template-parts/common/inc-course-modal', null, [
          'modal' => $modal_course['modal'],
          'course' => $modal_course,
          'section_title' => $modal_section['modal_title'] ?? $modal_section['title_ja'],
          'group_title' => $modal_course['modal']['group_title'] ?? $modal_group['title_ja'],
        ]);
      }
    }
  }

  get_template_part('template-parts/common/inc-course-modal', null, ['id' => 'others-course-modal']);
}, 5);
?>

<?php get_footer(); ?>
