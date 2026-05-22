<header class="fixed top-0 left-0 right-0 px-24 pc:px-32 h-60 flex items-center z-700 pointer-events-none mix-blend-difference">
  <a class="pointer-events-auto transition-opacity duration-300 pc:hover:opacity-50" href="<?php echo esc_url(home_url('/')); ?>">
    <?php [$src, $wh] = theme_img_src_wh("src/images/common/svg-logo-icon.svg"); ?>
    <img
      class="w-30 h-30 block"
      src="<?php echo $src; ?>"
      alt="スタジオタナカ"
      loading="eager"
      <?php echo $wh; ?>>
  </a>
</header>
<button type="button" class="js-burger fixed top-0 right-0 z-[701] flex justify-center items-center w-60 h-60 mix-blend-difference" aria-label="メニューを開く">
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-30 h-24">
    <span class="js-burger-line-1 absolute bg-white w-full h-[2px] duration-500 left-0 top-0"></span>
    <span class="js-burger-line-2 absolute bg-white w-full h-[2px] duration-500 left-0 top-11"></span>
    <span class="js-burger-line-3 absolute bg-white w-full h-[2px] duration-500 left-0 top-22"></span>
  </div>
</button>
