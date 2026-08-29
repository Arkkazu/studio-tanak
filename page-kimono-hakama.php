<?php
/* Template Name: KIMONO / HAKAMAページ */

$studio_course_notes = [
  ['text' => '＊ 土日祝日は＋¥5,500となります'],
  ['text' => '＊ 各種オプション詳細は ', 'link' => 'こちら'],
];

$studio_course_hair_note = <<<'TEXT'
＊ ヘアメイクはご本人様のみとなっております。
　家族撮影や兄弟撮影のご家族様へのヘアメイクは含まれません。
　（お子様の10分程度の簡単なアレンジは除く）
TEXT;

$menu_sections = [
  [
    'anchor' => 'kimono-hakama-women',
    'number' => '01',
    'title' => '20th for Women',
    'title_ja' => '成人式女性',
    'image' => 'src/images/kimono-hakama/ta7ca_kimono02@2x.webp',
    'groups' => [
      [
        'title' => 'Studio shooting',
        'title_ja' => 'スタジオ撮影（前撮り／後撮り）',
        'courses' => [
          [
            'name' => 'STANDARD',
            'price' => '¥88,000',
            'emphasis' => true,
            'modal' => [
              'id' => 'kimono-hakama-course-women-standard',
              'name' => 'STANDARD COURSE',
              'subtitle' => '平日／スタンダードコース',
              'duration' => '180',
              'notes' => $studio_course_notes,
              'contents' => ['衣装１着', '着付け', 'ヘアメイク', '家族撮影(４名まで)'],
              'contents_note' => $studio_course_hair_note,
              'products' => ['レタッチ済みデータ 100', 'HISTOIRE 20P', 'アートデータ', 'アルバムスタンド S'],
            ],
          ],
          [
            'name' => 'PREMIUM',
            'price' => '¥110,000',
            'modal' => [
              'id' => 'kimono-hakama-course-women-premium',
              'name' => 'PREMIUM COURSE',
              'subtitle' => '平日／プレミアムコース',
              'duration' => '180',
              'notes' => $studio_course_notes,
              'contents' => ['衣装１着', '着付け', 'ヘアメイク', '家族撮影(４名まで)', '兄弟撮影'],
              'contents_note' => $studio_course_hair_note,
              'products' => ['レタッチ済みデータ 100', 'MURAL or PETIT BOIS', 'HISTOIRE 20P', 'アートデータ', 'アルバムスタンド M'],
            ],
          ],
          [
            'name' => 'LIGHT',
            'price' => '¥33,000',
            'modal' => [
              'id' => 'kimono-hakama-course-women-light',
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
      [
        'title' => 'Day-of preparations / Costume Rental',
        'title_ja' => '当日お支度（衣装貸出）',
        'courses' => [
          [
            'price' => '¥66,000',
            'modal' => [
              'id' => 'kimono-hakama-course-women-day-of-preparations',
              'name' => '当日お仕度（衣装貸出）',
              'centered_header' => true,
              'duration' => '120',
              'notes' => $studio_course_notes,
              'contents' => ['衣装１着', '着付け', 'ヘアメイク', '早朝料金無料'],
              'products' => [],
            ],
          ],
        ],
      ],
      [
        'title' => 'Day-of preparations / Bring your own',
        'title_ja' => '当日お支度（持ち込み）',
        'courses' => [
          [
            'price' => '¥55,000',
            'modal' => [
              'id' => 'kimono-hakama-course-women-day-of-preparations-bring-your-own',
              'name' => '当日お仕度（衣装持ち込み）',
              'centered_header' => true,
              'duration' => '120',
              'notes' => $studio_course_notes,
              'contents' => ['衣装点検', '着付け', 'ヘアメイク', '早朝料金無料'],
              'products' => [],
            ],
          ],
        ],
      ],
    ],
  ],
  [
    'anchor' => 'kimono-hakama-men',
    'number' => '02',
    'title' => '20th for Men',
    'title_ja' => '成人式男性',
    'image' => 'src/images/kimono-hakama/ta7ca_kimono03@2x.webp',
    'groups' => [
      [
        'title' => 'Studio shooting',
        'title_ja' => 'スタジオ撮影（前撮り／後撮り）',
        'courses' => [
          [
            'name' => 'STANDARD',
            'price' => '¥55,000',
            'emphasis' => true,
            'modal' => [
              'id' => 'kimono-hakama-course-men-standard',
              'name' => 'STANDARD COURSE',
              'subtitle' => '平日／スタンダードコース',
              'duration' => '90',
              'notes' => $studio_course_notes,
              'contents' => ['羽織袴１着', '着付け', 'ヘアメイク', '家族撮影(４名まで)'],
              'contents_note' => $studio_course_hair_note,
              'products' => ['レタッチ済みデータ 100', 'HISTOIRE 10P', 'アートデータ', 'アルバムスタンド S'],
            ],
          ],
          [
            'name' => 'PREMIUM',
            'price' => '¥88,000',
            'modal' => [
              'id' => 'kimono-hakama-course-men-premium',
              'name' => 'PREMIUM COURSE',
              'subtitle' => '平日／プレミアムコース',
              'duration' => '120',
              'notes' => $studio_course_notes,
              'contents' => ['スーツ撮影', '羽織袴１着', '着付', 'ヘアメイク', '家族撮影(４名まで)', '兄弟撮影'],
              'contents_note' => $studio_course_hair_note,
              'products' => ['レタッチ済みデータ 100', 'MURAL or PETIT BOIS', 'HISTOIRE 20P', 'アートデータ', 'アルバムスタンド M'],
            ],
          ],
          [
            'name' => 'LIGHT',
            'price' => '¥33,000',
            'modal' => [
              'id' => 'kimono-hakama-course-men-light',
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
      [
        'title' => 'Day-of preparations / Costume Rental',
        'title_ja' => '当日お支度（衣装貸出）',
        'courses' => [
          [
            'price' => '¥44,000',
            'modal' => [
              'id' => 'kimono-hakama-course-men-day-of-preparations',
              'name' => '当日お仕度（衣装貸出）',
              'centered_header' => true,
              'duration' => '60',
              'notes' => $studio_course_notes,
              'contents' => ['羽織袴１着', '着付け'],
              'products' => [],
            ],
          ],
        ],
      ],
    ],
  ],
  [
    'anchor' => 'kimono-hakama-graduation-hakama',
    'number' => '03',
    'title' => 'Graduation Hakama',
    'title_ja' => '卒業袴',
    'image' => 'src/images/kimono-hakama/ta7ca_kimono04@2x.webp',
    'groups' => [
      [
        'title' => 'Studio shooting',
        'title_ja' => 'スタジオ撮影（前撮り／後撮り）',
        'courses' => [
          [
            'name' => 'STANDARD',
            'price' => '¥77,000',
            'emphasis' => true,
            'modal' => [
              'id' => 'kimono-hakama-course-graduation-standard',
              'name' => 'STANDARD COURSE',
              'subtitle' => '平日／スタンダードコース',
              'duration' => '150',
              'notes' => $studio_course_notes,
              'contents' => ['衣装１着', '着付け', 'ヘアメイク', '家族撮影(４名まで)'],
              'contents_note' => $studio_course_hair_note,
              'products' => ['レタッチ済みデータ 100', 'HISTOIRE 10P', 'アートデータ', 'アルバムスタンド S'],
            ],
          ],
          [
            'name' => 'PREMIUM',
            'price' => '¥99,000',
            'modal' => [
              'id' => 'kimono-hakama-course-graduation-premium',
              'name' => 'PREMIUM COURSE',
              'subtitle' => '平日／プレミアムコース',
              'duration' => '150',
              'notes' => $studio_course_notes,
              'contents' => ['衣装１着', '着付け', 'ヘアメイク', '家族撮影(４名まで)', '兄弟撮影'],
              'contents_note' => $studio_course_hair_note,
              'products' => ['レタッチ済みデータ 100', 'MURAL or PETIT BOIS', 'HISTOIRE 20P', 'アートデータ', 'アルバムスタンド M'],
            ],
          ],
          [
            'name' => 'LIGHT',
            'price' => '¥33,000',
            'modal' => [
              'id' => 'kimono-hakama-course-graduation-light',
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
      [
        'title' => 'Shot on the day / Go out',
        'title_ja' => '当日撮影／外出',
        'courses' => [
          [
            'name' => 'STANDARD',
            'price' => '¥88,000',
            'emphasis' => true,
            'modal' => [
              'id' => 'kimono-hakama-course-graduation-day-standard',
              'name' => 'STANDARD COURSE',
              'subtitle' => '平日／スタンダードコース',
              'duration' => '150',
              'notes' => $studio_course_notes,
              'contents' => ['衣装１着', '着付け', 'ヘアメイク', '家族撮影(４名まで)', '早朝料金無料'],
              'contents_note' => $studio_course_hair_note,
              'products' => ['レタッチ済みデータ 100', 'HISTOIRE 10P', 'アートデータ', 'アルバムスタンド S'],
            ],
          ],
          [
            'name' => 'PREMIUM',
            'price' => '¥110,000',
            'modal' => [
              'id' => 'kimono-hakama-course-graduation-day-premium',
              'name' => 'PREMIUM COURSE',
              'subtitle' => '平日／プレミアムコース',
              'duration' => '150',
              'notes' => $studio_course_notes,
              'contents' => ['衣装１着', '着付け', 'ヘアメイク', '家族撮影(制限なし)', '兄弟撮影', '早朝料金無料'],
              'contents_note' => $studio_course_hair_note,
              'products' => ['レタッチ済みデータ 100', 'MURAL or PETIT BOIS', 'HISTOIRE 20P', 'アートデータ', 'アルバムスタンド M'],
            ],
          ],
          [
            'name' => 'LIGHT',
            'price' => '¥33,000',
            'modal' => [
              'id' => 'kimono-hakama-course-graduation-day-light',
              'name' => 'LIGHT COURSE',
              'subtitle' => '平日／ライトコース',
              'duration' => '60',
              'notes' => $studio_course_notes,
              'contents' => ['当日本人撮影'],
              'products' => ['HISTOIRE 10P'],
            ],
          ],
        ],
      ],
      [
        'title' => 'Going out on the day',
        'title_ja' => '当日外出',
        'courses' => [
          [
            'name' => 'STANDARD',
            'price' => '¥55,000',
            'modal' => [
              'id' => 'kimono-hakama-course-graduation-going-out-standard',
              'name' => 'STANDARD COURSE',
              'subtitle' => '平日／スタンダードコース',
              'duration' => '120',
              'notes' => $studio_course_notes,
              'contents' => ['衣装１着', '着付け', 'ヘアメイク'],
              'products' => [],
            ],
          ],
        ],
      ],
      [
        'title' => 'Pre-shoot / Go out',
        'title_ja' => '前撮り／当日外出',
        'courses' => [
          [
            'name' => 'STANDARD',
            'price' => '¥132,000',
            'modal' => [
              'id' => 'kimono-hakama-course-graduation-pre-shoot-going-out-standard',
              'name' => 'STANDARD COURSE',
              'subtitle' => '平日／スタンダードコース',
              'duration' => '300',
              'notes' => $studio_course_notes,
              'contents' => ['衣装１着', '着付け', 'ヘアメイク', '家族撮影(４名まで)', '兄弟撮影', '早朝料金無料'],
              'contents_note' => $studio_course_hair_note,
              'products' => ['レタッチ済みデータ', 'MURAL or PETIT BOIS', 'HISTOIRE 20P', 'アートデータ', 'アルバムスタンド M'],
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
          KIMONO / HAKAMA
        </h1>
        <span class="text-10 font-montserrat font-light leading-none tracking-[0.2em] pc:text-12">
          aged 20 and over
        </span>
      </div>
      <div class="mx-auto w-280 pc:w-560">
        <?php [$src, $wh] = theme_img_src_wh('src/images/kimono-hakama/kimono-hakama-kv.webp'); ?>
        <img class="block w-full" src="<?php echo $src; ?>" alt="" loading="eager" fetchpriority="high" <?php echo $wh; ?>>
      </div>
    </div>
  </section>

  <?php foreach ($menu_sections as $section) : ?>
    <section id="<?php echo esc_attr($section['anchor']); ?>" class="mt-120 px-20 pc:mt-160">
      <div class="mx-auto max-w-1116 pc:relative">
        <div class="relative flex items-center justify-center">
          <div class="relative flex flex-col items-center gap-4">
            <?php [$src, $wh] = theme_img_src_wh('src/images/common/' . $section['number'] . '.svg'); ?>
            <img class="absolute -left-20 block w-48 -translate-x-full pc:w-71" src="<?php echo $src; ?>" alt="" loading="lazy" <?php echo $wh; ?>>
            <h2 class="text-center text-15 font-montserrat font-light leading-[1.2] tracking-[0.05em] pc:text-16">
              <?php echo esc_html($section['title']); ?>
            </h2>
            <p class="text-10 font-light leading-[1.2] text-gray pc:text-13">
              <?php echo esc_html($section['title_ja']); ?>
            </p>
          </div>
        </div>

        <?php if ($section['number'] === '01') : ?>
          <div class="mt-20 grid gap-y-80 pc:mt-150 pc:grid-cols-3 pc:gap-x-120">
          <?php else : ?>
            <div class="mt-20 grid gap-y-80 pc:mt-150 pc:grid-cols-2 pc:gap-x-120">
            <?php endif; ?>
            <?php foreach ($section['groups'] as $group_index => $group) : ?>
              <section class="flex min-w-0 flex-col gap-40">
                <?php if ($group_index === 0) : ?>
                  <div class="relative flex items-center justify-between pc:static">
                    <div class="flex w-170 shrink-0 flex-col gap-6 pc:w-auto pc:shrink">
                      <h3 class="text-14 font-montserrat font-light leading-[1.2] tracking-[0.05em]">
                        <?php echo esc_html($group['title']); ?>
                      </h3>
                      <p class="text-10 font-light leading-[1.2] text-gray">
                        <?php echo esc_html($group['title_ja']); ?>
                      </p>
                    </div>
                    <div class="relative w-160 shrink-0 -mr-16 pc:mr-0 pc:absolute pc:-top-42 pc:right-0 pc:w-147">
                      <?php [$src, $wh] = theme_img_src_wh($section['image']); ?>
                      <img class="block w-full" src="<?php echo $src; ?>" alt="" loading="lazy" <?php echo $wh; ?>>
                    </div>
                  </div>
                <?php else : ?>
                  <div class="flex flex-col gap-6">
                    <h3 class="text-14 font-montserrat font-light leading-[1.2] tracking-[0.05em]">
                      <?php echo esc_html($group['title']); ?>
                    </h3>
                    <p class="text-10 font-light leading-[1.2] text-gray">
                      <?php echo esc_html($group['title_ja']); ?>
                    </p>
                  </div>
                <?php endif; ?>

                <ul class="grid gap-y-40 px-20">
                  <?php foreach ($group['courses'] as $course) : ?>
                    <?php $modal_id = $course['modal']['id'] ?? 'kimono-hakama-course-modal'; ?>
                    <?php $modal_name = $course['name'] ?? $group['title']; ?>
                    <li class="<?php echo !empty($course['emphasis']) ? '' : 'pl-40'; ?>">
                      <button
                        type="button"
                        class="js-kids-course-modal-trigger flex w-full min-w-0 items-center justify-between gap-20 border-b border-[#605f5f] px-4 pb-12 text-left transition-opacity duration-300 hoverable:hover:opacity-50"
                        aria-controls="<?php echo esc_attr($modal_id); ?>"
                        aria-haspopup="dialog"
                        data-kids-course-modal-target="<?php echo esc_attr($modal_id); ?>"
                        data-kids-course-modal-group="<?php echo esc_attr($group['title']); ?>"
                        data-kids-course-modal-group-ja="<?php echo esc_attr($group['title_ja']); ?>"
                        data-kids-course-modal-name="<?php echo esc_attr($modal_name); ?>"
                        data-kids-course-modal-price="<?php echo esc_attr($course['price']); ?>">
                        <?php if (!empty($course['name'])) : ?>
                          <span class="font-montserrat leading-none tracking-[0.05em] <?php echo !empty($course['emphasis']) ? 'text-16 font-semibold' : 'text-12 font-light'; ?>">
                            <?php echo esc_html($course['name']); ?>
                          </span>
                        <?php else : ?>
                          <span class="block" aria-hidden="true"></span>
                        <?php endif; ?>
                        <span class="flex shrink-0 items-center gap-16">
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
          'section_title' => $modal_section['title_ja'],
          'group_title' => $modal_group['title_ja'],
        ]);
      }
    }
  }

  get_template_part('template-parts/common/inc-course-modal', null, ['id' => 'kimono-hakama-course-modal']);
}, 5);
?>

<?php get_footer(); ?>
