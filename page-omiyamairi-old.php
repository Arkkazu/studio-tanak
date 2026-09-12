<?php
/* Template Name: トップページ */
get_header();
?>

<body>
  <div class="max-pc:pb-48">

    <?php get_template_part('inc', 'header'); ?>

    <main class="py-70 pc:py-160 ">

      <div class="relative w-full">
        <picture>
          <source media='(min-width: 768px)' srcset='/wp-content/themes/studio-tanak_theme/src/images/legacy-old/omiyamairi/omiyaimg_pc2.webp'>
          <img class='w-full' src='/wp-content/themes/studio-tanak_theme/src/images/legacy-old/omiyamairi/omiyaimg_sp2.webp' alt='お宮参り' loading='lazy' width='1125' height='1130'>
        </picture>
        <div class="absolute left-0 md:left-160 pc:left-450 top-1/2 -translate-y-1/2">
          <h1 class="text-20 pc:text-30 font-zen-maru-gothic opacity-0 md:opacity-100">お宮参り</h1>
        </div>
      </div>

      <section class="mt-32 pc:mt-88">
        <div class="mx-auto w-343 md:w-736 pc:w-1450">

          <div class="flex items-center flex-col gap-y-4 pc:gap-y-8">
            <h2 class="text-14 pc:text-30 font-zen-maru-gothic half-leading">お宮参り メニュー</h2>
          </div>

          <div class="mt-32 pc:mt-104">
            <div class="flex justify-center gap-x-36 pc:gap-x-124">
              <button class="js-tab-active relative w-62 pc:w-118 group" id="tab1-btn" data-tab="tab1">
                <svg class="w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 184 184">
                  <g>
                    <rect class="fill-light-gray pc:group-hover:fill-pink duration-500" width="184" height="184" />
                    <path class="fill-white" d="M55.55,114.58l32.48-71.73h10.14l32.58,71.73h-10.76l-29-65.99h4.1l-29,65.99h-10.55ZM69.38,96.65l2.77-8.2h40.37l2.97,8.2h-46.11Z" />
                    <path class="fill-white" d="M55.16,153.77c-1.28,0-2.46-.21-3.54-.64-1.08-.42-2.02-1.02-2.81-1.8-.79-.78-1.41-1.68-1.86-2.72-.45-1.04-.67-2.18-.67-3.43s.22-2.39.67-3.43c.45-1.04,1.07-1.95,1.87-2.72.8-.78,1.74-1.38,2.82-1.8,1.08-.42,2.26-.64,3.54-.64s2.49.22,3.59.66c1.1.44,2.03,1.09,2.8,1.96l-1.56,1.51c-.64-.67-1.36-1.17-2.16-1.5-.8-.33-1.66-.49-2.57-.49s-1.82.16-2.63.48c-.81.32-1.51.77-2.1,1.34s-1.05,1.26-1.38,2.05-.49,1.65-.49,2.58.16,1.79.49,2.58.79,1.48,1.38,2.05c.59.58,1.29,1.02,2.1,1.34.81.32,1.68.48,2.63.48s1.77-.16,2.57-.49c.8-.33,1.52-.84,2.16-1.52l1.56,1.51c-.77.86-1.7,1.52-2.8,1.97-1.1.45-2.3.67-3.61.67Z" />
                    <path class="fill-white" d="M74.75,153.77c-1.28,0-2.47-.22-3.56-.65-1.1-.43-2.04-1.04-2.84-1.81-.8-.78-1.42-1.68-1.87-2.72-.45-1.04-.67-2.18-.67-3.41s.22-2.37.67-3.41c.45-1.04,1.07-1.95,1.87-2.72.8-.78,1.74-1.38,2.83-1.81,1.09-.43,2.28-.65,3.58-.65s2.46.21,3.55.64c1.09.42,2.03,1.02,2.83,1.8.8.78,1.42,1.69,1.86,2.74.44,1.05.66,2.19.66,3.42s-.22,2.39-.66,3.43c-.44,1.04-1.06,1.95-1.86,2.72-.8.78-1.74,1.38-2.83,1.8-1.09.42-2.27.64-3.55.64ZM74.72,151.64c.94,0,1.81-.16,2.6-.48.79-.32,1.48-.77,2.06-1.36.58-.58,1.04-1.27,1.37-2.05.33-.78.49-1.64.49-2.57s-.17-1.78-.49-2.56c-.33-.78-.78-1.46-1.37-2.05-.58-.59-1.27-1.05-2.06-1.37-.79-.32-1.66-.48-2.6-.48s-1.79.16-2.58.48c-.79.32-1.48.78-2.08,1.37-.59.59-1.05,1.28-1.38,2.05-.33.78-.49,1.63-.49,2.56s.16,1.78.49,2.57c.33.78.79,1.47,1.38,2.05.59.58,1.28,1.04,2.08,1.36.79.32,1.65.48,2.58.48Z" />
                    <path class="fill-white" d="M89.72,153.58v-16.8h6.55c2.18,0,3.89.52,5.14,1.55s1.87,2.47,1.87,4.31c0,1.22-.28,2.26-.84,3.13-.56.87-1.36,1.54-2.4,2-1.04.46-2.3.7-3.77.7h-5.23l1.08-1.1v6.22h-2.4ZM92.12,147.6l-1.08-1.18h5.16c1.54,0,2.7-.33,3.49-1,.79-.66,1.19-1.6,1.19-2.8s-.4-2.13-1.19-2.78c-.79-.66-1.96-.98-3.49-.98h-5.16l1.08-1.2v9.94ZM100.96,153.58l-4.27-6.1h2.57l4.32,6.1h-2.62Z" />
                    <path class="fill-white" d="M114.47,153.77c-1.28,0-2.5-.2-3.67-.59-1.17-.39-2.09-.9-2.76-1.52l.89-1.87c.64.56,1.46,1.02,2.45,1.39.99.37,2.02.55,3.1.55.98,0,1.77-.11,2.38-.34.61-.22,1.06-.53,1.34-.92.29-.39.43-.84.43-1.33,0-.58-.19-1.04-.56-1.39-.38-.35-.86-.64-1.46-.85-.6-.22-1.26-.4-1.98-.56-.72-.16-1.44-.35-2.17-.56-.73-.22-1.39-.49-1.99-.83-.6-.34-1.08-.79-1.45-1.36-.37-.57-.55-1.3-.55-2.2s.23-1.66.68-2.39c.46-.73,1.16-1.31,2.11-1.75.95-.44,2.16-.66,3.64-.66.98,0,1.94.13,2.9.38.96.26,1.79.62,2.5,1.1l-.79,1.92c-.72-.48-1.48-.83-2.28-1.04-.8-.22-1.58-.32-2.33-.32-.94,0-1.72.12-2.33.36-.61.24-1.05.56-1.33.96-.28.4-.42.85-.42,1.34,0,.59.19,1.06.56,1.42.38.35.86.63,1.46.84.6.21,1.26.4,1.98.56s1.44.36,2.17.56c.73.21,1.39.48,1.99.82.6.34,1.08.78,1.45,1.34s.55,1.28.55,2.16-.23,1.64-.7,2.36c-.46.73-1.18,1.31-2.15,1.75-.97.44-2.19.66-3.66.66Z" />
                    <path class="fill-white" d="M126.87,153.58v-16.8h11.86v2.09h-9.46v12.62h9.79v2.09h-12.19ZM129.06,146.07v-2.04h8.64v2.04h-8.64Z" />
                  </g>
                </svg>
                <span class="js-tab-triangle opacity-0 invisible absolute -bottom-32 left-1/2 -translate-x-1/2 w-0 h-0 border-solid border-x-16 border-x-transparent border-b-28 border-b-pale-pink border-t-0 duration-500"></span>
              </button>
              <button class="relative w-62 pc:w-118 group" id="tab2-btn" data-tab="tab2">
                <svg class="w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 184 184">
                  <g>
                    <rect class="fill-light-gray pc:group-hover:fill-green duration-500" width="184" height="184" />
                    <path class="fill-white" d="M65.13,114.58V42.86h32.17c8.26,0,14.62,1.66,19.06,4.97,4.44,3.31,6.66,7.84,6.66,13.58,0,3.89-.87,7.17-2.61,9.84-1.74,2.66-4.08,4.71-7.02,6.15-2.94,1.43-6.11,2.15-9.53,2.15l1.84-3.07c4.1,0,7.72.72,10.86,2.15,3.14,1.43,5.64,3.54,7.48,6.3,1.84,2.77,2.77,6.2,2.77,10.3,0,6.15-2.3,10.91-6.92,14.29s-11.46,5.07-20.54,5.07h-34.22ZM75.38,106.28h23.57c5.67,0,10.01-.96,13.01-2.87,3.01-1.91,4.51-4.92,4.51-9.02s-1.5-7.21-4.51-9.12c-3.01-1.91-7.34-2.87-13.01-2.87h-24.49v-8.3h21.93c5.19,0,9.22-.96,12.09-2.87,2.87-1.91,4.3-4.78,4.3-8.61s-1.43-6.69-4.3-8.61c-2.87-1.91-6.9-2.87-12.09-2.87h-21.01v55.13Z" />
                    <path class="fill-white" d="M55.16,153.77c-1.28,0-2.46-.21-3.54-.64-1.08-.42-2.02-1.02-2.81-1.8-.79-.78-1.41-1.68-1.86-2.72-.45-1.04-.67-2.18-.67-3.43s.22-2.39.67-3.43c.45-1.04,1.07-1.95,1.87-2.72.8-.78,1.74-1.38,2.82-1.8,1.08-.42,2.26-.64,3.54-.64s2.49.22,3.59.66c1.1.44,2.03,1.09,2.8,1.96l-1.56,1.51c-.64-.67-1.36-1.17-2.16-1.5-.8-.33-1.66-.49-2.57-.49s-1.82.16-2.63.48c-.81.32-1.51.77-2.1,1.34s-1.05,1.26-1.38,2.05-.49,1.65-.49,2.58.16,1.79.49,2.58.79,1.48,1.38,2.05c.59.58,1.29,1.02,2.1,1.34.81.32,1.68.48,2.63.48s1.77-.16,2.57-.49c.8-.33,1.52-.84,2.16-1.52l1.56,1.51c-.77.86-1.7,1.52-2.8,1.97-1.1.45-2.3.67-3.61.67Z" />
                    <path class="fill-white" d="M74.75,153.77c-1.28,0-2.47-.22-3.56-.65-1.1-.43-2.04-1.04-2.84-1.81-.8-.78-1.42-1.68-1.87-2.72-.45-1.04-.67-2.18-.67-3.41s.22-2.37.67-3.41c.45-1.04,1.07-1.95,1.87-2.72.8-.78,1.74-1.38,2.83-1.81,1.09-.43,2.28-.65,3.58-.65s2.46.21,3.55.64c1.09.42,2.03,1.02,2.83,1.8.8.78,1.42,1.69,1.86,2.74.44,1.05.66,2.19.66,3.42s-.22,2.39-.66,3.43c-.44,1.04-1.06,1.95-1.86,2.72-.8.78-1.74,1.38-2.83,1.8-1.09.42-2.27.64-3.55.64ZM74.72,151.64c.94,0,1.81-.16,2.6-.48.79-.32,1.48-.77,2.06-1.36.58-.58,1.04-1.27,1.37-2.05.33-.78.49-1.64.49-2.57s-.17-1.78-.49-2.56c-.33-.78-.78-1.46-1.37-2.05-.58-.59-1.27-1.05-2.06-1.37-.79-.32-1.66-.48-2.6-.48s-1.79.16-2.58.48c-.79.32-1.48.78-2.08,1.37-.59.59-1.05,1.28-1.38,2.05-.33.78-.49,1.63-.49,2.56s.16,1.78.49,2.57c.33.78.79,1.47,1.38,2.05.59.58,1.28,1.04,2.08,1.36.79.32,1.65.48,2.58.48Z" />
                    <path class="fill-white" d="M89.72,153.58v-16.8h6.55c2.18,0,3.89.52,5.14,1.55s1.87,2.47,1.87,4.31c0,1.22-.28,2.26-.84,3.13-.56.87-1.36,1.54-2.4,2-1.04.46-2.3.7-3.77.7h-5.23l1.08-1.1v6.22h-2.4ZM92.12,147.6l-1.08-1.18h5.16c1.54,0,2.7-.33,3.49-1,.79-.66,1.19-1.6,1.19-2.8s-.4-2.13-1.19-2.78c-.79-.66-1.96-.98-3.49-.98h-5.16l1.08-1.2v9.94ZM100.96,153.58l-4.27-6.1h2.57l4.32,6.1h-2.62Z" />
                    <path class="fill-white" d="M114.47,153.77c-1.28,0-2.5-.2-3.67-.59-1.17-.39-2.09-.9-2.76-1.52l.89-1.87c.64.56,1.46,1.02,2.45,1.39.99.37,2.02.55,3.1.55.98,0,1.77-.11,2.38-.34.61-.22,1.06-.53,1.34-.92.29-.39.43-.84.43-1.33,0-.58-.19-1.04-.56-1.39-.38-.35-.86-.64-1.46-.85-.6-.22-1.26-.4-1.98-.56-.72-.16-1.44-.35-2.17-.56-.73-.22-1.39-.49-1.99-.83-.6-.34-1.08-.79-1.45-1.36-.37-.57-.55-1.3-.55-2.2s.23-1.66.68-2.39c.46-.73,1.16-1.31,2.11-1.75.95-.44,2.16-.66,3.64-.66.98,0,1.94.13,2.9.38.96.26,1.79.62,2.5,1.1l-.79,1.92c-.72-.48-1.48-.83-2.28-1.04-.8-.22-1.58-.32-2.33-.32-.94,0-1.72.12-2.33.36-.61.24-1.05.56-1.33.96-.28.4-.42.85-.42,1.34,0,.59.19,1.06.56,1.42.38.35.86.63,1.46.84.6.21,1.26.4,1.98.56s1.44.36,2.17.56c.73.21,1.39.48,1.99.82.6.34,1.08.78,1.45,1.34s.55,1.28.55,2.16-.23,1.64-.7,2.36c-.46.73-1.18,1.31-2.15,1.75-.97.44-2.19.66-3.66.66Z" />
                    <path class="fill-white" d="M126.87,153.58v-16.8h11.86v2.09h-9.46v12.62h9.79v2.09h-12.19ZM129.06,146.07v-2.04h8.64v2.04h-8.64Z" />
                  </g>
                </svg>
                <span class="js-tab-triangle opacity-0 invisible absolute -bottom-32 left-1/2 -translate-x-1/2 w-0 h-0 border-solid border-x-16 border-x-transparent border-b-28 border-b-pale-green border-t-0 duration-500"></span>
              </button>
            </div>
            <div class="mt-14 pc:mt-28">
              <div id="tab1" class="tab-cont bg-pale-pink pt-36 pc:pt-64 px-16 pc:px-72 pb-40 overflow-hidden">

                <div class="relative opacity-100 visible h-auto transition-opacity duration-300 flex flex-col items-center gap-24 pc:gap-32">
                  <!-- <div id="tab4" class="tab-cont relative opacity-0 invisible h-0 transition-opacity duration-300 flex flex-col items-center gap-24 pc:gap-32"> -->
                  <div class="flex justify-center items-center flex-wrap pc:flex-nowrap gap-y-12">

                    <div>
                      <div class="flex items-center gap-x-12 pc:gap-x-24">
                        <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                          <span class="text-8 pc:text-16 leading-none half-leading">平日</span>
                        </div>
                        <span class="text-17 pc:text-33 leading-none half-leading">¥18,700</span>
                      </div>
                    </div>

                    <div class="ml-38 pc:ml-64">
                      <div class="flex items-center gap-x-12 pc:gap-x-24">
                        <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                          <span class="text-8 pc:text-16 leading-none half-leading">土日祝</span>
                        </div>
                        <span class="text-17 pc:text-33 leading-none half-leading">¥24,200</span>
                      </div>
                    </div>
                    <div class="ml-0 md:ml-80 w-full md:w-auto">
                      <p class="text-10 pc:text-25 text-center md:text-left">所要時間：1時間</p>
                    </div>
                  </div>
                  <div class="flex flex-col items-center gap-y-24">
                    <div class="md:w-568">
                      <img src="/wp-content/themes/studio-tanak_theme/src/images/legacy-old/omiyamairi/omiya_01_2.webp" alt="" class="w-full" width="590" height="242">
                    </div>
                    <div class="md:w-568">
                      <img src="/wp-content/themes/studio-tanak_theme/src/images/legacy-old/omiyamairi/omiya_03_3.webp" alt="" class="w-full" width="590" height="200">
                    </div>
                  </div>
                  <div class="w-full h-px bg-black"></div>

                  <div class="w-full pc:w-auto">
                    <div class="flex justify-center flex-wrap pc:flex-nowrap gap-x-16 md:gap-x-20 pc:gap-x-80 gap-y-24">
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-88 pc:w-136">
                            <img src="/wp-content/themes/studio-tanak_theme/src/images/legacy-old/common/dataordaishi.svg" alt="" class="w-full" width="213" height="122">
                          </div>
                        </div>
                        <div class="flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            カメラマンセレクト<br>20カット<br>
                            もしくは<br>
                            六つ切台紙1カット
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-56 pc:w-82">
                            <img src="/wp-content/themes/studio-tanak_theme/src/images/legacy-old/common/baby.svg" alt="" class="w-full" width="132" height="100">
                          </div>
                        </div>
                        <div class="flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            赤ちゃん撮影
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-64 pc:w-90">
                            <img src="/wp-content/themes/studio-tanak_theme/src/images/legacy-old/common/family_on.svg" alt="" class="w-full" width="144" height="140">
                          </div>
                        </div>
                        <div class="flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            家族写真撮影<br>
                            （4名様まで）
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-48 pc:w-72">
                            <img src="/wp-content/themes/studio-tanak_theme/src/images/legacy-old/common/isyou01.svg" alt="" class="w-full" width="107" height="109">
                          </div>
                        </div>
                        <div class="flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            衣装　1着
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="mt-24 pc:mt-32">
                      <p class="text-10 pc:text-16 -indent-[1em] pl-[1em] half-leading">※お渡しデータは色調整・トリミング付き</p>
                    </div>
                  </div>



                </div>

              </div>
              <div id="tab2" class="tab-cont hidden bg-pale-green pt-36 pc:pt-64 px-16 pc:px-72 pb-40 overflow-hidden">

                <div class="relative opacity-100 visible h-auto transition-opacity duration-300 flex flex-col items-center gap-24 pc:gap-32">
                  <!-- <div id="tab4" class="tab-cont relative opacity-0 invisible h-0 transition-opacity duration-300 flex flex-col items-center gap-24 pc:gap-32"> -->
                  <div class="flex justify-center items-center flex-wrap pc:flex-nowrap gap-y-12">

                    <div>
                      <div class="flex items-center gap-x-12 pc:gap-x-24">
                        <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                          <span class="text-8 pc:text-16 leading-none half-leading">平日</span>
                        </div>
                        <span class="text-17 pc:text-33 leading-none half-leading">¥27,500</span>
                      </div>
                    </div>

                    <div class="ml-38 pc:ml-64">
                      <div class="flex items-center gap-x-12 pc:gap-x-24">
                        <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                          <span class="text-8 pc:text-16 leading-none half-leading">土日祝</span>
                        </div>
                        <span class="text-17 pc:text-33 leading-none half-leading">¥33,000</span>
                      </div>
                    </div>
                    <div class="ml-0 md:ml-80 w-full md:w-auto">
                      <p class="text-10 pc:text-25 text-center md:text-left">所要時間：1時間</p>
                    </div>
                  </div>
                  <div class="flex flex-col items-center gap-y-24">
                    <div class="md:w-568">
                      <img src="/wp-content/themes/studio-tanak_theme/src/images/legacy-old/omiyamairi/omiya_02_2.webp" alt="" class="w-full" width="590" height="242">
                    </div>
                    <div class="md:w-568">
                      <img src="/wp-content/themes/studio-tanak_theme/src/images/legacy-old/omiyamairi/omiya_03_3.webp" alt="" class="w-full" width="590" height="200">
                    </div>
                  </div>
                  <div class="w-full h-px bg-black"></div>

                  <div class="w-full pc:w-auto">
                    <div class="flex justify-center flex-wrap pc:flex-nowrap gap-x-16 md:gap-x-20 pc:gap-x-80 gap-y-24">
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-88 pc:w-136">
                            <img src="/wp-content/themes/studio-tanak_theme/src/images/legacy-old/common/dataordaishi.svg" alt="" class="w-full" width="213" height="122">
                          </div>
                        </div>
                        <div class="flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            カメラマンセレクト<br>20カット<br>
                            もしくは<br>
                            台紙1カット
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-56 pc:w-82">
                            <img src="/wp-content/themes/studio-tanak_theme/src/images/legacy-old/common/baby.svg" alt="" class="w-full" width="132" height="100">
                          </div>
                        </div>
                        <div class="flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            赤ちゃん撮影
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-64 pc:w-90">
                            <img src="/wp-content/themes/studio-tanak_theme/src/images/legacy-old/common/family_on.svg" alt="" class="w-full" width="144" height="140">
                          </div>
                        </div>
                        <div class="flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            家族写真撮影<br>
                            （4名様まで）
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-80 pc:w-112">
                            <img src="/wp-content/themes/studio-tanak_theme/src/images/legacy-old/common/family5.svg" alt="" class="w-full" width="74" height="47">
                          </div>
                        </div>
                        <div class="h-24 pc:h-56 flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            集合写真撮影<br>
                            （5名様以上）
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-48 pc:w-72">
                            <img src="/wp-content/themes/studio-tanak_theme/src/images/legacy-old/common/isyou01.svg" alt="" class="w-full" width="107" height="109">
                          </div>
                        </div>
                        <div class="h-24 pc:h-56 flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            衣装　1着
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="mt-24 pc:mt-32">
                      <p class="text-10 pc:text-16 -indent-[1em] pl-[1em] half-leading">※お渡しデータは色調整・トリミング付き</p>
                    </div>
                  </div>



                </div>

              </div>
            </div>
          </div>

          <div class="mt-32 pc:mt-64">
            <div class="mx-auto md:w-400 pc:w-full border border-border">
              <div class="bg-[#B0B0B0] h-35 pc:h-60 flex justify-center items-center">
                <h3 class="text-12 pc:text-20 text-white">
                  オプション料金
                </h3>
              </div>
              <div class="bg-white pt-16 pc:pt-24 pb-20 pc:pb-40 px-24 md:px-40 pc:px-160">
                <ul class="flex flex-col pc:h-124 flex-wrap gap-x-80">
                  <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                    <span class="text-12 pc:text-20 leading-[1.3]">
                      外出衣装貸出し
                    </span>
                    <span class="text-12 pc:text-20">
                      ¥9,900
                    </span>
                  </li>
                  <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                    <span class="text-12 pc:text-20 leading-[1.3]">
                      家族写真撮影時5名様以上の撮影料
                    </span>
                    <span class="text-12 pc:text-20">
                      ¥3,300
                    </span>
                  </li>
                  <li class="w-full pc:w-1/2 py-8 flex flex-col gap-y-16">
                    <span class="text-12 pc:text-20 leading-[1.3]">
                      ご家族衣装レンタル等ご相談ください
                    </span>
                    <!-- <button class="js-modal-trigger relative w-120 h-24 bg-[#464646] rounded-full flex justify-center items-center" data-modal-html="<strong>モーダル1</strong>の詳細コンテンツ"> -->
                    <button class="js-modal-trigger ml-auto relative w-120 h-24 bg-[#464646] rounded-full flex justify-center items-center" data-modal-target="modal_1">
                      <span class="text-10 text-white leading-none">
                        オプション詳細
                      </span>
                      <div class="absolute top-1/2 right-10 -translate-y-1/2">
                        <div class="w-6">
                          <img class="w-full" src="/wp-content/themes/studio-tanak_theme/src/images/legacy-old/common/chevron-right-white-double.svg" alt="" loading="lazy" width="6" height="7">
                        </div>
                      </div>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
          </div>

      </section>

    </main>

    <?php get_template_part('inc', 'side-banner'); ?>
    <?php get_template_part('inc', 'footer'); ?>
    <?php get_template_part('inc', 'sp-menu'); ?>
    <div id="modal_1" class="js-modal opacity-0 invisible fixed z-[200] left-0 top-0 w-full h-full overflow-auto bg-black bg-opacity-40 transition-opacity duration-300 js-modal">
      <!-- <div id="modal" class="fixed z-[200] left-0 top-0 w-full h-full overflow-auto bg-black bg-opacity-40 transition-opacity duration-300 js-modal"> -->
      <div class="absolute top-1/2 left-[calc(50%_+_(100vw_-_100%)_/_2)] transform -translate-x-1/2 -translate-y-1/2 max-w-1200 w-[96%] pc:w-[80%]">
        <div class="relative border border-black bg-white pt-48 px-20 pb-32 pc:p-70">
          <div class="absolute top-16 right-16 text-20 pc:text-40 leading-none hover:cursor-pointer js-modal-close">×</div>
          <div id="modal-content" class="max-h-[calc(100dvh_-_160rem)] overflow-y-auto">
            <!-- モーダルの内容がここに動的に挿入されます -->
            <div class="mx-auto md:w-400 pc:w-full border border-border">
              <div class="bg-[#B0B0B0] h-35 pc:h-60 flex justify-center items-center">
                <h3 class="text-12 pc:text-20 text-white">
                  レンタル・美容オプション
                </h3>
              </div>
              <div class="bg-white pt-16 pc:pt-24 pb-20 pc:pb-40 px-24 md:px-40 pc:px-160">
                <ul class="flex flex-col pc:h-184 flex-wrap gap-x-80">
                  <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                    <span class="text-12 pc:text-20 leading-[1.3]">
                      兄弟洋衣装レンタル
                    </span>
                    <span class="text-12 pc:text-20">
                      ¥3,300
                    </span>
                  </li>
                  <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                    <span class="text-12 pc:text-20 leading-[1.3]">
                      着物レンタル（母）
                    </span>
                    <span class="text-12 pc:text-20">
                      ¥7,700
                    </span>
                  </li>
                  <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                    <span class="text-12 pc:text-20 leading-[1.3]">
                      着物レンタル（父）
                    </span>
                    <span class="text-12 pc:text-20">
                      ¥6,600
                    </span>
                  </li>
                  <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                    <span class="text-12 pc:text-20 leading-[1.3]">
                      ブロー
                    </span>
                    <span class="text-12 pc:text-20">
                      ¥2,200
                    </span>
                  </li>
                  <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                    <span class="text-12 pc:text-20 leading-[1.3]">
                      アレンジ
                    </span>
                    <span class="text-12 pc:text-20">
                      ¥3,300
                    </span>
                  </li>
                  <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                    <span class="text-12 pc:text-20 leading-[1.3]">
                      ヘア（アップ）
                    </span>
                    <span class="text-12 pc:text-20">
                      ¥5,500
                    </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- l-wrap -->

  <script src="/wp-content/themes/studio-tanaka_theme/assets/js/common.js">
  </script>
  <script>
    const tabButtons = document.querySelectorAll('[data-tab]');
    const tabContents = document.querySelectorAll('.tab-cont');

    // タブボタンのクリックイベントを登録
    tabButtons.forEach(button => {
      button.addEventListener('click', (event) => {
        event.preventDefault(); // 不要なページ遷移を防ぐ

        // すべてのボタンから 'js-tab-active' クラスを削除
        tabButtons.forEach(btn => btn.classList.remove('js-tab-active'));

        // クリックされたボタンに 'js-tab-active' クラスを追加
        button.classList.add('js-tab-active');

        // すべてのタブコンテンツを非表示
        tabContents.forEach(content => {
          content.style.display = "none";
        });

        // クリックされたタブに対応するコンテンツを表示
        const tabId = button.getAttribute('data-tab');
        const targetTab = document.getElementById(tabId);
        if (targetTab) {
          targetTab.style.display = "block";
        }
      });
    });
  </script>
  <script>
    function getScrollbarWidth() {
      // ページにスクロールバーがあるかを確認
      const hasScrollbar = document.body.scrollHeight > window.innerHeight;

      // 一時的なdiv要素を作成
      const div = document.createElement("div");
      // スクロールバーを強制的に表示する
      div.style.overflow = "scroll";
      // divをbodyに追加
      document.body.appendChild(div);

      // スクロールバーの幅を計算
      const scrollbarWidth = div.offsetWidth - div.clientWidth;

      // 計算用のdivを削除
      div.remove();

      // スクロールバーがない場合の処理
      if (!hasScrollbar) {
        console.log("ページにスクロールバーはありません。");
        return 0; // スクロールバーの幅として0を返す
      } else {
        // スクロールバーの幅をコンソールに出力
        console.log("スクロール幅：", scrollbarWidth);
      }

      // スクロールバーの幅を返す
      return scrollbarWidth;
    }

    // 共通要素（bodyとheader）の取得
    let html = document.querySelector("html");
    let header = document.querySelector("header");

    // スクロールバーの幅を取得
    let scrollbarWidth = getScrollbarWidth();

    // リサイズ前の画面幅を保持
    let oldWidth = window.innerWidth;

    // 画面幅がリサイズされた場合の処理を定義
    window.onresize = function() {
      // 画面幅が変更されたかをチェック
      if (window.innerWidth !== oldWidth) {
        oldWidth = window.innerWidth;
        // 新しいスクロールバーの幅を取得
        scrollbarWidth = getScrollbarWidth();
      }
    };

    // モーダルの表示・非表示を切り替える共通関数
    function toggleModal(modalElement, isVisible) {
      // モーダルを表示する場合
      if (isVisible) {
        // モーダル要素にクラスを追加して表示
        // modalElement.classList.add('is-visible');
        modalElement.classList.remove('opacity-0', 'invisible', '-z-10');
        modalElement.classList.add('opacity-100', 'visible', 'z-200');
        // bodyにクラスを追加
        document.body.classList.add("is-modal-opened");
        // スクロールバーの幅を取得
        const scrollbarWidth = getScrollbarWidth();

        // スクロールバーの幅が0ではない場合（スクロールバーが存在する場合）
        if (scrollbarWidth !== 0) {
          // htmlとheaderにマージンとパディングを設定してスクロールバーの幅を補償
          html.style.marginRight = scrollbarWidth + "px";
          header.style.paddingRight = scrollbarWidth + "px";
          html.style.overflow = "hidden"; // 本文のスクロールを無効化
        }
      } else {
        // モーダルを非表示にする場合
        // モーダル要素からクラスを削除
        // modalElement.classList.remove('is-visible');
        modalElement.classList.remove('opacity-100', 'visible', 'z-200');
        modalElement.classList.add('opacity-0');
        setTimeout(() => {
          modalElement.classList.add('invisible', '-z-10');
        }, 300); // 300msの遅延は、opacityトランジションの持続時間と一致させる


        // bodyからクラスを削除
        document.body.classList.remove("is-modal-opened");
        // bodyとheaderのスタイルをリセット
        html.style.marginRight = "";
        header.style.paddingRight = "";
        // bodyのスクロールを有効化
        html.style.overflow = ""; // 本文のスクロールを元に戻す

        // モーダル内のdiv要素のスタイルをリセット
        if (scrollbarWidth !== 0) {
          modalElement.querySelector("div").style.left = "calc(50% + " + (scrollbarWidth / 2) + "px)";
        }
        setTimeout(function() {
          modalElement.querySelector("div").style.top = "";
          modalElement.querySelector("div").style.paddingBottom = "";
          modalElement.querySelector("div").style.left = "";
          modalElement.querySelector("div").style.transform = "";
        }, 500);
      }
    }

    // ボタンがクリックされたときの処理
    function onButtonClick(event) {
      // クリックされた要素（ボタン）を取得
      let clickedButton = event.currentTarget;
      // クリックされたボタンのdata-modal-target属性からモーダルIDを取得
      let modalId = clickedButton.getAttribute("data-modal-target");
      // 対応するモーダル要素をIDを使用して取得
      let modal = document.getElementById(modalId);

      // モーダルを表示する関数を呼び出し
      toggleModal(modal, true);

      // モーダル内の要素の高さに応じてスタイルを調整
      let modalContent = modal.querySelector("div");
      // モーダルのコンテンツの高さがモーダルの高さより小さい場合
      if (modalContent.offsetHeight < modal.offsetHeight) {
        // モーダルのコンテンツを中央に配置
        modalContent.style.top = "50%";
        // modalContent.style.transform = "translate(-50%,-50%)";
      } else {
        // モーダルのコンテンツを上部に配置
        modalContent.style.top = "30px";
        modalContent.style.paddingBottom = "30px";
        // modalContent.style.transform = "translateX(-50%)";
      }
    }

    // 閉じるボタンをクリックしたときの処理
    function onCloseButtonClick(event) {
      // クリックされた要素（閉じるボタン）を取得
      let closeButton = event.currentTarget;
      // クリックされたボタンが属するモーダル要素を取得
      let modal = closeButton.closest(".js-modal");

      // モーダルを非表示にする関数を呼び出し
      toggleModal(modal, false);
    }


    // すべてのモーダルを開くボタンにイベントリスナーを設定
    document.querySelectorAll(".js-modal-trigger").forEach(button => {
      button.addEventListener("click", onButtonClick);
    });

    // すべてのモーダルを閉じるボタンにイベントリスナーを設定
    document.querySelectorAll(".js-modal-close").forEach(button => {
      button.addEventListener("click", onCloseButtonClick);
    });


    // モーダルをクリックしたときの処理
    document.querySelectorAll('.js-modal').forEach(modal => {
      modal.addEventListener('click', (event) => {
        if (event.target === modal) {
          toggleModal(modal, false);
        }
      });
    });
  </script>
  <?php wp_footer(); ?>
</body>

</html>