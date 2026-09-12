<?php
/* Template Name: BABYページ */

$studio_course_notes = [
  ['text' => '＊ 土日祝日は＋¥5,500となります'],
  ['text' => '＊ 各種オプション詳細は ', 'link' => 'こちら'],
];

$menu_sections = [
  [
    'anchor' => 'baby-newborn',
    'number' => '01',
    'title' => 'New born',
    'title_ja' => 'ages 0 to 2',
    'modal_title' => 'ニューボーン',
    'image' => 'src/images/baby/ta7ca_baby02@2x.webp',
    'groups' => [
      [
        'title' => 'Studio shooting',
        'title_ja' => 'スタジオ撮影のみ',
        'courses' => [
          [
            'name' => 'S-LIGHT',
            'hide_name' => true,
            'price' => '¥66,000',
            'modal' => [
              'id' => 'baby-course-modal-new-born-s-light',
              'name' => '',
              'group_title' => '',
              'subtitle' => '平日／スタジオ撮影のみ',
              'duration' => '120',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影', '衣装１着'],
              'products' => ['HISTOIRE 10P'],
            ],
          ],
        ],
      ],
    ],
  ],
  [
    'anchor' => 'baby-omiyamairi',
    'number' => '02',
    'title' => 'Omiyamairi',
    'title_ja' => '生後１ヶ月頃',
    'modal_title' => 'お宮参り',
    'image' => 'src/images/baby/ta7ca_baby03@2x.webp',
    'groups' => [
      [
        'title' => 'Studio shooting',
        'title_ja' => 'スタジオ撮影のみ',
        'courses' => [
          [
            'name' => 'S-LIGHT',
            'hide_name' => true,
            'price' => '¥33,000',
            'modal' => [
              'id' => 'baby-course-modal-omiyamairi-s-light',
              'name' => '',
              'group_title' => '',
              'subtitle' => '平日／スタジオ撮影のみ',
              'duration' => '60',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影', '衣装１着'],
              'products' => ['HISTOIRE 10P'],
            ],
          ],
        ],
      ],
    ],
  ],
  [
    'anchor' => 'baby-birthday',
    'number' => '03',
    'title' => 'Birthday',
    'title_ja' => '１歳から毎年のお誕生日',
    'modal_title' => 'バースデー',
    'image' => 'src/images/baby/ta7ca_baby04@2x.webp',
    'groups' => [
      [
        'title' => 'Studio shooting',
        'title_ja' => 'スタジオ撮影のみ',
        'courses' => [
          [
            'name' => 'STANDARD',
            'price' => '¥33,000',
            'emphasis' => true,
            'modal' => [
              'id' => 'baby-course-modal-birthday-standard',
              'name' => 'STANDARD COURSE',
              'subtitle' => '平日／スタンダードコース',
              'duration' => '60',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影', '衣装１着(洋)'],
              'products' => ['HISTOIRE 10P', 'アルバムスタンド S'],
            ],
          ],
          [
            'name' => 'PREMIUM',
            'price' => '¥55,000',
            'modal' => [
              'id' => 'baby-course-modal-birthday-premium',
              'name' => 'PREMIUM COURSE',
              'subtitle' => '平日／プレミアムコース',
              'duration' => '60',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影', '衣装１着(洋)', '家族撮影(４名まで)'],
              'products' => ['レタッチ済みデータ 100', 'アートデータ 1種', 'HISTOIRE 10P', 'アルバムスタンド S'],
            ],
          ],
          [
            'name' => 'LIGHT',
            'price' => '¥25,300',
            'modal' => [
              'id' => 'baby-course-modal-birthday-light',
              'name' => 'LIGHT COURSE',
              'subtitle' => '平日／ライトコース',
              'duration' => '60',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影'],
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
        <h1 class="text-18 pc:text-24 font-montserrat font-light leading-none tracking-[0.18em]">
          BABY
        </h1>
        <span class="text-10 pc:text-12 font-montserrat font-light leading-none tracking-[0.2em]">
          ages 0 to 2
        </span>
        </div>
      </div>
      <?php [$fv_pc_src, $fv_pc_wh] = theme_img_src_wh('src/images/baby/ta7ca_pc_baby01@2x.webp'); ?>
      <?php [$fv_sp_src, $fv_sp_wh] = theme_img_src_wh('src/images/baby/ta7ca_sp_baby01@2x.webp'); ?>
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
                  <?php $modal_id = $course['modal']['id'] ?? 'baby-course-modal'; ?>
                  <li class="<?php echo !empty($course['emphasis']) ? '' : 'pl-40'; ?>">
                    <button
                      type="button"
                      class="js-kids-course-modal-trigger flex w-full min-w-0 items-center justify-between gap-20 border-b border-[#605f5f] px-4 pb-12 text-left transition-opacity duration-300 hoverable:hover:opacity-50"
                      aria-controls="<?php echo esc_attr($modal_id); ?>"
                      aria-haspopup="dialog"
                      data-kids-course-modal-target="<?php echo esc_attr($modal_id); ?>"
                      data-kids-course-modal-group="<?php echo esc_attr($group['title']); ?>"
                      data-kids-course-modal-group-ja="<?php echo esc_attr($group['title_ja']); ?>"
                      data-kids-course-modal-name="<?php echo esc_attr($course['name']); ?>"
                      data-kids-course-modal-price="<?php echo esc_attr($course['price'] ?? ''); ?>">
                      <?php if (empty($course['hide_name'])) : ?>
                        <span class="font-montserrat leading-none tracking-[0.05em] <?php echo !empty($course['emphasis']) ? 'text-16 font-semibold' : 'text-12 font-light'; ?>">
                          <?php echo esc_html($course['name']); ?>
                        </span>
                      <?php endif; ?>
                      <span class="flex items-center gap-16 <?php echo !empty($course['hide_name']) ? 'ml-auto' : ''; ?>">
                        <?php if (!empty($course['price'])) : ?>
                          <span class="font-montserrat leading-none tracking-[0.05em] <?php echo !empty($course['emphasis']) ? 'text-16 font-semibold' : 'text-12 font-light'; ?>">
                            <span class="<?php echo !empty($course['emphasis']) ? 'text-10' : 'text-8'; ?>">¥</span><?php echo esc_html(ltrim($course['price'], '¥')); ?>
                          </span>
                        <?php endif; ?>
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

  get_template_part('template-parts/common/inc-course-modal', null, ['id' => 'baby-course-modal']);
}, 5);
?>

<?php get_footer(); ?>
