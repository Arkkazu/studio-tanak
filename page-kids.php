<?php
/* Template Name: KIDSページ */

$studio_course_notes = [
  ['text' => '＊ 土日祝日は＋¥5,500となります'],
  ['text' => '＊ 各種オプション詳細は ', 'link' => 'こちら'],
];

$studio_course_hair_note = <<<'TEXT'
＊ ヘアメイクはご本人様のみとなっております。
　家族撮影や兄弟撮影のご家族様へのヘアメイクは含まれません。
　（お子様の10分程度の簡単なアレンジは除く）
TEXT;

$no_location_course_note = '＊ お持ち込み料＋¥9,900となります';

$location_course_note = <<<'TEXT'
＊ お持ち込み料＋¥9,900となります

＊ ヘアメイクはご本人様のみとなっております。
　家族撮影や兄弟撮影のご家族様へのヘアメイクは含まれません。
　（お子様の10分程度の簡単なアレンジは除く）
TEXT;

$menu_sections = [
  [
    'anchor' => 'kids-shichigosan',
    'number' => '01',
    'title' => 'Shichi-Go-San',
    'title_ja' => '七五三',
    'image' => 'src/images/kids/ta7ca_kids02@2x.webp',
    'groups' => [
      [
        'title' => 'Studio shooting',
        'title_ja' => 'スタジオ撮影のみ',
        'courses' => [
          [
            'name' => 'STANDARD',
            'price' => '¥88,000',
            'emphasis' => true,
            'modal' => [
              'id' => 'kids-course-modal-standard',
              'name' => 'STANDARD COURSE',
              'subtitle' => '平日／スタンダードコース',
              'duration' => '180',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影', '衣装２着(洋 & 和)', '着付け', 'ヘアメイク', '家族撮影(４名まで)', '兄弟撮影'],
              'contents_note' => $studio_course_hair_note,
              'products' => ['レタッチ済みデータ', 'MURAL or PETIT BOIS', 'HISTOIRE 20P', 'アートデータ ２種', 'アルバムスタンド S'],
            ],
          ],
          [
            'name' => 'PREMIUM',
            'price' => '¥110,000',
            'modal' => [
              'id' => 'kids-course-modal-premium',
              'name' => 'PREMIUM COURSE',
              'subtitle' => '平日／プレミアムコース',
              'duration' => '180',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影', '衣装２着(洋 & 和)', '着付け', 'ヘアメイク', '家族撮影(制限なし)', '兄弟撮影'],
              'contents_note' => $studio_course_hair_note,
              'products' => ['レタッチ済みデータ', 'MURAL or PETIT BOIS', 'HISTOIRE 20P', 'アートデータ ２種', 'アルバムスタンド M', "２Lサイズ２枚\nor\nA4サイズ１枚印刷"],
            ],
          ],
          [
            'name' => 'LIGHT',
            'price' => '¥66,000',
            'modal' => [
              'id' => 'kids-course-modal-light',
              'name' => 'LIGHT COURSE',
              'subtitle' => '平日／ライトコース',
              'duration' => '120',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影', '衣装１着(洋 or 和)', '着付け', 'ヘアメイク', '家族撮影(４名まで)'],
              'contents_note' => $studio_course_hair_note,
              'products' => ['レタッチ済みデータ', 'MURAL or PETIT BOIS', 'HISTOIRE 10P', 'アートデータ ２種'],
            ],
          ],
        ],
      ],
      [
        'title' => 'Go out / No location photo',
        'title_ja' => 'お出かけ／出張撮影なし',
        'courses' => [
          [
            'name' => '3 years',
            'price' => '¥22,000',
            'modal' => [
              'id' => 'kids-course-modal-no-location-3-years',
              'name' => '3 years',
              'group_title' => 'お出かけ',
              'subtitle' => '出張撮影なし',
              'duration' => '60',
              'notes' => $studio_course_notes,
              'contents' => ['衣装１着(洋 or 和)', '着付け', 'ヘアメイク'],
              'contents_note' => $no_location_course_note,
              'products' => [],
            ],
          ],
          [
            'name' => '5 years',
            'price' => '¥22,000',
            'modal' => [
              'id' => 'kids-course-modal-no-location-5-years',
              'name' => '5 years',
              'group_title' => 'お出かけ',
              'subtitle' => '出張撮影なし',
              'duration' => '60',
              'notes' => $studio_course_notes,
              'contents' => ['衣装１着(洋 or 和)', '着付け', 'ヘアメイク'],
              'contents_note' => $no_location_course_note,
              'products' => [],
            ],
          ],
          [
            'name' => '7 years',
            'price' => '¥44,000',
            'modal' => [
              'id' => 'kids-course-modal-no-location-7-years',
              'name' => '7 years',
              'group_title' => 'お出かけ',
              'subtitle' => '出張撮影なし',
              'duration' => '120',
              'notes' => $studio_course_notes,
              'contents' => ['衣装１着(洋 or 和)', '着付け', 'ヘアメイク'],
              'contents_note' => $no_location_course_note,
              'products' => [],
            ],
          ],
        ],
      ],
      [
        'title' => 'Go out / Location photo',
        'title_ja' => 'お出かけ／出張撮影あり',
        'courses' => [
          [
            'name' => '3 years',
            'price' => '¥66,000',
            'modal' => [
              'id' => 'kids-course-modal-location-3-years',
              'name' => '3 years',
              'group_title' => 'お出かけ',
              'subtitle' => '出張撮影あり',
              'duration' => '60',
              'notes' => $studio_course_notes,
              'contents' => ['衣装１着(洋 or 和)', '着付け', 'ヘアメイク', '家族撮影(制限なし)', '兄弟撮影'],
              'contents_note' => $location_course_note,
              'products' => ['レタッチ済みデータ'],
            ],
          ],
          [
            'name' => '5 years',
            'price' => '¥66,000',
            'modal' => [
              'id' => 'kids-course-modal-location-5-years',
              'name' => '5 years',
              'group_title' => 'お出かけ',
              'subtitle' => '出張撮影あり',
              'duration' => '60',
              'notes' => $studio_course_notes,
              'contents' => ['衣装１着(洋 or 和)', '着付け', 'ヘアメイク', '家族撮影(制限なし)', '兄弟撮影'],
              'contents_note' => $location_course_note,
              'products' => ['レタッチ済みデータ'],
            ],
          ],
          [
            'name' => '7 years',
            'price' => '¥88,000',
            'modal' => [
              'id' => 'kids-course-modal-location-7-years',
              'name' => '7 years',
              'group_title' => 'お出かけ',
              'subtitle' => '出張撮影あり',
              'duration' => '120',
              'notes' => $studio_course_notes,
              'contents' => ['衣装１着(洋 or 和)', '着付け', 'ヘアメイク', '家族撮影(制限なし)', '兄弟撮影'],
              'contents_note' => $location_course_note,
              'products' => ['レタッチ済みデータ'],
            ],
          ],
        ],
      ],
    ],
  ],
  [
    'anchor' => 'kids-admission-graduation',
    'number' => '02',
    'title' => 'Admission Graduation',
    'title_ja' => '入園・卒園・入学・卒業',
    'image' => 'src/images/kids/ta7ca_kids03@2x.webp',
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
              'id' => 'kids-course-modal-admission-s-light',
              'name' => 'S-LIGHT COURSE',
              'subtitle' => '平日／Sライトコース',
              'duration' => '60',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影', '家族撮影(４名まで)'],
              'products' => ['HISTOIRE 10P'],
            ],
          ],
        ],
      ],
    ],
  ],
  [
    'anchor' => 'kids-graduation-hakama',
    'number' => '03',
    'title' => 'Graduation Hakama',
    'title_ja' => '卒業袴',
    'image' => 'src/images/kids/ta7ca_kids04@2x.webp',
    'groups' => [
      [
        'title' => 'Studio shooting',
        'title_ja' => 'スタジオ撮影のみ',
        'courses' => [
          [
            'name' => 'STANDARD',
            'price' => '¥55,000',
            'emphasis' => true,
            'modal' => [
              'id' => 'kids-course-modal-hakama-standard',
              'name' => 'STANDARD COURSE',
              'subtitle' => '平日／スタンダードコース',
              'duration' => '120',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影', '衣装１着', '着付け', 'ヘアメイク', '家族撮影(４名まで)', '兄弟撮影'],
              'contents_note' => $studio_course_hair_note,
              'products' => ['レタッチ済みデータ', 'MURAL or PETIT BOIS', 'HISTOIRE 20P', 'アートデータ ２種', 'アルバムスタンド S'],
            ],
          ],
          [
            'name' => 'PREMIUM',
            'price' => '¥66,000',
            'modal' => [
              'id' => 'kids-course-modal-hakama-premium',
              'name' => 'PREMIUM COURSE',
              'subtitle' => '平日／プレミアムコース',
              'duration' => '120',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影', '衣装１着', '着付け', 'ヘアメイク', '家族撮影(制限なし)', '兄弟撮影'],
              'contents_note' => $studio_course_hair_note,
              'products' => ['レタッチ済みデータ', 'MURAL or PETIT BOIS', 'HISTOIRE 20P', 'アートデータ ２種', 'アルバムスタンド M', "２Lサイズ２枚\nor\nA4サイズ１枚印刷"],
            ],
          ],
          [
            'name' => 'LIGHT',
            'price' => '¥44,000',
            'modal' => [
              'id' => 'kids-course-modal-hakama-light',
              'name' => 'LIGHT COURSE',
              'subtitle' => '平日／ライトコース',
              'duration' => '120',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影', '衣装１着', '着付け', 'ヘアメイク', '家族撮影(４名まで)'],
              'contents_note' => $studio_course_hair_note,
              'products' => ['レタッチ済みデータ', 'MURAL or PETIT BOIS', 'HISTOIRE 10P', 'アートデータ ２種'],
            ],
          ],
        ],
      ],
    ],
  ],
  [
    'anchor' => 'kids-half-coming-of-age',
    'number' => '04',
    'title' => 'Half coming of age<br>ceremony',
    'title_ja' => 'ハーフ成人式',
    'image' => 'src/images/kids/ta7ca_kids05@2x.webp',
    'groups' => [
      [
        'title' => 'Studio shooting',
        'title_ja' => 'スタジオ撮影のみ',
        'courses' => [
          [
            'name' => 'STANDARD',
            'price' => '¥66,000',
            'emphasis' => true,
            'modal' => [
              'id' => 'kids-course-modal-half-adult-standard',
              'name' => 'STANDARD COURSE',
              'subtitle' => '平日／スタンダードコース',
              'duration' => '120',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影', '衣装１着', '着付け', 'ヘアメイク', '家族撮影(４名まで)', '兄弟撮影'],
              'contents_note' => $studio_course_hair_note,
              'products' => ['レタッチ済みデータ', 'MURAL or PETIT BOIS', 'HISTOIRE 20P', 'アートデータ ２種', 'アルバムスタンド S'],
            ],
          ],
          [
            'name' => 'PREMIUM',
            'price' => '¥88,000',
            'modal' => [
              'id' => 'kids-course-modal-half-adult-premium',
              'name' => 'PREMIUM COURSE',
              'subtitle' => '平日／プレミアムコース',
              'duration' => '120',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影', '衣装１着', '着付け', 'ヘアメイク', '家族撮影(制限なし)', '兄弟撮影'],
              'contents_note' => $studio_course_hair_note,
              'products' => ['レタッチ済みデータ', 'MURAL or PETIT BOIS', 'HISTOIRE 20P', 'アートデータ ２種', 'アルバムスタンド M', "２Lサイズ２枚\nor\nA4サイズ１枚印刷"],
            ],
          ],
          [
            'name' => 'LIGHT',
            'price' => '¥55,000',
            'modal' => [
              'id' => 'kids-course-modal-half-adult-light',
              'name' => 'LIGHT COURSE',
              'subtitle' => '平日／ライトコース',
              'duration' => '120',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影', '衣装１着', '着付け', 'ヘアメイク', '家族撮影(４名まで)'],
              'contents_note' => $studio_course_hair_note,
              'products' => ['レタッチ済みデータ', 'MURAL or PETIT BOIS', 'HISTOIRE 10P', 'アートデータ ２種'],
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
            KIDS
          </h1>
          <span class="text-10 pc:text-12 font-montserrat font-light leading-none tracking-[0.2em]">
            shooting menu
          </span>
        </div>
      </div>
      <?php [$fv_pc_src, $fv_pc_wh] = theme_img_src_wh('src/images/kids/ta7ca_pc_kids01@2x.webp'); ?>
      <?php [$fv_sp_src, $fv_sp_wh] = theme_img_src_wh('src/images/kids/ta7ca_sp_kids01@2x.webp'); ?>
      <picture>
        <source media="(min-width: 1272px)" srcset="<?php echo esc_url($fv_pc_src); ?>">
        <img class="absolute inset-0 block h-full w-full object-cover" src="<?php echo esc_url($fv_sp_src); ?>" alt="" loading="eager" fetchpriority="high" <?php echo $fv_sp_wh; ?>>
      </picture>
    </div>
  </section>

  <?php foreach ($menu_sections as $section) : ?>
    <?php $group_count = count($section['groups']); ?>
    <section id="<?php echo esc_attr($section['anchor']); ?>" class="mt-120 pc:mt-150 px-40">
      <div class="mx-auto max-w-1116 pc:relative">

        <?php get_template_part('template-parts/common/inc-shooting-menu-section-heading', null, ['section' => $section]); ?>

        <?php if ($group_count > 1) : ?>
          <div class="mt-20 pc:mt-80 grid gap-y-80 pc:grid-cols-3 pc:gap-x-120">
          <?php else : ?>
            <div class="mt-20 pc:mt-80 flex flex-col items-center gap-y-80">
            <?php endif; ?>
            <?php foreach ($section['groups'] as $group_index => $group) : ?>
              <section class="flex flex-col w-full gap-80 pc:gap-40 <?php echo $group_count === 1 ? 'pc:w-380' : ''; ?>">
                <?php get_template_part('template-parts/common/inc-shooting-menu-group-heading', null, ['group' => $group]); ?>

                <ul class=" grid gap-y-40 px-20">
                  <?php foreach ($group['courses'] as $course_index => $course) : ?>
                    <?php $modal_id = $course['modal']['id'] ?? 'kids-course-modal'; ?>
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
          'section_title' => $modal_section['title_ja'],
          'group_title' => $modal_course['modal']['group_title'] ?? $modal_group['title_ja'],
        ]);
      }
    }
  }

  get_template_part('template-parts/common/inc-course-modal', null, ['id' => 'kids-course-modal']);
}, 5);
?>

<?php get_footer(); ?>