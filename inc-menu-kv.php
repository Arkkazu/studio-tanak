<?php
$img_pc = get_field('menu-kv-pc');
$img_sp = get_field('menu-kv-sp');
?>

<?php if ($img_pc && $img_sp) : ?>
  <div class="relative w-full">
    <picture>
      <source media="(min-width: 768px)" srcset="<?php echo esc_url($img_pc['url']); ?>">
      <img
        class="w-full"
        src="<?php echo esc_url($img_sp['url']); ?>"
        alt="<?php echo esc_attr($img_sp['alt'] ?: $img_pc['alt']); ?>"
        loading="lazy"
        width="<?php echo esc_attr($img_sp['width']); ?>"
        height="<?php echo esc_attr($img_sp['height']); ?>">
    </picture>
    <div class="max-md:hidden absolute left-160 pc:left-450 top-1/2 -translate-y-1/2">
      <h1 class="text-20 pc:text-30 text-center font-normal font-zen-maru-gothic">
        <?php the_title(); ?>
      </h1>
    </div>
  </div>
<?php endif; ?>