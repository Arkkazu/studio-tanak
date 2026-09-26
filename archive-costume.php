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

$costume_posts = get_posts($costume_query_args);
$costume_items = [];
$visible_count = 0;

// Prime attachment metadata in one query instead of querying each card separately.
$thumbnail_ids = array_filter(array_map('get_post_thumbnail_id', $costume_posts));
if ($thumbnail_ids) {
  get_posts(['post_type' => 'attachment', 'post_status' => 'inherit', 'post__in' => array_values(array_unique($thumbnail_ids)), 'posts_per_page' => -1, 'no_found_rows' => true]);
}

// Include descendants, matching WP_Tax_Query's existing include_children behavior.
$filter_term_ids = [];
foreach ($costume_filters as $key => $filter) {
  $filter_term_ids[$key] = [];
  foreach ($filter['terms'] as $slug) {
    $term = get_term_by('slug', $slug, 'costume-cat');
    if (!$term) continue;
    $children = get_term_children($term->term_id, 'costume-cat');
    $filter_term_ids[$key][] = (int) $term->term_id;
    if (!is_wp_error($children)) {
      $filter_term_ids[$key] = array_merge($filter_term_ids[$key], array_map('intval', $children));
    }
  }
}

foreach ($costume_posts as $costume_post) {
  $thumbnail_id = get_post_thumbnail_id($costume_post->ID);

  if (!$thumbnail_id) {
    continue;
  }

  $image = wp_get_attachment_image_src($thumbnail_id, 'full');

  if (!is_array($image) || empty($image[0])) {
    continue;
  }

  // Share production uploads across local/staging without copying media files.
  // Keep the original upload path and leave theme/external assets untouched.
  $image[0] = preg_replace(
    '#^(?:https?:)?//[^/]+/wp-content/uploads/#i',
    'https://www.studio-tanaka.co.jp/wp-content/uploads/',
    $image[0]
  );

  $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
  if ($alt === '') {
    $alt = get_the_title($costume_post->ID);
  }

  $terms = get_the_terms($costume_post->ID, 'costume-cat');
  $term_ids = is_array($terms) ? array_map('intval', wp_list_pluck($terms, 'term_id')) : [];
  $matches = ['all'];
  foreach ($filter_term_ids as $key => $ids) {
    if ($key !== 'all' && (!taxonomy_exists('costume-cat') || array_intersect($term_ids, $ids))) {
      $matches[] = $key;
    }
  }
  $visible = in_array($active_filter, $matches, true);
  $visible_count += (int) $visible;
  $costume_items[] = [
    'filters' => implode(' ', $matches),
    'visible' => $visible,
    'url'    => $image[0],
    'width'  => (int) ($image[1] ?? 0),
    'height' => (int) ($image[2] ?? 0),
    'alt'    => $alt,
    'title'  => get_the_title($costume_post->ID),
  ];
}

[$costume_fv_pc_src, $costume_fv_pc_wh] = theme_img_src_wh('src/images/costume/fv-pc.webp');
[$costume_fv_sp_src, $costume_fv_sp_wh] = theme_img_src_wh('src/images/costume/fv-sp.webp');
$costume_archive_url = get_post_type_archive_link('costume');
if (!$costume_archive_url) {
  $costume_archive_url = home_url('/costume/');
}

get_header();
?>

