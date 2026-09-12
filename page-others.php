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
  <section class="relative aspect-square pc:aspect-[1920/480] overflow-hidden bg-[#f1ede7]">
    <div class="relative h-full">
      <div class="absolute inset-0 mx-auto max-w-920">
        <div class="absolute left-24 pc:left-64 top-96 pc:top-176 z-10 flex items-end gap-12 [writing-mode:vertical-rl] pc:[writing-mode:horizontal-tb]">
        <h1 class="text-18 font-montserrat font-light leading-none tracking-[0.18em] pc:text-24">
          OTHERS
        </h1>
        </div>
      </div>
      <?php [$fv_pc_src, $fv_pc_wh] = theme_img_src_wh('src/images/others/ta7ca_pc_other01@2x.webp'); ?>
      <?php [$fv_sp_src, $fv_sp_wh] = theme_img_src_wh('src/images/others/ta7ca_sp_other01@2x.webp'); ?>
      <picture>
        <source media="(min-width: 1272px)" srcset="<?php echo esc_url($fv_pc_src); ?>">
        <img class="absolute inset-0 block h-full w-full object-cover" src="<?php echo esc_url($fv_sp_src); ?>" alt="" loading="eager" fetchpriority="high" <?php echo $fv_sp_wh; ?>>
      </picture>
    </div>
  </section>

  <?php foreach ($menu_sections as $section) : ?>
    <section id="<?php echo esc_attr($section['anchor']); ?>" class="mt-120 pc:mt-150 px-40">
      <div class="mx-auto max-w-1116 pc:relative">
        <?php get_template_part('template-parts/common/inc-shooting-menu-section-heading', null, ['section' => $section]); ?>

        <div class="mt-20 pc:mt-80 flex flex-col items-center gap-y-80">
          <?php foreach ($section['groups'] as $group) : ?>
            <section class="flex w-full pc:w-380 flex-col gap-80 pc:gap-40">
              <?php get_template_part('template-parts/common/inc-shooting-menu-group-heading', null, ['group' => $group]); ?>

              <ul class="grid gap-y-40 px-20">
                <?php foreach ($group['courses'] as $course) : ?>
                  <?php $modal_id = $course['modal']['id'] ?? 'others-course-modal'; ?>
                  <li class="pl-40">
                    <button
                      type="button"
                      class="js-kids-course-modal-trigger flex w-full min-w-0 items-center justify-between gap-20 border-b border-[#605f5f] px-4 pb-12 text-left transition-opacity duration-300 hoverable:hover:opacity-50"
                      aria-controls="<?php echo esc_attr($modal_id); ?>"
                      aria-haspopup="dialog"
                      data-kids-course-modal-target="<?php echo esc_attr($modal_id); ?>"
                      data-kids-course-modal-group="<?php echo esc_attr($group['title']); ?>"
                      data-kids-course-modal-group-ja="<?php echo esc_attr($group['title_ja']); ?>"
                      data-kids-course-modal-name="<?php echo esc_attr($course['name']); ?>"
                      data-kids-course-modal-price="<?php echo esc_attr($course['price']); ?>">
                      <span class="font-montserrat leading-none tracking-[0.05em] text-12 font-light">
                        <?php echo esc_html($course['name']); ?>
                      </span>
                      <span class="flex items-center gap-16">
                        <span class="font-montserrat leading-none tracking-[0.05em] text-12 font-light">
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
