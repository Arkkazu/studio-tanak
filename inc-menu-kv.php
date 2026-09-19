<?php
$menu_data_post_id = function_exists('legacy_old_data_post_id')
  ? legacy_old_data_post_id()
  : get_queried_object_id();
$img_pc = get_field('menu-kv-pc', $menu_data_post_id);
$img_sp = get_field('menu-kv-sp', $menu_data_post_id);
$img_pc = $img_pc ?: (function_exists('legacy_old_menu_fallback') ? legacy_old_menu_fallback('menu-kv-pc') : null);
$img_sp = $img_sp ?: (function_exists('legacy_old_menu_fallback') ? legacy_old_menu_fallback('menu-kv-sp') : null);
$menu_title = get_the_title($menu_data_post_id);
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
        <?php echo esc_html($menu_title); ?>
      </h1>
    </div>
  </div>
<?php endif; ?>
