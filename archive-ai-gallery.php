<?php

/**
 * Gallery archive template.
 *
 * The gallery images are managed as the ai-gallery custom post type. Images are
 * rendered from each post's featured image so editors can add or reorder work
 * without changing the template.
 */

$gallery_query_args = [
  'post_type'      => 'ai-gallery',
  'post_status'    => 'publish',
  'posts_per_page' => -1,
  'orderby'        => [
    'menu_order' => 'ASC',
    'date'       => 'ASC',
  ],
  'no_found_rows'  => true,
];

if (taxonomy_exists('ai-gallery-cat')) {
  $gallery_query_args['tax_query'] = [
    [
      'taxonomy' => 'ai-gallery-cat',
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

[$gallery_fv_pc_src, $gallery_fv_pc_wh] = theme_img_src_wh('src/images/gallery/fv-pc.webp');
[$gallery_fv_sp_src, $gallery_fv_sp_wh] = theme_img_src_wh('src/images/gallery/fv-sp.webp');

get_header();
?>

<main class="overflow-hidden bg-white pb-120 pc:pb-240">
  <section class="relative aspect-square pc:aspect-[1920/480] overflow-hidden bg-[#f1ede7]" aria-labelledby="gallery-page-title">
    <div class="relative h-full">
      <div class="absolute inset-0 mx-auto max-w-920">
        <h1 id="gallery-page-title" class="absolute left-24 pc:left-64 top-96 pc:top-176 z-10 text-18 pc:text-20 font-montserrat font-light leading-none tracking-[0.18em] pc:tracking-[0.22em] [writing-mode:vertical-rl] pc:[writing-mode:horizontal-tb]">
          ART GALLERY
        </h1>
      </div>
      <picture>
        <source media="(min-width: 1272px)" srcset="<?php echo esc_url($gallery_fv_pc_src); ?>">
        <img class="absolute inset-0 block h-full w-full object-cover" src="<?php echo esc_url($gallery_fv_sp_src); ?>" alt="" loading="eager" fetchpriority="high" <?php echo $gallery_fv_sp_wh; ?>>
      </picture>
    </div>
  </section>

  <section class="bg-white px-20 pc:px-40 pt-80 pc:pt-150" aria-labelledby="gallery-page-works-title">
    <h2 id="gallery-page-works-title" class="sr-only">
      アートギャラリー作品一覧
    </h2>

    <?php if ($gallery_items) : ?>
      <ul class="mx-auto grid max-w-840 grid-cols-2 pc:grid-cols-4 gap-x-20 pc:gap-x-40 gap-y-40 pc:gap-y-64">
        <?php foreach ($gallery_items as $gallery_item) : ?>
          <li class="min-w-0">
            <a class="block aspect-square overflow-hidden transition-opacity duration-300 hoverable:hover:opacity-70" href="<?php echo esc_url($gallery_item['url']); ?>">
              <img
                class="block h-full w-full object-cover"
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
      <p class="mx-auto max-w-840 text-center text-14 font-noto-sans font-light text-gray">
        作品が登録されていません。
      </p>
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>
