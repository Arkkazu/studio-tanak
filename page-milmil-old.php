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
          <source media='(min-width: 768px)' srcset='/wp-content/themes/studio-tanaka_theme/assets/media/images/milmil/miruimg_pc.webp'>
          <img class='w-full' src='/wp-content/themes/studio-tanaka_theme/assets/media/images/milmil/miruimg_sp.webp' alt='ミルミル' loading='lazy' width='1125' height='1130'>
        </picture>
        <div class="absolute left-0 md:left-160 pc:left-450 top-1/2 -translate-y-1/2">
          <h1 class="text-20 pc:text-30 font-zenMaruGothic opacity-0 md:opacity-100">ミルミル</h1>
        </div>
      </div>

      <section class="mt-32 pc:mt-88">
        <div class="mx-auto w-343 md:w-736 pc:w-1450">

          <div class="flex items-center flex-col gap-y-4 pc:gap-y-8">
            <h2 class="text-14 pc:text-30 font-zenMaruGothic half-leading">ミルミル メニュー</h2>
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
                      <span class="text-17 pc:text-33 leading-none half-leading">¥8,800</span>
                    </div>
                  </div>

                  <div class="ml-38 pc:ml-64">
                    <div class="flex items-center gap-x-12 pc:gap-x-24">
                      <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                        <span class="text-8 pc:text-16 leading-none half-leading">土日祝</span>
                      </div>
                      <span class="text-17 pc:text-33 leading-none half-leading">¥14,300</span>
                    </div>
                  </div>
                  <div class="ml-0 md:ml-80 w-full md:w-auto">
                    <p class="text-10 pc:text-25 text-center md:text-left">所要時間：1時間</p>
                  </div>
                </div>
                <div class="flex justify-center">
                  <div class="md:w-568">
                    <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/milmil/milmil-001.svg" alt="" class="w-full" width="295" height="61">
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
                          カメラマンセレクト<br>20カット<br>
                          もしくは<br>
                          六つ切台紙1カット
                        </span>
                      </div>
                    </div>
                    <div class="flex items-center flex-col gap-8">
                      <div class="h-62 pc:h-90 flex justify-center items-center">
                        <div class="w-48 pc:w-72">
                          <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/dress_on.svg" alt="" class="w-full" width="128" height="129">
                        </div>
                      </div>
                      <div class="h-32 pc:h-56 flex justify-center items-center">
                        <span class="text-8 pc:text-16 text-center leading-[1.3]">
                          衣装　1着
                        </span>
                      </div>
                    </div>
                    <div class="flex items-center flex-col gap-8">
                      <div class="h-62 pc:h-90 flex justify-center items-center">
                        <div class="w-56 pc:w-82">
                          <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/baby.svg" alt="" class="w-full" width="46" height="35">
                        </div>
                      </div>
                      <div class="h-32 pc:h-56 flex justify-center items-center">
                        <span class="text-8 pc:text-16 text-center leading-[1.3]">
                          赤ちゃん撮影
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
                <ul class="flex flex-col pc:h-124 flex-wrap gap-x-80">
                  <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                    <span class="text-12 pc:text-20 leading-[1.3]">
                      家族撮影料
                    </span>
                    <span class="text-12 pc:text-20">
                      ¥3,300
                    </span>
                  </li>
                  <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                    <span class="text-12 pc:text-20 leading-[1.3]">
                      兄弟撮影料
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
                          <img class="w-full" src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/chevron-right-white-double.svg" alt="" loading="lazy" width="6" height="7">
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