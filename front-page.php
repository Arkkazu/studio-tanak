<?php
/* Template Name: トップページ */
get_header();
?>

<style>
  .splide-fv-image {
    will-change: transform;
    backface-visibility: hidden;
    transform: translate3d(0, 0, 0);
    transition: transform 10s linear;
  }

  .splide-fv-image.--01 {
    transform: scale(1);
  }

  .splide-fv-image.--02 {
    transform: scale(1.15) translate3d(0, 0, 0);
  }

  .splide-fv-image.--03 {
    transform: scale(1.15) translate3d(0, 0, 0);
  }

  .splide-fv-image.is-motion.--01 {
    transform: scale(1.15);
  }

  .splide-fv-image.is-motion.--02 {
    transform: scale(1.15) translate3d(-60rem, 0, 0);
  }

  .splide-fv-image.is-motion.--03 {
    transform: scale(1.15) translate3d(0, -60rem, 0);
  }

  /* 2枚目・3枚目 */
  [data-panel-text] {
    opacity: 0;
    transform: translateX(-40rem);
    transition:
      opacity 0.8s ease,
      transform 0.8s ease;
    transition-delay: 1s;
  }

  [data-panel].is-active [data-panel-text] {
    opacity: 1;
    transform: translateX(0);
  }

  /* 1枚目の順番フェード */
  [data-panel-item] {
    opacity: 0;
    transform: translateY(1rem);
    transition:
      opacity 0.8s ease,
      transform 0.8s ease;
  }

  [data-panel].is-active [data-panel-item="1"] {
    opacity: 1;
    transform: translateY(0);
    transition-delay: 1s;
  }

  [data-panel].is-active [data-panel-item="2"] {
    opacity: 1;
    transform: translateY(0);
    transition-delay: 1.3s;
  }

  [data-panel].is-active [data-panel-item="3"] {
    opacity: 1;
    transform: translateY(0);
    transition-delay: 1.6s;
  }

  /* パネルラベル: 1文字ずつ表示 */
  .js-panel-char {
    display: inline-block;
    opacity: 0;
    transform: translateY(4rem);
    transition:
      opacity 0.3s ease,
      transform 0.3s ease;
  }

  .js-panel-indicator.is-current .js-panel-char {
    opacity: 1;
    transform: translateY(0);
    /* 線が伸び切る(duration-300 = 0.3s)のを待ってから1文字ずつ */
    transition-delay: calc(0.3s + var(--i) * 0.05s);
  }
</style>

