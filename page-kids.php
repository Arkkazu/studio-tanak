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
            'name' => 'LIGHT',
            'price' => '¥66,000',
            'emphasis' => true,
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
            'name' => 'STANDARD',
            'price' => '¥88,000',
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
            'name' => 'S-LIGHT',
            'price' => '¥33,000',
            'modal' => [
              'id' => 'kids-course-modal-s-light',
              'name' => 'S-LIGHT COURSE',
              'subtitle' => '平日／Sライトコース',
              'duration' => '60',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影', '衣装１着(洋のみ)', 'ヘアアレンジ'],
              'products' => ['HISTOIRE 10P'],
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
            'name' => 'LIGHT',
            'price' => '¥44,000',
            'emphasis' => true,
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
            'name' => 'STANDARD',
            'price' => '¥55,000',
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
            'name' => 'S-LIGHT',
            'price' => '¥33,000',
            'modal' => [
              'id' => 'kids-course-modal-hakama-s-light',
              'name' => 'S-LIGHT COURSE',
              'subtitle' => '平日／Sライトコース',
              'duration' => '60',
              'notes' => $studio_course_notes,
              'contents' => ['本人撮影'],
              'products' => ['HISTOIRE 10P'],
              'compact_header' => true,
            ],
          ],
        ],
      ],
    ],
  ],
  [
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
            'name' => 'LIGHT',
            'price' => '¥55,000',
            'emphasis' => true,
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
            'name' => 'STANDARD',
            'price' => '¥66,000',
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
            'name' => 'S-LIGHT',
            'price' => '¥33,000',
            'modal' => [
              'id' => 'kids-course-modal-half-adult-s-light',
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
  <section class="relative px-20 pt-120">
    <div class="relative mx-auto max-w-688">
      <div class="vertical-rl-mixed absolute left-0 top-80 flex items-end gap-12">
        <h1 class="text-18 pc:text-24 font-montserrat font-light leading-none tracking-[0.18em]">
          KIDS
        </h1>
        <span class="text-10 pc:text-12 font-montserrat font-light leading-none tracking-[0.2em]">
          shooting menu
        </span>
      </div>
      <div class="mx-auto w-280 pc:w-560">
        <?php [$src, $wh] = theme_img_src_wh('src/images/kids/ta7ca_pc_kids01@2x.webp'); ?>
        <img class="block w-full" src="<?php echo $src; ?>" alt="" loading="eager" fetchpriority="high" <?php echo $wh; ?>>
      </div>
    </div>
  </section>

  <?php foreach ($menu_sections as $section) : ?>
    <section class="mt-120 pc:mt-160 px-20">
      <div class="mx-auto max-w-688 pc:relative">
        <div class="relative flex items-center justify-center">

          <div class="relative flex flex-col items-center gap-4">
            <?php [$src, $wh] = theme_img_src_wh('src/images/common/' . $section['number'] . '.svg'); ?>
            <img class="absolute -left-20 -translate-x-full block w-48 pc:w-71" src="<?php echo $src; ?>" alt="" loading="lazy" <?php echo $wh; ?>>
            <h2 class="text-15 pc:text-16 text-center font-montserrat font-light leading-[1.2] tracking-[0.05em]">
              <?php echo wp_kses($section['title'], ['br' => ['class' => true]]); ?>
            </h2>
            <p class="text-10 pc:text-13 font-light leading-[1.2] text-gray">
              <?php echo esc_html($section['title_ja']); ?>
            </p>
          </div>
        </div>

        <div class="mt-20 pc:mt-80 flex flex-col gap-90 pc:gap-150">
          <?php foreach ($section['groups'] as $group_index => $group) : ?>
            <section class="flex flex-col gap-40 pc:gap-80">
              <div class="<?php echo $group_index === 0 ? 'flex items-center justify-between' : 'block'; ?>">
                <div class="flex flex-col gap-6 <?php echo $group_index === 0 ? 'w-170 pc:w-auto shrink-0 pc:shrink' : ''; ?>">
                  <h3 class="text-14 font-montserrat font-light leading-[1.2] tracking-[0.05em]">
                    <?php echo esc_html($group['title']); ?>
                  </h3>
                  <p class="text-10 font-light leading-[1.2] text-gray">
                    <?php echo esc_html($group['title_ja']); ?>
                  </p>
                </div>
                <?php if ($group_index === 0) : ?>
                  <div class="relative max-pc:-mr-16 pc:absolute pc:-top-42 pc:right-0 w-160 pc:w-147 shrink-0">
                    <?php [$src, $wh] = theme_img_src_wh($section['image']); ?>
                    <img class="block w-full" src="<?php echo $src; ?>" alt="" loading="lazy" <?php echo $wh; ?>>
                  </div>
                <?php endif; ?>
              </div>

              <ul class="px-20 grid pc:grid-cols-2 gap-x-80 pc:gap-x-120 gap-y-56">
                <?php foreach ($group['courses'] as $course_index => $course) : ?>
                  <?php $modal_id = $course['modal']['id'] ?? 'kids-course-modal'; ?>
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
                      data-kids-course-modal-price="<?php echo esc_attr($course['price'] ?? ''); ?>">
                      <span class="font-montserrat leading-none tracking-[0.05em] <?php echo !empty($course['emphasis']) ? 'text-16 font-semibold' : 'text-12 font-light'; ?>">
                        <?php echo esc_html($course['name']); ?>
                      </span>
                      <span class="flex items-center gap-16">
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

  <?php foreach ($menu_sections as $modal_section) : ?>
    <?php foreach ($modal_section['groups'] as $modal_group) : ?>
      <?php foreach ($modal_group['courses'] as $modal_course) : ?>
        <?php if (!empty($modal_course['modal'])) : ?>
          <?php get_template_part('template-parts/common/inc-course-modal', null, [
            'modal' => $modal_course['modal'],
            'course' => $modal_course,
            'section_title' => $modal_section['title_ja'],
            'group_title' => $modal_course['modal']['group_title'] ?? $modal_group['title_ja'],
          ]); ?>
        <?php endif; ?>
      <?php endforeach; ?>
    <?php endforeach; ?>
  <?php endforeach; ?>

  <?php get_template_part('template-parts/common/inc-course-modal', null, ['id' => 'kids-course-modal']); ?>
</main>

<?php get_footer(); ?>
