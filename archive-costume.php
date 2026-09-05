<?php

/**
 * Costume archive template.
 *
 * The Clothing page is driven by the costume custom post type and its
 * costume-cat taxonomy. Filter links keep the page usable without requiring
 * a second copy of the costume grid for each viewport.
 */

$costume_filter_groups = [
  [
    [
      'key'   => 'all',
      'label' => 'ALL',
      'terms' => [],
    ],
  ],
  [
    [
      'key'   => 'girl',
      'label' => 'Girl',
      'terms' => ['girl_100', 'girl_110120'],
    ],
    [
      'key'   => 'boy',
      'label' => 'Boy',
      'terms' => ['boy_100120'],
    ],
  ],
  [
    [
      'key'   => '3-years',
      'label' => '3 years',
      'terms' => ['3yo-out', '3yo-kimono'],
    ],
    [
      'key'   => '5-years',
      'label' => '5 years',
      'terms' => ['5yo-out', '5yo-hakama'],
    ],
    [
      'key'   => '7-years',
      'label' => '7 years',
      'terms' => ['7yo-out', '7yo-kimono'],
    ],
  ],
  [
    [
      'key'   => 'dress',
      'label' => 'Dress',
      'terms' => ['girl_100', 'girl_110120', 'boy_100120'],
    ],
    [
      'key'   => 'kimono',
      'label' => 'Kimono',
      'terms' => ['3yo-kimono', '7yo-kimono'],
    ],
    [
      'key'   => 'suit',
      'label' => 'Suit',
      'terms' => ['girl_100', 'girl_110120', 'boy_100120'],
    ],
    [
      'key'   => 'hakama',
      'label' => 'Hakama',
      'terms' => ['5yo-hakama'],
    ],
  ],
  [
    [
      'key'   => '100cm',
      'label' => '100cm',
      'terms' => ['girl_100'],
    ],
    [
      'key'   => '110-120cm',
      'label' => '110-120cm',
      'terms' => ['girl_110120', 'boy_100120'],
    ],
  ],
];

$costume_filters = [];
foreach ($costume_filter_groups as $group) {
  foreach ($group as $filter) {
    $costume_filters[$filter['key']] = $filter;
  }
}

$active_filter = isset($_GET['costume_filter'])
  ? sanitize_key(wp_unslash($_GET['costume_filter']))
  : 'all';

if (!isset($costume_filters[$active_filter])) {
  $active_filter = 'all';
}

$costume_query_args = [
  'post_type'      => 'costume',
  'post_status'    => 'publish',
  'posts_per_page' => -1,
  'orderby'        => [
    'menu_order' => 'ASC',
    'date'       => 'ASC',
  ],
  'no_found_rows'  => true,
];

if ($active_filter !== 'all' && taxonomy_exists('costume-cat')) {
  $costume_query_args['tax_query'] = [
    [
      'taxonomy' => 'costume-cat',
      'field'    => 'slug',
      'terms'    => $costume_filters[$active_filter]['terms'],
      'operator' => 'IN',
    ],
  ];
}

$costume_posts = get_posts($costume_query_args);
$costume_items = [];

foreach ($costume_posts as $costume_post) {
  $thumbnail_id = get_post_thumbnail_id($costume_post->ID);

  if (!$thumbnail_id) {
    continue;
  }

  $image = wp_get_attachment_image_src($thumbnail_id, 'full');

  if (!is_array($image) || empty($image[0])) {
    continue;
  }

  $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
  if ($alt === '') {
    $alt = get_the_title($costume_post->ID);
  }

  $costume_items[] = [
    'url'    => $image[0],
    'width'  => (int) ($image[1] ?? 0),
    'height' => (int) ($image[2] ?? 0),
    'alt'    => $alt,
    'title'  => get_the_title($costume_post->ID),
  ];
}

[$costume_kv_src, $costume_kv_wh] = theme_img_src_wh('src/images/costume/costume-kv.jpg');
$costume_archive_url = get_post_type_archive_link('costume');
if (!$costume_archive_url) {
  $costume_archive_url = home_url('/costume/');
}