<main class="relative">
  <div class="relative h-screen w-screen overflow-hidden">
    <section class="absolute inset-0 overflow-hidden z-[1]" data-panel>
      <div class="splide js-splide-fv absolute inset-0 h-full w-full" aria-label="ファーストビュー スライダー">
        <div class="splide__track h-full">
          <ul class="splide__list h-full">
            <li class="splide__slide h-full overflow-hidden">
              <img
                class="splide-fv-image --01 block h-full w-full object-cover"
                src="<?php echo esc_url(get_template_directory_uri() . '/src/images/home/pc_top_1.webp'); ?>"
                alt="">
            </li>
            <li class="splide__slide h-full overflow-hidden">
              <img
                class="splide-fv-image --02 block h-full w-full object-cover"
                src="<?php echo esc_url(get_template_directory_uri() . '/src/images/home/pc_top_2.webp'); ?>"
                alt="">
            </li>
            <li class="splide__slide h-full overflow-hidden">
              <img
                class="splide-fv-image --03 block h-full w-full object-cover"
                src="<?php echo esc_url(get_template_directory_uri() . '/src/images/home/pc_top_3.webp'); ?>"
                alt="">
            </li>
          </ul>
        </div>
      </div>

      <div class="js-fv-bg absolute inset-0 bg-black"></div>

      <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
        <div class="flex flex-col items-center gap-16">
          <div class="flex flex-col items-center gap-24">
            <span class="text-12 text-white font-montserrat tracking-[0.3em]" data-panel-item="1">
              ART PHOTO STUDIO
            </span>
            <h1 data-panel-item="2">
              <img
                class="w-100"
                src="/wp-content/themes/studio-tanak_theme/src/images/common/svg-logo.svg"
                alt="スタジオタナカ"
                loading="lazy"
                width="91"
                height="16">
            </h1>
          </div>
          <span data-panel-item="3" class="text-10 text-white font-montserrat tracking-[0.3em]">
            since 1942
          </span>
        </div>
      </div>
    </section>

    <section class="absolute inset-0 overflow-hidden flex items-center justify-center z-[2]" data-panel>
      <div class="absolute inset-0 h-full w-full">
        <img class="w-full h-full object-cover" src="/wp-content/themes/studio-tanak_theme/src/images/home/pc_top_4.webp" alt="" loading="lazy" width="2401" height="1801">
      </div>
      <div class="absolute inset-0 bg-[rgba(0,0,0,0.6)]"></div>
      <div class="relative w-full flex gap-48">
        <div class="relative w-[calc((100%-280rem-48rem*2)/2)] flex justify-end pt-32">
          <div class="flex flex-col gap-32" data-panel-item="1">
            <p class="text-33 text-white font-noto-serif font-extralight tracking-[0.05em]">
              A moment forever
            </p>
            <p class="text-white font-thin leading-[1.3]">
              大切な瞬間をアート作品に
            </p>
          </div>
        </div>
        <div class="relative w-280 overflow-clip" data-img-anime>
          <img class="w-full" src="/wp-content/themes/studio-tanak_theme/src/images/home/pc_top_7.webp" alt="大切な瞬間をアート作品に" loading="lazy" width="561" height="757">
        </div>
        <div class="relative w-[calc((100%-280rem-48rem*2)/2)] flex items-center">

          <div class="w-298 flex flex-col gap-24" data-panel-item="2">
            <p class="text-13 text-white font-thin leading-[2.8]">
              1942年創業。<br>
              長い歴史の中でスタジオタナカは多くのご家族の大切な瞬間を写真として残してまいりました。
              そして2026年。“アートを提案するフォトスタジオ” へと進化します。
            </p>
            <p class="text-8 text-white font-extralight font-noto-serif leading-[2] tracking-[0.05em]">
              Founded in 1942.<br>
              Throughout its long history, Studio Tanaka has captured countless precious moments in photographs for many families.
              And in 2026, it will evolve into a "photo studio that proposes art."
            </p>
          </div>

        </div>
      </div>
    </section>

    <section class="absolute inset-0 overflow-hidden flex items-center justify-center z-[3]" data-panel>
      <div class="absolute inset-0 h-full w-full">
        <img class="w-full h-full object-cover" src="/wp-content/themes/studio-tanak_theme/src/images/home/pc_top_5.webp" alt="" loading="lazy" width="2401" height="1801">
      </div>
      <div class="absolute inset-0 bg-[rgba(0,0,0,0.6)]"></div>
      <div class="relative w-full flex gap-48">
        <div class="relative w-[calc((100%-280rem-48rem*2)/2)] flex justify-end pt-64">
          <div class="w-320 flex flex-col gap-24" data-panel-item="1">
            <p class="text-13 text-white font-thin leading-[2.8]">
              特別な日の記憶を、特別な日のままで終わらせない。<br>
              毎日の生活の中で自然と目にふれる存在にすることで、暮らしにあたたかな彩りを添えてくれます。<br>
              思い出はより豊かな価値へと変わっていきます。
            </p>
            <p class="text-8 text-white font-extralight font-noto-serif leading-[2] tracking-[0.05em]">
              Don't let the memories of a special day remain just that—special days.<br>
              By making it a natural part of your daily life, it adds a warm touch to your living space.<br>
              Memories transform into something of even greater value.
            </p>
          </div>
        </div>
        <div class="relative w-280 overflow-clip" data-img-anime>
          <img class="w-full" src="/wp-content/themes/studio-tanak_theme/src/images/home/pc_top_8.webp" alt="大切な瞬間をアート作品に" loading="lazy" width="561" height="757">
        </div>
        <div class="relative w-[calc((100%-280rem-48rem*2)/2)] flex items-end pb-48">

          <div class="flex flex-col gap-32" data-panel-item="2">
            <p class="text-33 text-white font-noto-serif font-extralight tracking-[0.05em]">
              Irreplaceable value
            </p>
            <p class="text-white font-thin leading-[1.3]">
              思い出をさらなる価値へ
            </p>
          </div>

        </div>
      </div>
    </section>

    <section class="absolute inset-0 overflow-hidden flex items-center justify-center z-[4]" data-panel>
      <div class="absolute inset-0 h-full w-full">
        <img class="w-full h-full object-cover" src="/wp-content/themes/studio-tanak_theme/src/images/home/pc_top_6.webp" alt="" loading="lazy" width="2401" height="1801">
      </div>
      <div class="absolute inset-0 bg-[rgba(0,0,0,0.6)]"></div>
      <div class="relative w-full flex gap-48">
        <div class="relative w-[calc((100%-280rem-48rem*2)/2)] flex justify-end pt-48">
          <div class="flex flex-col gap-32" data-panel-item="1">
            <p class="text-33 text-white font-noto-serif font-extralight tracking-[0.05em]">
              To the future
            </p>
            <p class="text-white font-thin leading-[1.3]">
              人生に寄り添う一枚を
            </p>
          </div>
        </div>
        <div class="relative w-280 overflow-clip" data-img-anime>
          <img class="w-full" src="/wp-content/themes/studio-tanak_theme/src/images/home/pc_top_9.webp" alt="人生に寄り添う一枚を" loading="lazy" width="561" height="757">
        </div>
        <div class="relative w-[calc((100%-280rem-48rem*2)/2)] flex items-center">

          <div class="w-298 flex flex-col gap-24" data-panel-item="2">
            <p class="text-13 text-white font-thin leading-[2.8]">
              人生の節目や何気ない瞬間が、時を重ねるごとにより愛おしく感じられるように。<br>
              ARTとして暮らしの中に取り入れていただくことで、思い出がより身近な存在になると信じています。<br>
              皆さまの人生に寄り添う一枚を、心を込めて。
            </p>
            <p class="text-8 text-white font-extralight font-noto-serif leading-[2] tracking-[0.05em]">
              May life's milestones and everyday moments become more precious with each passing day.<br>
              We believe that by incorporating art into your life, your memories will become even more intimate.<br>
              We put our hearts into creating a piece that will accompany you throughout your life.
            </p>
          </div>

        </div>
      </div>
    </section>

    <section class="absolute inset-0 overflow-hidden flex items-center justify-center z-[5]" data-panel>

      <div class="absolute inset-0 bg-[#666]"></div>
      <div class="relative w-full h-[48dvh] flex gap-48">
        <div class="relative w-[calc((100%-440rem-48rem*2)/2)] flex justify-end pt-48">
          <div class="flex flex-col gap-32" data-panel-item="1">
            <p class="text-33 text-white font-noto-serif font-extralight tracking-[0.05em]">
              Art gallery
            </p>
          </div>
        </div>
        <div class="relative w-440 flex items-cente justify-center">
          <div class="relative w-280 aspect[280/372]">
            <div class="absolute -top-48 -left-48 w-full" data-gallery-anime-1>
              <img class="w-full" src="/wp-content/themes/studio-tanak_theme/src/images/home/pc_top_10.webp" alt="アートギャラリー" loading="lazy" width="561" height="757">
            </div>
            <div class="absolute -top-88 left-24 w-full" data-gallery-anime-2>
              <img class="w-full" src="/wp-content/themes/studio-tanak_theme/src/images/home/pc_top_11.webp" alt="アートギャラリー" loading="lazy" width="561" height="757">
            </div>
            <div class="absolute top-48 left-0 w-full" data-gallery-anime-3>
              <img class="w-full" src="/wp-content/themes/studio-tanak_theme/src/images/home/pc_top_12.webp" alt="アートギャラリー" loading="lazy" width="561" height="757">
            </div>
            <div class="absolute top-0 left-88 w-full" data-gallery-anime-4>
              <img class="w-full" src="/wp-content/themes/studio-tanak_theme/src/images/home/pc_top_13.webp" alt="アートギャラリー" loading="lazy" width="561" height="757">
            </div>
          </div>
          <div class="absolute -bottom-80 w-full">
            <a class="flex items-center justify-center max-w-440 w-full min-h-42 border border-white transition-opacity duration-300 pc:hover:opacity-50" href="">
              <span class="text-12 text-white">
                More
              </span>
            </a>
          </div>

        </div>
        <div class="relative w-[calc((100%-440rem-48rem*2)/2)] flex items-center">

          <div class="w-298 flex flex-col gap-24" data-panel-item="2">

          </div>

        </div>
      </div>
    </section>
  </div>
  <section class="py-80 bg-white" id="recommend">
    <div class="flex justify-center">
      <h2 class="text-14 font-montserrat font-light tracking-[0.05em]">
        RECOMMEND
      </h2>
    </div>
  </section>
  <section class="px-20 py-80 bg-[#ccc]" id="news">
    <div class="mx-auto max-w-1200">
      <div class="grid gap-80">
        <div class="flex justify-center">
          <h2 class="text-14 text-white font-montserrat font-light tracking-[0.05em]">
            NEWS / TOPICS
          </h2>
        </div>
        <div class="">
          <ul class="grid grid-cols-4 gap-64">
            <li class="">
              <a class="flex flex-col gap-16" href="">
                <div class="flex flex-col gap-8">
                  <div class="px-8 flex items-center justify-between">
                    <span class="text-12 text-white font-montserrat font-light leading-[1.3] tracking-[0.05em]">
                      INFORMATION
                    </span>
                    <span class="text-10 text-white font-thin leading-[1.3] tracking-[0.05em]">
                      2026.04.04
                    </span>
                  </div>
                  <div class="aspect-[25/18] bg-white">
                    <?php [$src, $wh] = theme_img_src_wh("src/images/home/pc_top_1.webp"); ?>
                    <img class="w-full h-full object-cover" src="<?php echo $src; ?>" alt="" loading="lazy" <?php echo $wh; ?>>
                  </div>
                </div>
                <div class="flex flex-col gap-12">
                  <p class="text-12 text-white ">
                    入園・入学記念写真は春がベスト！<br>今しか撮れない成長の一枚
                  </p>
                  <p class="text-10 text-white ">
                    入園・入学記念写真は春がベスト！<br>今しか撮れない成長の一枚
                  </p>
                </div>
              </a>
            </li>
            <li class="">
              <a class="flex flex-col gap-16" href="">
                <div class="flex flex-col gap-8">
                  <div class="px-8 flex items-center justify-between">
                    <span class="text-12 text-white font-montserrat font-light leading-[1.3] tracking-[0.05em]">
                      INFORMATION
                    </span>
                    <span class="text-10 text-white font-thin leading-[1.3] tracking-[0.05em]">
                      2026.04.04
                    </span>
                  </div>
                  <div class="aspect-[25/18] bg-white">
                    <?php [$src, $wh] = theme_img_src_wh("src/images/home/pc_top_1.webp"); ?>
                    <img class="w-full h-full object-cover" src="<?php echo $src; ?>" alt="" loading="lazy" <?php echo $wh; ?>>
                  </div>
                </div>
                <div class="flex flex-col gap-12">
                  <p class="text-12 text-white ">
                    入園・入学記念写真は春がベスト！<br>今しか撮れない成長の一枚
                  </p>
                  <p class="text-10 text-white ">
                    入園・入学記念写真は春がベスト！<br>今しか撮れない成長の一枚
                  </p>
                </div>
              </a>
            </li>
            <li class="">
              <a class="flex flex-col gap-16" href="">
                <div class="flex flex-col gap-8">
                  <div class="px-8 flex items-center justify-between">
                    <span class="text-12 text-white font-montserrat font-light leading-[1.3] tracking-[0.05em]">
                      INFORMATION
                    </span>
                    <span class="text-10 text-white font-thin leading-[1.3] tracking-[0.05em]">
                      2026.04.04
                    </span>
                  </div>
                  <div class="aspect-[25/18] bg-white">
                    <?php [$src, $wh] = theme_img_src_wh("src/images/home/pc_top_1.webp"); ?>
                    <img class="w-full h-full object-cover" src="<?php echo $src; ?>" alt="" loading="lazy" <?php echo $wh; ?>>
                  </div>
                </div>
                <div class="flex flex-col gap-12">
                  <p class="text-12 text-white ">
                    入園・入学記念写真は春がベスト！<br>今しか撮れない成長の一枚
                  </p>
                  <p class="text-10 text-white ">
                    入園・入学記念写真は春がベスト！<br>今しか撮れない成長の一枚
                  </p>
                </div>
              </a>
            </li>
            <li class="">
              <a class="flex flex-col gap-16" href="">
                <div class="flex flex-col gap-8">
                  <div class="px-8 flex items-center justify-between">
                    <span class="text-12 text-white font-montserrat font-light leading-[1.3] tracking-[0.05em]">
                      INFORMATION
                    </span>
                    <span class="text-10 text-white font-thin leading-[1.3] tracking-[0.05em]">
                      2026.04.04
                    </span>
                  </div>
                  <div class="aspect-[25/18] bg-white">
                    <!-- <?php [$src, $wh] = theme_img_src_wh("src/images/home/pc_top_1.webp"); ?>
                  <img class="w-full h-full object-cover" src="<?php echo $src; ?>" alt="" loading="lazy" <?php echo $wh; ?>> -->
                  </div>
                </div>
                <div class="flex flex-col gap-12">
                  <p class="text-12 text-white ">
                    入園・入学記念写真は春がベスト！<br>今しか撮れない成長の一枚
                  </p>
                  <p class="text-10 text-white ">
                    入園・入学記念写真は春がベスト！<br>今しか撮れない成長の一枚
                  </p>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="flex justify-center">
          <a class="flex items-center justify-center max-w-440 w-full min-h-42 border border-white transition-opacity duration-300 pc:hover:opacity-50" href="">
            <span class="text-12 text-white">
              More
            </span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="px-20 py-80 bg-[#bfb6aa]" id="shooting">
    <div class="mx-auto max-w-1200">
      <div class="grid gap-80">
        <div class="flex justify-center">
          <h2 class="text-14 font-montserrat font-light tracking-[0.05em]">
            SHOOTING MENU
          </h2>
        </div>
        <div class="">
          <span class="block w-full h-[1px] bg-[#605f5f]"></span>
          <div class="flex justify-center gap-32">
            <a class="relative w-147 transition-opacity duration-300 pc:hover:opacity-50" href="">
              <?php [$src, $wh] = theme_img_src_wh("src/images/common/menu_icon_1.svg"); ?>
              <img class="w-full" src="<?php echo $src; ?>" alt="アイコン" loading="lazy" <?php echo $wh; ?>>
              <div class="absolute bottom-32 left-1/2 -translate-x-1/2">
                <span class="block text-12 text-center leading-[1.2] whitespace-nowrap">
                  Shrine visit<br>100-day anniversary
                </span>
              </div>
            </a>
            <a class="relative w-147 transition-opacity duration-300 pc:hover:opacity-50" href="">
              <?php [$src, $wh] = theme_img_src_wh("src/images/common/menu_icon_2.svg"); ?>
              <img class="w-full" src="<?php echo $src; ?>" alt="アイコン" loading="lazy" <?php echo $wh; ?>>
              <div class="absolute bottom-32 left-1/2 -translate-x-1/2">
                <span class="block text-12 text-center leading-[1.2] whitespace-nowrap">
                  Shrine visit<br>100-day anniversary
                </span>
              </div>
            </a>
            <a class="relative w-147 transition-opacity duration-300 pc:hover:opacity-50" href="">
              <?php [$src, $wh] = theme_img_src_wh("src/images/common/menu_icon_3.svg"); ?>
              <img class="w-full" src="<?php echo $src; ?>" alt="アイコン" loading="lazy" <?php echo $wh; ?>>
              <div class="absolute bottom-32 left-1/2 -translate-x-1/2">
                <span class="block text-12 text-center leading-[1.2] whitespace-nowrap">
                  Shrine visit<br>100-day anniversary
                </span>
              </div>
            </a>
            <a class="relative w-147 transition-opacity duration-300 pc:hover:opacity-50" href="">
              <?php [$src, $wh] = theme_img_src_wh("src/images/common/menu_icon_4.svg"); ?>
              <img class="w-full" src="<?php echo $src; ?>" alt="アイコン" loading="lazy" <?php echo $wh; ?>>
              <div class="absolute bottom-32 left-1/2 -translate-x-1/2">
                <span class="block text-12 text-center leading-[1.2] whitespace-nowrap">
                  Shrine visit<br>100-day anniversary
                </span>
              </div>
            </a>
            <a class="relative w-147 transition-opacity duration-300 pc:hover:opacity-50" href="">
              <?php [$src, $wh] = theme_img_src_wh("src/images/common/menu_icon_5.svg"); ?>
              <img class="w-full" src="<?php echo $src; ?>" alt="アイコン" loading="lazy" <?php echo $wh; ?>>
              <div class="absolute bottom-32 left-1/2 -translate-x-1/2">
                <span class="block text-12 text-center leading-[1.2] whitespace-nowrap">
                  Shrine visit<br>100-day anniversary
                </span>
              </div>
            </a>
            <a class="relative w-147 transition-opacity duration-300 pc:hover:opacity-50" href="">
              <?php [$src, $wh] = theme_img_src_wh("src/images/common/menu_icon_6.svg"); ?>
              <img class="w-full" src="<?php echo $src; ?>" alt="アイコン" loading="lazy" <?php echo $wh; ?>>
              <div class="absolute bottom-32 left-1/2 -translate-x-1/2">
                <span class="block text-12 text-center leading-[1.2] whitespace-nowrap">
                  Shrine visit<br>100-day anniversary
                </span>
              </div>
            </a>
          </div>
          <span class="block w-full h-[1px] bg-[#605f5f]"></span>
          <div class="flex justify-center gap-32">
            <a class="relative w-147 transition-opacity duration-300 pc:hover:opacity-50" href="">
              <?php [$src, $wh] = theme_img_src_wh("src/images/common/menu_icon_7.svg"); ?>
              <img class="w-full" src="<?php echo $src; ?>" alt="アイコン" loading="lazy" <?php echo $wh; ?>>
              <div class="absolute bottom-32 left-1/2 -translate-x-1/2">
                <span class="block text-12 text-center leading-[1.2] whitespace-nowrap">
                  Shrine visit<br>100-day anniversary
                </span>
              </div>
            </a>
            <a class="relative w-147 transition-opacity duration-300 pc:hover:opacity-50" href="">
              <?php [$src, $wh] = theme_img_src_wh("src/images/common/menu_icon_8.svg"); ?>
              <img class="w-full" src="<?php echo $src; ?>" alt="アイコン" loading="lazy" <?php echo $wh; ?>>
              <div class="absolute bottom-32 left-1/2 -translate-x-1/2">
                <span class="block text-12 text-center leading-[1.2] whitespace-nowrap">
                  Shrine visit<br>100-day anniversary
                </span>
              </div>
            </a>
            <a class="relative w-147 transition-opacity duration-300 pc:hover:opacity-50" href="">
              <?php [$src, $wh] = theme_img_src_wh("src/images/common/menu_icon_9.svg"); ?>
              <img class="w-full" src="<?php echo $src; ?>" alt="アイコン" loading="lazy" <?php echo $wh; ?>>
              <div class="absolute bottom-32 left-1/2 -translate-x-1/2">
                <span class="block text-12 text-center leading-[1.2] whitespace-nowrap">
                  Shrine visit<br>100-day anniversary
                </span>
              </div>
            </a>
            <a class="relative w-147 transition-opacity duration-300 pc:hover:opacity-50" href="">
              <?php [$src, $wh] = theme_img_src_wh("src/images/common/menu_icon_10.svg"); ?>
              <img class="w-full" src="<?php echo $src; ?>" alt="アイコン" loading="lazy" <?php echo $wh; ?>>
              <div class="absolute bottom-32 left-1/2 -translate-x-1/2">
                <span class="block text-12 text-center leading-[1.2] whitespace-nowrap">
                  Shrine visit<br>100-day anniversary
                </span>
              </div>
            </a>
            <a class="relative w-147 transition-opacity duration-300 pc:hover:opacity-50" href="">
              <?php [$src, $wh] = theme_img_src_wh("src/images/common/menu_icon_11.svg"); ?>
              <img class="w-full" src="<?php echo $src; ?>" alt="アイコン" loading="lazy" <?php echo $wh; ?>>
              <div class="absolute bottom-32 left-1/2 -translate-x-1/2">
                <span class="block text-12 text-center leading-[1.2] whitespace-nowrap">
                  Shrine visit<br>100-day anniversary
                </span>
              </div>
            </a>
            <a class="relative w-147 transition-opacity duration-300 pc:hover:opacity-50" href="">
              <?php [$src, $wh] = theme_img_src_wh("src/images/common/menu_icon_12.svg"); ?>
              <img class="w-full" src="<?php echo $src; ?>" alt="アイコン" loading="lazy" <?php echo $wh; ?>>
              <div class="absolute bottom-32 left-1/2 -translate-x-1/2">
                <span class="block text-12 text-center leading-[1.2] whitespace-nowrap">
                  Shrine visit<br>100-day anniversary
                </span>
              </div>
            </a>
          </div>
          <span class="block w-full h-[1px] bg-[#605f5f]"></span>
          <div class="flex justify-center gap-32">
            <a class="relative w-147 transition-opacity duration-300 pc:hover:opacity-50" href="">
              <?php [$src, $wh] = theme_img_src_wh("src/images/common/menu_icon_13.svg"); ?>
              <img class="w-full" src="<?php echo $src; ?>" alt="アイコン" loading="lazy" <?php echo $wh; ?>>
              <div class="absolute bottom-32 left-1/2 -translate-x-1/2">
                <span class="block text-12 text-center leading-[1.2] whitespace-nowrap">
                  Shrine visit<br>100-day anniversary
                </span>
              </div>
            </a>
            <a class="relative w-147 transition-opacity duration-300 pc:hover:opacity-50" href="">
              <?php [$src, $wh] = theme_img_src_wh("src/images/common/menu_icon_14.svg"); ?>
              <img class="w-full" src="<?php echo $src; ?>" alt="アイコン" loading="lazy" <?php echo $wh; ?>>
              <div class="absolute bottom-32 left-1/2 -translate-x-1/2">
                <span class="block text-12 text-center leading-[1.2] whitespace-nowrap">
                  Shrine visit<br>100-day anniversary
                </span>
              </div>
            </a>
            <a class="relative w-147 transition-opacity duration-300 pc:hover:opacity-50" href="">
              <?php [$src, $wh] = theme_img_src_wh("src/images/common/menu_icon_15.svg"); ?>
              <img class="w-full" src="<?php echo $src; ?>" alt="アイコン" loading="lazy" <?php echo $wh; ?>>
              <div class="absolute bottom-32 left-1/2 -translate-x-1/2">
                <span class="block text-12 text-center leading-[1.2] whitespace-nowrap">
                  Shrine visit<br>100-day anniversary
                </span>
              </div>
            </a>
            <a class="relative w-147 transition-opacity duration-300 pc:hover:opacity-50" href="">
              <?php [$src, $wh] = theme_img_src_wh("src/images/common/menu_icon_16.svg"); ?>
              <img class="w-full" src="<?php echo $src; ?>" alt="アイコン" loading="lazy" <?php echo $wh; ?>>
              <div class="absolute bottom-32 left-1/2 -translate-x-1/2">
                <span class="block text-12 text-center leading-[1.2] whitespace-nowrap">
                  Shrine visit<br>100-day anniversary
                </span>
              </div>
            </a>
            <a class="relative w-147 transition-opacity duration-300 pc:hover:opacity-50" href="">
              <?php [$src, $wh] = theme_img_src_wh("src/images/common/menu_icon_17.svg"); ?>
              <img class="w-full" src="<?php echo $src; ?>" alt="アイコン" loading="lazy" <?php echo $wh; ?>>
              <div class="absolute bottom-32 left-1/2 -translate-x-1/2">
                <span class="block text-12 text-center leading-[1.2] whitespace-nowrap">
                  Shrine visit<br>100-day anniversary
                </span>
              </div>
            </a>
            <a class="relative w-147 transition-opacity duration-300 pc:hover:opacity-50" href="">
              <?php [$src, $wh] = theme_img_src_wh("src/images/common/menu_icon_18.svg"); ?>
              <img class="w-full" src="<?php echo $src; ?>" alt="アイコン" loading="lazy" <?php echo $wh; ?>>
              <div class="absolute bottom-32 left-1/2 -translate-x-1/2">
                <span class="block text-12 text-center leading-[1.2] whitespace-nowrap">
                  Shrine visit<br>100-day anniversary
                </span>
              </div>
            </a>
          </div>
          <span class="block w-full h-[1px] bg-[#605f5f]"></span>
        </div>
      </div>
    </div>
  </section>
  <section class="px-20 py-80 bg-[#ccc]" id="gallery">
    <div class="mx-auto max-w-1200">
      <div class="grid gap-80">
        <div class="flex justify-center">
          <h2 class="text-14 text-white font-montserrat font-light tracking-[0.05em]">
            PHOTO GALLERY
          </h2>
        </div>
        <div class="overflow-hidden">
          <!-- 必須要素 -->
          <div class="splide splide-infinity" id="infinity-to-left" aria-label="横に流れ続けるスライダー">
            <!-- 必須要素 -->
            <div class="splide__track">
              <!-- 必須要素 -->
              <ul class="splide__list">
                <!-- 必須要素 -->
                <li class="splide__slide">
                  <img src="https://tips-log.com/wp-content/uploads/2024/05/test1.jpg" alt="">
                </li>
                <!-- 必須要素 -->
                <li class="splide__slide">
                  <img src="https://tips-log.com/wp-content/uploads/2024/05/test2.jpg" alt="">
                </li>
                <!-- 必須要素 -->
                <li class="splide__slide">
                  <img src="https://tips-log.com/wp-content/uploads/2024/05/test3.jpg" alt="">
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="flex justify-center">
          <a class="flex items-center justify-center max-w-440 w-full min-h-42 border border-white transition-opacity duration-300 pc:hover:opacity-50" href="">
            <span class="text-12 text-white">
              More
            </span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="px-20 py-80 bg-white" id="access">
    <div class="mx-auto max-w-1200">
      <div class="grid gap-80">
        <div class="flex justify-center">
          <h2 class="text-14 font-montserrat font-light tracking-[0.05em]">
            ACCESS
          </h2>
        </div>
        <div class="aspect-[21/9]">
          <iframe class="w-full h-full object-cover" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3214.5659595668512!2d139.0056646!3d36.322831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601e9281f49e7de9%3A0x8a6be13e8b8ee85d!2z44K544K_44K444Kq44K_44OK44Kr!5e0!3m2!1sja!2sjp!4v1777094361560!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="flex justify-center">
          <span class="block text-11 text-center font-montserrat leading-[1.3] tracking-[0.05em]">
            270,miyamoto-cho,takasaki-city,Gunma<br>
            TEL.027-325-4649<br>
            OPEN : 10:00-18:00<br>
            CLOSE : Tuesday/First and third Wednesdays
          </span>
        </div>
      </div>
    </div>
  </section>
  <?php
  $panel_indicators = [
    ['label' => 'Top'],
    ['label' => 'A moment forever'],
    ['label' => 'Irreplaceable value'],
    ['label' => 'To the future'],
    ['label' => 'Art gallery'],
    ['label' => 'Recommend', 'target' => '#recommend'],
    ['label' => 'News', 'target' => '#news'],
    ['label' => 'Shooting', 'target' => '#shooting'],
    ['label' => 'Gallery', 'target' => '#gallery'],
    ['label' => 'Access', 'target' => '#access'],
  ];
  ?>
  <div class="fixed right-0 top-1/2 z-[500] -translate-y-1/2 flex flex-col items-end mix-blend-difference" aria-hidden="true">
    <?php foreach ($panel_indicators as $indicator) : ?>
      <div class="js-panel-indicator relative flex items-center w-16 h-8 opacity-60 transition-all duration-300" <?php echo isset($indicator['target']) ? ' data-scroll-target="' . esc_attr($indicator['target']) . '"' : ''; ?>>
        <span class="js-panel-label absolute -left-4 -bottom-2 translate-y-full vertical-rl-mixed whitespace-nowrap text-10 text-white font-montserrat"><?php
          foreach (preg_split('//u', $indicator['label'], -1, PREG_SPLIT_NO_EMPTY) as $ci => $char) {
            $glyph = $char === ' ' ? '&nbsp;' : esc_html($char);
            echo '<span class="js-panel-char" style="--i:' . $ci . '">' . $glyph . '</span>';
          }
        ?></span>
        <span class="block h-[1px] w-full bg-white"></span>
      </div>
    <?php endforeach; ?>
  </div>

</main>

<?php get_footer(); ?>