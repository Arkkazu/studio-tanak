<?php
/**
 * Gallery archive template.
 *
 * The gallery images are managed as the gallery custom post type. Images are
 * rendered from each post's featured image so editors can add or reorder work
 * without changing the template.
 */

$gallery_query_args = [
  'post_type'      => 'gallery',
  'post_status'    => 'publish',
  'posts_per_page' => -1,
  'orderby'        => [
    'menu_order' => 'ASC',
    'date'       => 'ASC',
  ],
  'no_found_rows'  => true,
];

if (taxonomy_exists('gallery-cat')) {
  $gallery_query_args['tax_query'] = [
    [
      'taxonomy' => 'gallery-cat',
      'field'    => 'slug',
      'terms'    => ['on-location'],
      'operator' => 'NOT IN',
    ],
  ];
}

$gallery_posts = get_posts($gallery_query_args);
$gallery_items = [];

foreach ($gallery_posts as $gallery_post) {
  $thumbnail_id = get_post_thumbnail_id($gallery_post->ID);

  if (!$thumbnail_id) {
    continue;
  }

  $image = wp_get_attachment_image_src($thumbnail_id, 'full');

  if (!is_array($image) || empty($image[0])) {
    continue;
  }

  $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
  if ($alt === '') {
    $alt = get_the_title($gallery_post->ID);
  }

  $gallery_items[] = [
    'url'    => $image[0],
    'width'  => (int) ($image[1] ?? 0),
    'height' => (int) ($image[2] ?? 0),
    'alt'    => $alt,
  ];
}

$hero_item = $gallery_items[0] ?? null;
[$gallery_kv_src, $gallery_kv_wh] = theme_img_src_wh('src/images/gallery/gallery-kv.jpg');

get_header();
?>

<main class="gallery-page overflow-hidden bg-white pb-120 pc:pb-240">
  <section class="gallery-page__hero relative h-450 overflow-hidden bg-[#f1ede7] pc:h-auto pc:overflow-visible pc:pt-120" aria-labelledby="gallery-page-title">
    <div class="relative h-full pc:h-auto">
    <img
      class="gallery-page__hero-image absolute inset-0 block h-full w-full object-cover pc:static pc:h-auto pc:w-full pc:object-contain"
      src="<?php echo esc_url($gallery_kv_src); ?>"
      alt=""
      loading="eager"
      fetchpriority="high"
      <?php echo $gallery_kv_wh; ?>>
      <div class="gallery-page__title-layer absolute inset-0 mx-auto max-w-688">
        <h1 id="gallery-page-title" class="gallery-page__title vertical-rl-mixed absolute left-24 top-96 z-10 text-18 font-montserrat font-light leading-none tracking-[0.18em] pc:left-0 pc:top-80 pc:text-24">
          ART GALLERY
        </h1>
      </div>
    </div>
  </section>

  <section class="gallery-page__works bg-white px-24 pt-96 pc:px-40 pc:pt-160" aria-labelledby="gallery-page-works-title">
    <h2 id="gallery-page-works-title" class="gallery-page__works-title sr-only">
      アートギャラリー作品一覧
    </h2>

    <?php if ($gallery_items) : ?>
      <ul class="gallery-page__grid mx-auto grid max-w-1200 grid-cols-2 gap-x-24 gap-y-48 pc:gap-x-32 pc:gap-y-64">
        <?php foreach ($gallery_items as $gallery_item) : ?>
          <li class="gallery-page__item min-w-0">
            <a class="gallery-page__link block aspect-square overflow-hidden transition-opacity duration-300 hoverable:hover:opacity-70" href="<?php echo esc_url($gallery_item['url']); ?>">
              <img
                class="gallery-page__image block h-full w-full object-cover"
                src="<?php echo esc_url($gallery_item['url']); ?>"
                alt="<?php echo esc_attr($gallery_item['alt']); ?>"
                loading="lazy"
                decoding="async"
                width="<?php echo esc_attr((string) $gallery_item['width']); ?>"
                height="<?php echo esc_attr((string) $gallery_item['height']); ?>">
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php else : ?>
      <p class="gallery-page__empty mx-auto max-w-1200 text-center text-14 font-noto-sans font-light text-gray">
        作品が登録されていません。
      </p>
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>