get_header();
?>

<main class="costume-page overflow-hidden bg-white pb-120 pc:pb-240">
  <section class="costume-page__hero relative h-450 overflow-hidden bg-[#f1ede7] pc:h-[100dvh]" aria-labelledby="costume-page-title">
    <div class="costume-page__hero-inner relative h-full">
      <img
        class="costume-page__hero-image absolute inset-0 block h-full w-full object-cover"
        src="<?php echo esc_url($costume_kv_src); ?>"
        alt=""
        loading="eager"
        fetchpriority="high"
        <?php echo $costume_kv_wh; ?>>
      <div class="costume-page__title-layer absolute inset-0 mx-auto max-w-688">
        <h1 id="costume-page-title" class="costume-page__title vertical-rl-mixed absolute left-24 top-96 z-10 text-18 font-montserrat font-light leading-none tracking-[0.18em] pc:left-0 pc:top-200 pc:text-24">
          C L O T H I N G
        </h1>
      </div>
    </div>
  </section>

  <section class="costume-page__catalog mx-auto mt-96 max-w-688 px-20 pc:mt-120" aria-labelledby="costume-page-catalog-title">
    <h2 id="costume-page-catalog-title" class="costume-page__catalog-title sr-only">
      衣装一覧
    </h2>

    <nav class="costume-page__filters flex flex-col gap-12" aria-label="衣装カテゴリー">
      <?php foreach ($costume_filter_groups as $group_index => $group) : ?>
        <div class="costume-page__filter-group grid gap-12 <?php echo count($group) === 1 ? 'grid-cols-1' : ''; ?> <?php echo count($group) === 2 ? 'grid-cols-2' : ''; ?> <?php echo count($group) === 3 ? 'grid-cols-3' : ''; ?> <?php echo count($group) === 4 ? 'grid-cols-4' : ''; ?>" data-filter-group="<?php echo esc_attr((string) $group_index); ?>">
          <?php foreach ($group as $filter) : ?>
            <?php
            $filter_url = $filter['key'] === 'all'
              ? $costume_archive_url
              : add_query_arg('costume_filter', $filter['key'], $costume_archive_url);
            $filter_class = $filter['key'] === $active_filter
              ? 'bg-[#605f5f] text-white'
              : 'bg-white text-[#231815]';
            ?>
            <a class="costume-page__filter-link flex min-h-40 items-center justify-center border border-[#605f5f] px-8 py-8 text-12 font-montserrat font-light leading-none tracking-[0.05em] transition-opacity duration-300 hoverable:hover:opacity-50 <?php echo esc_attr($filter_class); ?>" href="<?php echo esc_url($filter_url); ?>" <?php echo $filter['key'] === $active_filter ? 'aria-current="page"' : ''; ?>>
              <?php echo esc_html($filter['label']); ?>
            </a>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    </nav>

    <?php if ($costume_items) : ?>
      <ul class="costume-page__grid mt-80 grid grid-cols-2 gap-x-12 gap-y-40 pc:mt-120 pc:gap-x-24 pc:gap-y-64">
        <?php foreach ($costume_items as $costume_item) : ?>
          <li class="costume-page__item min-w-0">
            <a class="costume-page__item-link block aspect-[3/4] overflow-hidden border border-[#c8c5c2] bg-[#f8f7f5] transition-opacity duration-300 hoverable:hover:opacity-70" href="<?php echo esc_url($costume_item['url']); ?>">
              <img
                class="costume-page__item-image block h-full w-full object-cover"
                src="<?php echo esc_url($costume_item['url']); ?>"
                alt="<?php echo esc_attr($costume_item['alt']); ?>"
                loading="lazy"
                decoding="async"
                width="<?php echo esc_attr((string) $costume_item['width']); ?>"
                height="<?php echo esc_attr((string) $costume_item['height']); ?>">
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php else : ?>
      <p class="costume-page__empty mt-80 text-center text-14 font-noto-sans font-light text-gray">
        該当する衣装がありません。
      </p>
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>
