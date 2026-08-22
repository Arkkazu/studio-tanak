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
            'price' => '¥66,000',
            'modal' => [
              'id' => 'baby-course-modal-new-born-s-light',
              'name' => 'S-LIGHT COURSE',
              'subtitle' => '平日／Sライトコース',
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
            'price' => '¥33,000',
            'modal' => [
              'id' => 'baby-course-modal-omiyamairi-s-light',
              'name' => 'S-LIGHT COURSE',
              'subtitle' => '平日／Sライトコース',
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
            'name' => 'LIGHT',
            'price' => '¥33,000',
            'emphasis' => true,
            'modal' => [
              'id' => 'baby-course-modal-birthday-light',
              'name' => 'LIGHT COURSE',
              'subtitle' => '平日／ライトコース',
              'duration' => '60',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影', '衣装１着(洋)'],
              'products' => ['HISTOIRE 10P'],
            ],
          ],
          [
            'name' => 'STANDARD',
            'price' => '¥55,000',
            'modal' => [
              'id' => 'baby-course-modal-birthday-standard',
              'name' => 'STANDARD COURSE',
              'subtitle' => '平日／スタンダードコース',
              'duration' => '60',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影', '衣装２着(洋)', '家族撮影(４名まで)'],
              'products' => ['レタッチ済みデータ', 'アートデータ２種', 'HISTOIRE 10P'],
            ],
          ],
          [
            'name' => 'S-LIGHT',
            'price' => '¥25,300',
            'modal' => [
              'id' => 'baby-course-modal-birthday-s-light',
              'name' => 'S-LIGHT COURSE',
              'subtitle' => '平日／Sライトコース',
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
  <section class="relative px-20 pt-100 pb-160">
    <div class="relative mx-auto max-w-688">
      <div class="vertical-rl-mixed absolute left-0 top-32 flex items-end gap-12">
        <h1 class="text-18 pc:text-24 font-montserrat font-light leading-none tracking-[0.18em]">
          BABY
        </h1>
        <span class="text-10 pc:text-12 font-montserrat font-light leading-none tracking-[0.2em]">
          ages 0 to 2
        </span>
      </div>
      <div class="mx-auto w-280 pc:w-560">
        <?php [$src, $wh] = theme_img_src_wh('src/images/baby/baby-fv.jpg'); ?>
        <img class="block w-full" src="<?php echo $src; ?>" alt="" loading="eager" fetchpriority="high" <?php echo $wh; ?>>
      </div>
    </div>
  </section>

  <?php foreach ($menu_sections as $section) : ?>
    <section id="<?php echo esc_attr($section['anchor']); ?>" class="mt-80 pc:mt-160 px-20">
      <div class="mx-auto max-w-688 pc:relative">
        <div class="relative flex items-center justify-center">
          <div class="relative flex flex-col items-center gap-4">
            <?php [$src, $wh] = theme_img_src_wh('src/images/common/' . $section['number'] . '.svg'); ?>
            <img class="absolute -left-20 -translate-x-full block w-48 pc:w-71" src="<?php echo $src; ?>" alt="" loading="lazy" <?php echo $wh; ?>>
            <h2 class="text-15 pc:text-16 text-center font-montserrat font-light leading-[1.2] tracking-[0.05em]">
              <?php echo esc_html($section['title']); ?>
            </h2>
            <p class="text-10 pc:text-13 font-light leading-[1.2] text-gray">
              <?php echo esc_html($section['title_ja']); ?>
            </p>
          </div>
        </div>

        <div class="mt-20 pc:mt-80 flex flex-col gap-90 pc:gap-150">
          <?php foreach ($section['groups'] as $group) : ?>
            <section class="flex flex-col gap-40 pc:gap-80">
              <div class="flex items-center justify-between">
                <div class="flex flex-col gap-6 w-170 pc:w-auto shrink-0 pc:shrink">
                  <h3 class="text-14 font-montserrat font-light leading-[1.2] tracking-[0.05em]">
                    <?php echo esc_html($group['title']); ?>
                  </h3>
                  <p class="text-10 font-light leading-[1.2] text-gray">
                    <?php echo esc_html($group['title_ja']); ?>
                  </p>
                </div>
                <div class="relative max-pc:-mr-16 pc:absolute pc:-top-42 pc:right-0 w-160 pc:w-147 shrink-0">
                  <?php [$src, $wh] = theme_img_src_wh($section['image']); ?>
                  <img class="block w-full" src="<?php echo $src; ?>" alt="" loading="lazy" <?php echo $wh; ?>>
                </div>
              </div>

              <ul class="px-20 grid pc:grid-cols-2 gap-x-80 pc:gap-x-120 gap-y-56">
                <?php foreach ($group['courses'] as $course) : ?>
                  <?php $modal_id = $course['modal']['id'] ?? 'baby-course-modal'; ?>
                  <li class="<?php echo !empty($course['emphasis']) ? '' : 'pl-40'; ?>">
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
                      <span class="font-montserrat leading-none tracking-[0.05em] <?php echo !empty($course['emphasis']) ? 'text-16 font-semibold' : 'text-12 font-light'; ?>">
                        <?php echo esc_html($course['name']); ?>
                      </span>
                      <span class="flex items-center gap-16">
                        <span class="font-montserrat leading-none tracking-[0.05em] <?php echo !empty($course['emphasis']) ? 'text-16 font-semibold' : 'text-12 font-light'; ?>">
                          <span class="<?php echo !empty($course['emphasis']) ? 'text-10' : 'text-8'; ?>">¥</span><?php echo esc_html(ltrim($course['price'], '¥')); ?>
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

  get_template_part('template-parts/common/inc-course-modal', null, ['id' => 'baby-course-modal']);
}, 5);
?>

<?php get_footer(); ?>
