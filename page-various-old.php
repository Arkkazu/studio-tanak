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
          <source media='(min-width: 768px)' srcset='/wp-content/themes/studio-tanaka_theme/assets/media/images/various/otherimg_pc.webp'>
          <img class='w-full' src='/wp-content/themes/studio-tanaka_theme/assets/media/images/various/otherimg_sp.webp' alt='各種撮影' loading='lazy' width='1125' height='1130'>
        </picture>
        <div class="absolute left-0 md:left-160 pc:left-450 top-1/2 -translate-y-1/2">
          <h1 class="text-20 pc:text-30 font-zenMaruGothic opacity-0 md:opacity-100">各種撮影</h1>
        </div>
      </div>

      <section class="mt-32 pc:mt-88 scroll-mt-70 pc:scroll-mt-160" id="link-01">
        <div class="mx-auto w-343 md:w-736 pc:w-1450">

          <div class="flex items-center flex-col gap-y-4 pc:gap-y-8">
            <h2 class="text-14 pc:text-30 font-zenMaruGothic half-leading">記念撮影</h2>
          </div>

          <div class="mt-40 pc:mt-80">

            <div class="bg-pale-gray pt-36 pc:pt-64 px-16 pc:px-72 pb-40 overflow-hidden">

              <div class="relative opacity-100 visible h-auto transition-opacity duration-300 flex flex-col items-center gap-24 pc:gap-32">
                <!-- <div id="tab4" class="tab-cont relative opacity-0 invisible h-0 transition-opacity duration-300 flex flex-col items-center gap-24 pc:gap-32"> -->
                <div class="flex justify-center items-center flex-wrap pc:flex-nowrap gap-y-12">

                  <div>
                    <div class="flex items-center gap-x-12 pc:gap-x-24">
                      <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                        <span class="text-8 pc:text-16 leading-none half-leading">平日</span>
                      </div>
                      <span class="text-17 pc:text-33 leading-none half-leading">¥9,900</span>
                    </div>
                  </div>

                  <div class="ml-38 pc:ml-64">
                    <div class="flex items-center gap-x-12 pc:gap-x-24">
                      <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                        <span class="text-8 pc:text-16 leading-none half-leading">土日祝</span>
                      </div>
                      <span class="text-17 pc:text-33 leading-none half-leading">¥15,400</span>
                    </div>
                  </div>
                  <div class="ml-0 md:ml-80 w-full md:w-auto">
                    <p class="text-10 pc:text-25 text-center md:text-left">所要時間：1時間</p>
                  </div>
                </div>
                <div class="flex justify-center">
                  <div class="md:w-568">
                    <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/various/various-001.svg" alt="" class="w-full" width="295" height="54">
                  </div>
                </div>
                <div class="w-full h-px bg-black"></div>

                <div class="w-full pc:w-auto">
                  <div class="flex justify-center flex-wrap pc:flex-nowrap gap-x-16 md:gap-x-20 pc:gap-x-80 gap-y-24">
                    <div class="flex items-center flex-col gap-8">
                      <div class="h-62 pc:h-90 flex justify-center items-center">
                        <div class="w-88 pc:w-136">
                          <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/dataordaishi.svg" alt="" class="w-full" width="213" height="122">
                        </div>
                      </div>
                      <div class="h-32 pc:h-56 flex justify-center items-center">
                        <span class="text-8 pc:text-16 text-center leading-[1.3]">
                          カメラマンセレクト10カット<br>
                          もしくは<br>
                          六つ切台紙1カット
                        </span>
                      </div>
                    </div>
                    <div class="flex items-center flex-col gap-8">
                      <div class="h-62 pc:h-90 flex justify-center items-center">
                        <div class="w-64 pc:w-90">
                          <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/family_on.svg" alt="" class="w-full" width="144" height="140">
                        </div>
                      </div>
                      <div class="flex justify-center items-center">
                        <span class="text-8 pc:text-16 text-center leading-[1.3]">
                          家族写真撮影<br>
                          4名様まで
                        </span>
                      </div>
                    </div>
                    <div class="flex items-center flex-col gap-8">
                      <div class="h-62 pc:h-90 flex justify-center items-center">
                        <div class="w-56 pc:w-82">
                          <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/satuei.svg" alt="" class="w-full" width="132" height="100">
                        </div>
                      </div>
                      <div class="h-32 pc:h-56 flex justify-center items-center">
                        <span class="text-8 pc:text-16 text-center leading-[1.3]">
                          撮影
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="mt-24 pc:mt-32">
                    <p class="text-8 pc:text-16 -indent-[1em] pl-[1em] half-leading">※お渡しデータは色調整・トリミング付き</p>
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
                <ul class="flex flex-col flex-wrap gap-x-80">
                  <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                    <span class="text-12 pc:text-20 leading-[1.3]">
                      家族写真撮影 5名様以上で
                    </span>
                    <span class="text-12 pc:text-20">
                      +¥3,300
                    </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

      </section>

      <section class="mt-32 pc:mt-88 scroll-mt-70 pc:scroll-mt-160" id="link-02">
        <div class="mx-auto w-343 md:w-736 pc:w-1450">

          <div class="flex items-center flex-col gap-y-4 pc:gap-y-8">
            <h2 class="text-14 pc:text-30 font-zenMaruGothic half-leading">
              家族撮影
            </h2>
          </div>

          <div class="mt-40 pc:mt-80">

            <div class="bg-pale-gray pt-36 pc:pt-64 px-16 pc:px-72 pb-40 overflow-hidden">

              <div class="relative opacity-100 visible h-auto transition-opacity duration-300 flex flex-col items-center gap-24 pc:gap-32">
                <!-- <div id="tab4" class="tab-cont relative opacity-0 invisible h-0 transition-opacity duration-300 flex flex-col items-center gap-24 pc:gap-32"> -->
                <div class="flex justify-center items-center flex-wrap pc:flex-nowrap gap-y-12">

                  <div>
                    <div class="flex items-center gap-x-12 pc:gap-x-24">
                      <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                        <span class="text-8 pc:text-16 leading-none half-leading">平日</span>
                      </div>
                      <span class="text-17 pc:text-33 leading-none half-leading">¥9,900</span>
                    </div>
                  </div>

                  <div class="ml-38 pc:ml-64">
                    <div class="flex items-center gap-x-12 pc:gap-x-24">
                      <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                        <span class="text-8 pc:text-16 leading-none half-leading">土日祝</span>
                      </div>
                      <span class="text-17 pc:text-33 leading-none half-leading">¥15,400</span>
                    </div>
                  </div>
                  <div class="ml-0 md:ml-80 w-full md:w-auto">
                    <p class="text-10 pc:text-25 text-center md:text-left">所要時間：1時間</p>
                  </div>
                </div>
                <div class="flex justify-center">
                  <div class="md:w-568">
                    <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/various/various-001.svg" alt="" class="w-full" width="295" height="54">
                  </div>
                </div>
                <div class="w-full h-px bg-black"></div>

                <div class="w-full pc:w-auto">
                  <div class="flex justify-center flex-wrap pc:flex-nowrap gap-x-16 md:gap-x-20 pc:gap-x-80 gap-y-24">
                    <div class="flex items-center flex-col gap-8">
                      <div class="h-62 pc:h-90 flex justify-center items-center">
                        <div class="w-88 pc:w-136">
                          <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/dataordaishi.svg" alt="" class="w-full" width="213" height="122">
                        </div>
                      </div>
                      <div class="h-32 pc:h-56 flex justify-center items-center">
                        <span class="text-8 pc:text-16 text-center leading-[1.3]">
                          カメラマンセレクト10カット<br>
                          もしくは<br>
                          六つ切台紙1カット
                        </span>
                      </div>
                    </div>
                    <div class="flex items-center flex-col gap-8">
                      <div class="h-62 pc:h-90 flex justify-center items-center">
                        <div class="w-64 pc:w-90">
                          <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/family_on.svg" alt="" class="w-full" width="144" height="140">
                        </div>
                      </div>
                      <div class="flex justify-center items-center">
                        <span class="text-8 pc:text-16 text-center leading-[1.3]">
                          家族写真撮影<br>
                          4名様まで
                        </span>
                      </div>
                    </div>
                    <div class="flex items-center flex-col gap-8">
                      <div class="h-62 pc:h-90 flex justify-center items-center">
                        <div class="w-56 pc:w-82">
                          <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/satuei.svg" alt="" class="w-full" width="132" height="100">
                        </div>
                      </div>
                      <div class="h-32 pc:h-56 flex justify-center items-center">
                        <span class="text-8 pc:text-16 text-center leading-[1.3]">
                          撮影
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="mt-24 pc:mt-32">
                    <p class="text-8 pc:text-16 -indent-[1em] pl-[1em] half-leading">※お渡しデータは色調整・トリミング付き</p>
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
                <ul class="flex flex-col flex-wrap gap-x-80">
                  <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                    <span class="text-12 pc:text-20 leading-[1.3]">
                      家族写真撮影 5名様以上で
                    </span>
                    <span class="text-12 pc:text-20">
                      +¥3,300
                    </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

      </section>

      <section class="mt-32 pc:mt-88 scroll-mt-70 pc:scroll-mt-160" id="link-03">
        <div class="mx-auto w-343 md:w-736 pc:w-1450">

          <div class="flex items-center flex-col gap-y-4 pc:gap-y-8">
            <h2 class="text-14 pc:text-30 font-zenMaruGothic half-leading">
              遺影撮影
            </h2>
          </div>

          <div class="mt-40 pc:mt-80">

            <div class="bg-pale-gray pt-36 pc:pt-64 px-16 pc:px-72 pb-40 overflow-hidden">

              <div class="relative opacity-100 visible h-auto transition-opacity duration-300 flex flex-col items-center gap-24 pc:gap-32">
                <!-- <div id="tab4" class="tab-cont relative opacity-0 invisible h-0 transition-opacity duration-300 flex flex-col items-center gap-24 pc:gap-32"> -->
                <div class="flex justify-center items-center flex-wrap pc:flex-nowrap gap-y-12">

                  <div>
                    <div class="flex items-center gap-x-12 pc:gap-x-24">
                      <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                        <span class="text-8 pc:text-16 leading-none half-leading">平日</span>
                      </div>
                      <span class="text-17 pc:text-33 leading-none half-leading">¥11,000</span>
                    </div>
                  </div>

                  <div class="ml-38 pc:ml-64">
                    <div class="flex items-center gap-x-12 pc:gap-x-24">
                      <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                        <span class="text-8 pc:text-16 leading-none half-leading">土日祝</span>
                      </div>
                      <span class="text-17 pc:text-33 leading-none half-leading">¥16,500</span>
                    </div>
                  </div>
                  <div class="ml-0 md:ml-80 w-full md:w-auto">
                    <p class="text-10 pc:text-25 text-center md:text-left">所要時間：30分</p>
                  </div>
                </div>
                <div class="flex justify-center">
                  <div class="md:w-568">
                    <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/various/various-002.svg" alt="" class="w-full" width="295" height="54">
                  </div>
                </div>
                <div class="w-full h-px bg-black"></div>

                <div class="w-full pc:w-auto">
                  <div class="flex justify-center flex-wrap pc:flex-nowrap gap-x-16 md:gap-x-20 pc:gap-x-80 gap-y-24">

                    <div class="flex items-center flex-col gap-8">
                      <div class="h-62 pc:h-90 flex justify-center items-center">
                        <div class="w-56 pc:w-82">
                          <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/satuei.svg" alt="" class="w-full" width="132" height="100">
                        </div>
                      </div>
                      <div class="h-32 pc:h-56 flex justify-center items-center">
                        <span class="text-8 pc:text-16 text-center leading-[1.3]">
                          撮影
                        </span>
                      </div>
                    </div>
                    <div class="flex items-center flex-col gap-8">
                      <div class="h-62 pc:h-90 flex justify-center items-center">
                        <div class="w-48 pc:w-65">
                          <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/daishi.svg" alt="" class="w-full" width="65" height="78">
                        </div>
                      </div>
                      <div class="flex justify-center items-center">
                        <span class="text-8 pc:text-16 text-center leading-[1.3]">
                          額縁入り<br>4つ切写真
                        </span>
                      </div>
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
                <ul class="flex flex-col flex-wrap gap-x-80">
                  <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                    <span class="text-12 pc:text-20 leading-[1.3]">
                      セレクトデータ1カット（レタッチ込み）
                    </span>
                    <span class="text-12 pc:text-20">
                      +¥3,300
                    </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

      </section>

      <section class="mt-32 pc:mt-88 scroll-mt-70 pc:scroll-mt-160" id="link-04">
        <div class="mx-auto w-343 md:w-736 pc:w-1450">

          <div class="flex items-center flex-col gap-y-4 pc:gap-y-8">
            <h2 class="text-14 pc:text-30 font-zenMaruGothic half-leading">証明写真</h2>
          </div>

          <div class="mt-40 pc:mt-80">

            <div class="bg-pale-gray pt-36 pc:pt-64 px-16 pc:px-72 pb-40 overflow-hidden">

              <div class="relative opacity-100 visible h-auto transition-opacity duration-300 flex flex-col items-center gap-24 pc:gap-32">
                <!-- <div id="tab4" class="tab-cont relative opacity-0 invisible h-0 transition-opacity duration-300 flex flex-col items-center gap-24 pc:gap-32"> -->
                <div class="flex justify-center items-center flex-wrap pc:flex-nowrap gap-y-12">
                  <div class="w-full md:w-auto">
                    <p class="text-10 pc:text-25 text-center md:text-left">所要時間：15分</p>
                  </div>
                </div>
              </div>

              <div class="mt-32">
                <div class="mx-auto md:w-400 pc:w-full border border-border">
                  <div class="bg-[#B0B0B0] h-35 pc:h-60 flex justify-center items-center">
                    <h3 class="text-12 pc:text-20 text-white">
                      学　生
                    </h3>
                  </div>
                  <div class="bg-white pt-16 pc:pt-24 pb-20 pc:pb-40 px-24 md:px-40 pc:px-160">
                    <ul class="flex flex-col pc:h-132 flex-wrap gap-x-80">
                      <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                        <span class="text-12 pc:text-20 leading-[1.3]">
                          2枚1セット
                        </span>
                        <span class="text-12 pc:text-20">
                          ¥990
                        </span>
                      </li>
                      <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                        <span class="text-12 pc:text-20 leading-[1.3]">
                          焼き増し2枚1セット
                        </span>
                        <span class="text-12 pc:text-20">
                          ¥990
                        </span>
                      </li>
                      <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                        <span class="text-12 pc:text-20 leading-[1.3]">
                          プリントしたカットのデータ販売
                        </span>
                        <span class="text-12 pc:text-20">
                          ¥1,540
                        </span>
                      </li>
                      <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                        <span class="text-12 pc:text-20 leading-[1.3]">
                          データのみの販売
                        </span>
                        <span class="text-12 pc:text-20">
                          ¥2,310
                        </span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="mt-32 pc:mt-64">
                <div class="mx-auto md:w-400 pc:w-full border border-border">
                  <div class="bg-[#B0B0B0] h-35 pc:h-60 flex justify-center items-center">
                    <h3 class="text-12 pc:text-20 text-white">
                      一　般
                    </h3>
                  </div>
                  <div class="bg-white pt-16 pc:pt-24 pb-20 pc:pb-40 px-24 md:px-40 pc:px-160">
                    <ul class="flex flex-col pc:h-198 flex-wrap gap-x-80">
                      <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                        <span class="text-12 pc:text-20 leading-[1.3]">
                          2枚1セット
                        </span>
                        <span class="text-12 pc:text-20">
                          ¥1,540
                        </span>
                      </li>
                      <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                        <span class="text-12 pc:text-20 leading-[1.3]">
                          焼き増し2枚1セット
                        </span>
                        <span class="text-12 pc:text-20">
                          ¥1,210
                        </span>
                      </li>
                      <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                        <span class="text-12 pc:text-20 leading-[1.3]">
                          焼き増し（他サイズ）2枚1セット
                        </span>
                        <span class="text-12 pc:text-20">
                          ¥1,540
                        </span>
                      </li>
                      <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                        <span class="text-12 pc:text-20 leading-[1.3]">
                          プリントしたカットのデータ販売
                        </span>
                        <span class="text-12 pc:text-20">
                          ¥1,540
                        </span>
                      </li>
                      <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                        <span class="text-12 pc:text-20 leading-[1.3]">
                          データのみの販売
                        </span>
                        <span class="text-12 pc:text-20">
                          ¥2,310
                        </span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>



      </section>

    </main>

    <?php get_template_part('inc', 'side-banner'); ?>
    <?php get_template_part('inc', 'footer'); ?>
    <?php get_template_part('inc', 'sp-menu'); ?>
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
          content.style.opacity = "0";
          content.style.visibility = "hidden";
          content.style.height = "0";
          content.style.overflow = "hidden";
        });

        // クリックされたタブに対応するコンテンツを表示
        const tabId = button.getAttribute('data-tab');
        const targetTab = document.getElementById(tabId);
        if (targetTab) {
          targetTab.style.opacity = "1";
          targetTab.style.visibility = "visible";
          targetTab.style.height = "auto";
          targetTab.style.overflow = "visible";
        }
      });
    });
  </script>
  <script>
    const tabButtons2 = document.querySelectorAll('[data-tab2]');
    const tabContents2 = document.querySelectorAll('.tab-cont2');

    // タブボタンのクリックイベントを登録
    tabButtons2.forEach(button => {
      button.addEventListener('click', (event) => {
        event.preventDefault(); // 不要なページ遷移を防ぐ

        // すべてのボタンから 'js-tab-active' クラスを削除
        tabButtons2.forEach(btn => btn.classList.remove('js-tab-active'));

        // クリックされたボタンに 'js-tab-active' クラスを追加
        button.classList.add('js-tab-active');

        // すべてのタブコンテンツを非表示
        tabContents2.forEach(content => {
          content.style.opacity = "0";
          content.style.visibility = "hidden";
          content.style.height = "0";
          content.style.overflow = "hidden";
        });

        // クリックされたタブに対応するコンテンツを表示
        const tabId2 = button.getAttribute('data-tab2');
        const targetTab2 = document.getElementById(tabId2);
        if (targetTab2) {
          targetTab2.style.opacity = "1";
          targetTab2.style.visibility = "visible";
          targetTab2.style.height = "auto";
          targetTab2.style.overflow = "visible";
        }
      });
    });
  </script>

  <?php wp_footer(); ?>
</body>

</html>