<main class="overflow-hidden bg-white pb-120 pc:pb-240">
  <section class="relative aspect-square pc:aspect-[1920/480] overflow-hidden bg-[#f1ede7]" aria-labelledby="costume-page-title">
    <div class="relative h-full">
      <picture>
        <source media="(min-width: 1272px)" srcset="<?php echo esc_url($costume_fv_pc_src); ?>">
        <img
          class="absolute inset-0 block h-full w-full object-cover"
          src="<?php echo esc_url($costume_fv_sp_src); ?>"
          alt=""
          loading="eager"
          fetchpriority="high"
          <?php echo $costume_fv_sp_wh; ?>>
      </picture>
      <div class="absolute inset-0 mx-auto max-w-920">
        <h1 id="costume-page-title" class="absolute left-24 pc:left-64 top-96 pc:top-176 z-10 text-18 pc:text-20 font-montserrat font-light leading-none tracking-[0.18em] pc:tracking-[0.22em] [writing-mode:vertical-rl] pc:[writing-mode:horizontal-tb]">
          C L O T H I N G
        </h1>
      </div>
    </div>
  </section>

  <section class="mx-auto mt-80 pc:mt-150 max-w-920 px-20 pc:px-40" aria-labelledby="costume-page-catalog-title">
    <h2 id="costume-page-catalog-title" class="sr-only">
      衣装一覧
    </h2>

    <nav class="flex flex-col gap-12" aria-label="衣装カテゴリー" data-costume-filters>
      <?php foreach ($costume_filter_groups as $group_index => $group) : ?>
        <?php
        $group_count = count($group);
        $group_gap_class = $group_count === 2 ? 'gap-40' : ($group_count === 3 ? 'gap-20 pc:gap-40' : ($group_count === 4 ? 'gap-24 pc:gap-40' : 'gap-0'));
        ?>
        <div class="grid <?php echo esc_attr($group_gap_class); ?> <?php echo $group_count === 1 ? 'grid-cols-1' : ''; ?> <?php echo $group_count === 2 ? 'grid-cols-2' : ''; ?> <?php echo $group_count === 3 ? 'grid-cols-3' : ''; ?> <?php echo $group_count === 4 ? 'grid-cols-4' : ''; ?>" data-filter-group="<?php echo esc_attr((string) $group_index); ?>">
          <?php foreach ($group as $filter) : ?>
            <?php
            $filter_url = $filter['key'] === 'all'
              ? $costume_archive_url
              : add_query_arg('costume_filter', $filter['key'], $costume_archive_url);
            $filter_class = $filter['key'] === $active_filter
              ? 'bg-[#605f5f] text-white'
              : 'bg-white text-[#231815]';
            ?>
            <a class="flex min-h-32 items-center justify-center border border-[#605f5f] px-8 py-8 text-12 font-montserrat font-light leading-none tracking-[0.05em] transition-opacity duration-300 hoverable:hover:opacity-50 <?php echo esc_attr($filter_class); ?>" href="<?php echo esc_url($filter_url); ?>" data-costume-filter="<?php echo esc_attr($filter['key']); ?>" <?php echo $filter['key'] === $active_filter ? 'aria-current="page"' : ''; ?>>
              <?php echo esc_html($filter['label']); ?>
            </a>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    </nav>

      <p class="sr-only" role="status" data-costume-status></p>
      <ul class="mx-auto mt-80 pc:mt-150 grid max-w-840 grid-cols-2 pc:grid-cols-4 gap-x-20 pc:gap-x-40 gap-y-40 pc:gap-y-64" data-costume-grid <?php echo $visible_count ? '' : 'hidden'; ?>>
        <?php foreach ($costume_items as $costume_item) : ?>
          <li class="min-w-0" data-costume-item="<?php echo esc_attr($costume_item['filters']); ?>" <?php echo $costume_item['visible'] ? '' : 'hidden'; ?>>
            <button type="button" class="js-kids-course-modal-trigger block aspect-square w-full overflow-hidden border border-[#c8c5c2] bg-[#f8f7f5] transition-opacity duration-300 hoverable:hover:opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-[#605f5f] focus-visible:outline-offset-2" data-costume-modal-trigger data-costume-modal-title="<?php echo esc_attr($costume_item['title']); ?>" data-costume-modal-alt="<?php echo esc_attr($costume_item['alt']); ?>" data-kids-course-modal-target="costume-dialog" aria-haspopup="dialog" aria-controls="costume-dialog" aria-label="<?php echo esc_attr($costume_item['title'] . 'の画像を拡大表示'); ?>">
              <img
                class="block h-full w-full object-cover"
                data-costume-modal-image
                src="<?php echo esc_url($costume_item['url']); ?>"
                alt=""
                loading="lazy"
                decoding="async"
                width="<?php echo esc_attr((string) $costume_item['width']); ?>"
                height="<?php echo esc_attr((string) $costume_item['height']); ?>">
            </button>
          </li>
        <?php endforeach; ?>
      </ul>
      <p class="mt-80 text-center text-14 font-noto-sans font-light text-gray" data-costume-empty <?php echo $visible_count ? 'hidden' : ''; ?>>
        該当する衣装がありません。
      </p>
  </section>
</main>

<?php if ($costume_items) : ?>
  <dialog id="costume-dialog" class="js-kids-course-modal fixed top-1/2 left-1/2 m-0 h-500 max-h-[100dvh] w-full max-w-375 -translate-x-1/2 -translate-y-1/2 overflow-hidden border-0 bg-[#797575] p-0 text-[#231815] opacity-0 transition-opacity duration-300 backdrop:bg-[rgba(0,0,0,0.6)]" aria-labelledby="costume-dialog-title" data-costume-dialog>
    <div class="flex h-full flex-col">
      <div class="relative h-62 shrink-0 bg-[#797575]">
        <button type="button" class="js-kids-course-modal-close absolute top-11 right-16 z-10 flex size-40 items-center justify-center focus:outline-none focus-visible:outline focus-visible:outline-1 focus-visible:outline-white focus-visible:outline-offset-2" aria-label="モーダルを閉じる">
          <span class="absolute h-[1px] w-16 rotate-45 bg-white"></span>
          <span class="absolute h-[1px] w-16 -rotate-45 bg-white"></span>
        </button>
      </div>
      <div class="flex min-h-0 flex-1 flex-col items-center justify-center overflow-hidden p-20">
        <h2 id="costume-dialog-title" class="sr-only" data-costume-modal-heading><?php echo esc_html($costume_items[0]['title']); ?></h2>
        <img class="block min-h-0 max-h-full w-full object-contain" data-costume-modal-detail src="<?php echo esc_url($costume_items[0]['url']); ?>" alt="<?php echo esc_attr($costume_items[0]['alt']); ?>" loading="lazy" width="<?php echo esc_attr((string) $costume_items[0]['width']); ?>" height="<?php echo esc_attr((string) $costume_items[0]['height']); ?>">
      </div>
      <nav class="flex h-58 shrink-0 items-center justify-center gap-56 bg-[#797575]" aria-label="衣装画像の切り替え">
        <button type="button" class="flex size-40 items-center justify-center text-28 font-light text-white focus-visible:outline focus-visible:outline-1 focus-visible:outline-white" data-costume-modal-prev aria-label="前の衣装">‹</button>
        <button type="button" class="flex size-40 items-center justify-center text-28 font-light text-white focus-visible:outline focus-visible:outline-1 focus-visible:outline-white" data-costume-modal-next aria-label="次の衣装">›</button>
      </nav>
    </div>
  </dialog>
<?php endif; ?>

<?php get_footer(); ?>
