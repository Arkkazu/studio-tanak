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
          <source media='(min-width: 768px)' srcset='/wp-content/themes/studio-tanaka_theme/assets/media/images/publication/gooutimg_pc2.webp'>
          <img class='w-full' src='/wp-content/themes/studio-tanaka_theme/assets/media/images/publication/gooutimg_sp2.webp' alt='出張撮影' loading='lazy' width='1125' height='1130'>
        </picture>
        <div class="absolute left-0 md:left-160 pc:left-450 top-1/2 -translate-y-1/2">
          <h1 class="text-20 pc:text-30 font-zenMaruGothic opacity-0 md:opacity-100">出張撮影</h1>
        </div>
      </div>

      <section class="mt-32 pc:mt-88">
        <div class="mx-auto w-343 md:w-736 pc:w-1450">

          <div class="flex items-center flex-col gap-y-4 pc:gap-y-8">
            <h2 class="text-14 pc:text-30 font-zenMaruGothic half-leading">出張撮影</h2>
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
                      <span class="text-17 pc:text-33 leading-none half-leading">¥44,000</span>
                    </div>
                  </div>

                  <div class="ml-38 pc:ml-64">
                    <div class="flex items-center gap-x-12 pc:gap-x-24">
                      <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                        <span class="text-8 pc:text-16 leading-none half-leading">土日祝</span>
                      </div>
                      <span class="text-17 pc:text-33 leading-none half-leading">¥49,500</span>
                    </div>
                  </div>
                  <div class="ml-0 md:ml-80 w-full md:w-auto">
                    <p class="text-10 pc:text-25 text-center md:text-left">所要時間：2時間</p>
                  </div>
                </div>

                <div class="w-full h-px bg-black"></div>


                <div class="flex justify-center flex-wrap pc:flex-nowrap gap-x-24 pc:gap-x-80 gap-y-24">
                  <div class="flex items-center flex-col gap-8">
                    <div class="h-62 pc:h-90 flex justify-center items-center">
                      <div class="w-32 pc:w-50">
                        <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/data.svg" alt="" class="w-full" width="79" height="79">
                      </div>
                    </div>
                    <div class="h-21 pc:h-56 flex justify-center items-center">
                      <span class="text-8 pc:text-16 text-center leading-[1.3]">
                        カメラマンセレクト<br>
                        40カット
                      </span>
                    </div>
                  </div>
                </div>

                <div class="max-pc:w-full">
                  <p class="text-8 pc:text-16 -indent-[1em] pl-[1em] half-leading">※お渡しデータは色調整・トリミング付き</p>
                </div>

                <div class="w-full h-px bg-black"></div>


                <div class="w-full md:w-auto flex flex-col gap-y-8">
                  <p class="text-12 pc:text-20 leading-[1.3] -indent-[1em] pl-[1em]">
                    ・事前にお打ち合わせをLINEもしくはお電話にてお願いします。
                  </p>
                  <p class="text-12 pc:text-20 leading-[1.3] -indent-[1em] pl-[1em]">
                    ・6km以内は基本料金内で出張可能。
                  </p>
                  <p class="text-12 pc:text-20 leading-[1.3] -indent-[1em] pl-[1em]">
                    ・6kmより超越する場合は5km毎に¥1,100追加料金を
                    頂きます。
                  </p>
                  <p class="text-12 pc:text-20 leading-[1.3] -indent-[1em] pl-[1em]">
                    ・撮影場所の撮影許可はお客様でお願い致します。
                  </p>
                  <p class="text-12 pc:text-20 leading-[1.3] -indent-[1em] pl-[1em]">
                    ・撮影場所にて別途料金の発生する場合はお客様負担とさ
                    せて頂きます。
                  </p>
                  <p class="text-12 pc:text-20 leading-[1.3] -indent-[1em] pl-[1em]">
                    ・雨天の場合の撮影可否の判断はお客様でお願い致します。
                  </p>
                  <p class="text-12 pc:text-20 leading-[1.3] -indent-[1em] pl-[1em]">
                    ・当日のキャンセル料は50%（税込）とさせて頂きます。
                  </p>
                  <p class="text-12 pc:text-20 leading-[1.3] -indent-[1em] pl-[1em]">
                    ・日程変更は無料にて承っております。
                  </p>
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