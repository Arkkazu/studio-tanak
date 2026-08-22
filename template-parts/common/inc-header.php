<?php $fv_header_class = is_front_page() ? ' js-fv-header' : ''; ?>
<header class="fixed top-0 left-0 right-0 px-24 pc:px-32 h-60 flex items-center z-700 pointer-events-none mix-blend-difference<?php echo esc_attr($fv_header_class); ?>">
  <a class="pointer-events-auto transition-opacity duration-300 pc:hover:opacity-50" href="<?php echo esc_url(home_url('/')); ?>">
    <?php [$src, $wh] = theme_img_src_wh("src/images/common/svg-logo-icon.svg"); ?>
    <img
      class="w-24 h-24 block"
      src="<?php echo $src; ?>"
      alt="スタジオタナカ"
      loading="eager"
      <?php echo $wh; ?>>
  </a>
</header>
<button type="button" class="js-burger fixed top-0 right-0 z-[800] flex justify-center items-center w-60 h-60 mix-blend-difference transition-opacity duration-300 <?php echo esc_attr($fv_header_class); ?>" aria-label="メニューを開く" aria-controls="sp-menu" aria-expanded="false">
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 h-24 flex items-center gap-8">
    <span class="js-burger-label text-10 text-white font-montserrat tracking-[0.1em]">MENU</span>

    <!-- <span class="absolute bg-white w-full h-[2px] duration-500 left-0 top-0"></span> -->
    <span class="bg-white w-20 h-[1px]"></span>
    <!-- <span class="absolute bg-white w-full h-[2px] duration-500 left-0 top-22"></span> -->
  </div>
</button>