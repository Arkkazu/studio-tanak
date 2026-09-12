<?php

/**
 * Shooting menu section heading with number and decorative image.
 *
 * @var array{section?: array<string, mixed>} $args
 */
$section = $args['section'] ?? [];
$image_class = $args['image_class'] ?? 'absolute top-80 pc:-top-42 -right-24 pc:right-240 w-160 pc:w-147';

if (!is_array($section) || empty($section['number']) || empty($section['image'])) {
  return;
}

[$number_src, $number_wh] = theme_img_src_wh('src/images/common/' . $section['number'] . '.svg');
[$image_src, $image_wh] = theme_img_src_wh($section['image']);
?>
<div class="relative flex min-h-120 pc:min-h-0 items-center justify-center">
  <div class="relative flex flex-col items-center gap-4">
    <img class="absolute -top-16 pc:-top-20 -left-20 -translate-x-full block w-48 pc:w-71" src="<?php echo esc_url($number_src); ?>" alt="" loading="lazy" <?php echo $number_wh; ?>>
    <h2 class="text-15 pc:text-16 text-center font-montserrat font-light leading-[1.2] tracking-[0.05em]">
      <?php echo wp_kses($section['title'] ?? '', ['br' => ['class' => true]]); ?>
    </h2>
    <p class="text-10 pc:text-13 font-light leading-[1.2] text-gray">
      <?php echo esc_html($section['title_ja'] ?? ''); ?>
    </p>
  </div>
  <div class="<?php echo esc_attr($image_class); ?>">
    <img class="block w-full" src="<?php echo esc_url($image_src); ?>" alt="" loading="lazy" <?php echo $image_wh; ?>>
  </div>
</div>