<?php
/* Template Name: KIDSページ */

$menu_sections = [
  [
    'number' => '01',
    'title' => 'Shichi-Go-San',
    'title_ja' => '七五三',
    'image' => 'src/images/kids/kids-section-shichigosan-flower.jpg',
    'groups' => [
      [
        'title' => 'Studio shooting',
        'title_ja' => 'スタジオ撮影のみ',
        'courses' => [
          ['name' => 'LIGHT', 'price' => '¥66,000', 'emphasis' => true],
          ['name' => 'PREMIUM', 'price' => '¥110,000'],
          ['name' => 'STANDARD', 'price' => '¥88,000'],
          ['name' => 'S-LIGHT', 'price' => '¥33,000'],
        ],
      ],
      [
        'title' => 'Go out / No location photo',
        'title_ja' => 'お出かけ／出張撮影なし',
        'courses' => [
          ['name' => '3 years', 'price' => '¥22,000'],
          ['name' => '5 years', 'price' => '¥22,000'],
          ['name' => '7 years', 'price' => '¥44,000'],
        ],
      ],
      [
        'title' => 'Go out / Location photo',
        'title_ja' => 'お出かけ／出張撮影あり',
        'courses' => [
          ['name' => '3 years', 'price' => '¥66,000'],
          ['name' => '5 years', 'price' => '¥66,000'],
          ['name' => '7 years', 'price' => '¥88,000'],
        ],
      ],
    ],
  ],
  [
    'number' => '02',
    'title' => 'Admission Graduation',
    'title_ja' => '入園・卒園・入学・卒業',
    'image' => 'src/images/kids/kids-section-admission-backpack.jpg',
    'groups' => [
      [
        'title' => 'Studio shooting',
        'title_ja' => 'スタジオ撮影のみ',
        'courses' => [
          ['name' => 'S-LIGHT'],
        ],
      ],
    ],
  ],
  [
    'number' => '03',
    'title' => 'Graduation Hakama',
    'title_ja' => '卒業袴',
    'image' => 'src/images/kids/kids-section-graduation-hakama.jpg',
    'groups' => [
      [
        'title' => 'Studio shooting',
        'title_ja' => 'スタジオ撮影のみ',
        'courses' => [
          ['name' => 'LIGHT', 'price' => '¥44,000', 'emphasis' => true],
          ['name' => 'PREMIUM', 'price' => '¥66,000'],
          ['name' => 'STANDARD', 'price' => '¥55,000'],
          ['name' => 'S-LIGHT', 'price' => '¥33,000'],
        ],
      ],
    ],
  ],
  [
    'number' => '04',
    'title' => 'Half coming of age<br>ceremony',
    'title_ja' => 'ハーフ成人式',
    'image' => 'src/images/kids/kids-section-half-coming-age.png',
    'groups' => [
      [
        'title' => 'Studio shooting',
        'title_ja' => 'スタジオ撮影のみ',
        'courses' => [
          ['name' => 'LIGHT', 'price' => '¥55,000', 'emphasis' => true],
          ['name' => 'PREMIUM', 'price' => '¥88,000'],
          ['name' => 'STANDARD', 'price' => '¥66,000'],
          ['name' => 'S-LIGHT', 'price' => '¥33,000'],
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
          KIDS
        </h1>
        <span class="text-10 font-montserrat font-light leading-none tracking-[0.2em] pc:text-12">
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
      <div class="relative mx-auto max-w-688">
        <div class="relative flex items-center justify-center">

          <div class="relative flex flex-col items-center gap-4">
            <?php [$src, $wh] = theme_img_src_wh('src/images/common/' . $section['number'] . '.svg'); ?>
            <img class="absolute -left-20 -translate-x-full block w-48 pc:w-71" src="<?php echo $src; ?>" alt="" loading="lazy" <?php echo $wh; ?>>
            <h2 class="text-15 pc:text-16 text-center font-montserrat font-light leading-[1.2] tracking-[0.05em]">
              <?php echo wp_kses($section['title'], ['br' => ['class' => true]]); ?>
            </h2>
            <p class="text-10 font-light leading-[1.2] text-gray pc:text-13">
              <?php echo esc_html($section['title_ja']); ?>
            </p>
          </div>
          <div class="absolute right-0 top-1/2 w-96 -translate-y-1/2 pc:w-147">
            <?php [$src, $wh] = theme_img_src_wh($section['image']); ?>
            <img class="block w-full" src="<?php echo $src; ?>" alt="" loading="lazy" <?php echo $wh; ?>>
          </div>
        </div>

        <div class="mt-40 pc:mt-80 flex flex-col gap-90 pc:gap-150">
          <?php foreach ($section['groups'] as $group) : ?>
            <section class="flex flex-col gap-40 pc:gap-80">
              <div class="flex flex-col gap-6">
                <h3 class="text-14 font-montserrat font-light leading-[1.2] tracking-[0.05em]">
                  <?php echo esc_html($group['title']); ?>
                </h3>
                <p class="text-10 font-light leading-[1.2] text-gray">
                  <?php echo esc_html($group['title_ja']); ?>
                </p>
              </div>

              <ul class="px-20 grid pc:grid-cols-2 gap-x-80 pc:gap-x-120 gap-y-56">
                <?php foreach ($group['courses'] as $course_index => $course) : ?>
                  <li class="<?php echo !empty($course['emphasis']) ? '' : 'pl-40'; ?>">
                    <div class="flex items-center justify-between gap-20 border-b border-[#605f5f] pb-12 px-4">
                      <span class="font-montserrat leading-none tracking-[0.05em] <?php echo !empty($course['emphasis']) ? 'text-16 font-semibold' : 'text-12 font-light'; ?>">
                        <?php echo esc_html($course['name']); ?>
                      </span>
                      <div class="flex items-center gap-16">
                        <?php if (!empty($course['price'])) : ?>
                          <span class="font-montserrat leading-none tracking-[0.05em] <?php echo !empty($course['emphasis']) ? 'text-16 font-semibold' : 'text-12 font-light'; ?>">
                            <span class="<?php echo !empty($course['emphasis']) ? 'text-10' : 'text-8'; ?>">¥</span><?php echo esc_html(ltrim($course['price'], '¥')); ?>
                          </span>
                        <?php endif; ?>
                        <?php [$src, $wh] = theme_img_src_wh('src/images/common/circe-arrow-right.svg'); ?>
                        <img class="block w-16 shrink-0" src="<?php echo $src; ?>" alt="" loading="lazy" <?php echo $wh; ?>>
                      </div>
                    </div>
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

<?php get_footer(); ?>