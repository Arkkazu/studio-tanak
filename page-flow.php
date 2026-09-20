<?php
/* Template Name: FLOWページ */

[$flow_fv_pc_src, $flow_fv_pc_wh] = theme_img_src_wh('src/images/flow/アセット 178.webp');
[$flow_fv_sp_src, $flow_fv_sp_wh] = theme_img_src_wh('src/images/flow/アセット 179.webp');
[$flow_qr_src, $flow_qr_wh] = theme_img_src_wh('src/images/legacy-old/flow/qr-line.webp');

get_header();
?>

<main class="overflow-hidden bg-white pb-160 pc:pb-240">
  <section class="relative aspect-square pc:aspect-[1920/480] overflow-hidden bg-[#f1ede7]" aria-labelledby="flow-page-title">
    <div class="relative h-full">
      <div class="absolute inset-0 mx-auto max-w-920">
        <h1 id="flow-page-title" class="absolute left-24 pc:left-64 top-96 pc:top-176 z-10 text-18 pc:text-20 text-white font-montserrat leading-none tracking-[0.18em] pc:tracking-[0.22em] [writing-mode:vertical-rl] pc:[writing-mode:horizontal-tb]">
          USAGE FLOW
        </h1>
      </div>
      <picture>
        <source media="(min-width: 1272px)" srcset="<?php echo esc_url($flow_fv_pc_src); ?>">
        <img class="absolute inset-0 block h-full w-full object-cover" src="<?php echo esc_url($flow_fv_sp_src); ?>" alt="" loading="eager" fetchpriority="high" <?php echo $flow_fv_sp_wh; ?>>
      </picture>
    </div>
  </section>

  <section class="px-20 pt-150" aria-labelledby="flow-information-title">
    <div class="mx-auto max-w-600">
      <h2 id="flow-information-title" class="sr-only">ご利用の流れ</h2>

      <div class="flex flex-col gap-160">
        <section aria-labelledby="flow-step-1-title">
          <h3 id="flow-step-1-title" class="text-center text-14 pc:text-16 font-montserrat leading-none tracking-[0.05em]">
            STEP.1
          </h3>
          <p class="mt-20 flex min-h-42 items-center justify-center border border-black text-12 pc:text-14 font-noto-sans leading-none">
            ご予約
          </p>
          <div class="mt-40 text-center text-10 pc:text-12 font-noto-sans leading-[1.8] text-gray">
            <p>公式LINEにてご予約を承っております</p>
            <a class="mx-auto mt-40 block w-100 transition-opacity duration-300 hoverable:hover:opacity-50" href="https://lin.ee/3qsIYBuw" target="_blank" rel="noopener noreferrer" aria-label="公式LINEで予約する">
              <img class="block w-full" src="<?php echo esc_url($flow_qr_src); ?>" alt="公式LINE予約ページへのQRコード" loading="lazy" <?php echo $flow_qr_wh; ?>>
            </a>
            <p class="mt-40">
              TEL 027-325-4649<br>
              営業時間：10:00〜18:00　定休日：火曜／第１・３水曜
            </p>
            <p class="mt-40">LINEでのお問い合わせは営業時間内に順次ご返信させていただきます。</p>
          </div>
        </section>

        <section aria-labelledby="flow-step-2-title">
          <h3 id="flow-step-2-title" class="text-center text-14 pc:text-16 font-montserrat leading-none tracking-[0.05em]">
            STEP.2
          </h3>
          <p class="mt-20 flex min-h-42 items-center justify-center border border-black text-12 pc:text-14 font-noto-sans leading-none">
            内金のお支払い
          </p>
          <div class="mt-40 text-center text-10 pc:text-12 font-noto-sans leading-[1.8] text-gray">
            <p>証明写真以外の全メニューで内金（ご予約金）を頂戴しております。</p>
            <p class="mt-40">
              成人式（男女）　¥20,000<br>
              卒業袴（大人）　¥20,000<br>
              上記以外　　　　¥10,000
            </p>
            <div class="mt-40 text-left">
              <p>ご予約確定から１週間以内のキャンセルはご予約金全額返金させて頂きます。<br>その後のキャンセルに関してはご予約金の返金は致しかねます。</p>
              <p class="mt-40">ご予約当日の無断キャンセルに関してはプラン料金全額のご請求をさせて頂きます。<br>体調不良等で日時変更をご希望の場合はご相談ください。</p>
            </div>
          </div>
        </section>

        <section aria-labelledby="flow-step-3-title">
          <h3 id="flow-step-3-title" class="text-center text-14 pc:text-16 font-montserrat leading-none tracking-[0.05em]">
            STEP.3
          </h3>
          <p class="mt-20 flex min-h-42 items-center justify-center border border-black text-12 pc:text-14 font-noto-sans leading-none">
            ご来店・撮影
          </p>
          <div class="mt-40 text-10 pc:text-12 font-noto-sans leading-[1.8] text-gray">
            <p>ご予約頂いた撮影時間の10分前までにはご来店下さい。</p>
            <p class="mt-40">交通状況でご来店が遅れる場合や、体調不良などでキャンセルされる場合は、必ずお電話下さい。<br>撮影が終了しましたら、撮影料金のお支払いとなります。</p>
            <p class="mt-40">お支払い方法は、現金 / クレジットカード / 電子マネー / 交通系電子マネー / QRコード決済がご利用いただけます。</p>
          </div>
        </section>

        <section aria-labelledby="flow-step-4-title">
          <h3 id="flow-step-4-title" class="text-center text-14 pc:text-16 font-montserrat leading-none tracking-[0.05em]">
            STEP.4
          </h3>
          <p class="mt-20 flex min-h-42 items-center justify-center border border-black text-12 pc:text-14 font-noto-sans leading-none">
            商品のお渡し
          </p>
          <div class="mt-40 text-10 pc:text-12 font-noto-sans leading-[1.8] text-gray">
            <p>①撮影日より３週間以内に撮影データを送付させて頂きます。</p>
            <p class="mt-40">②撮影日より２か月以内に、ご自宅に商品を郵送させて頂きます。</p>
            <p class="mt-40">③一部商品はハンドメイド作品となりますので、２か月以内に制作しLINEにてお知らせさせていただきます。<br>※お手数ですがお受け取りにお越しいただく形となります。<br>※郵送にて商品受け取りをご希望の場合、お会計時にお申し付けください。着払いにて発送させていただきます。</p>
            <div class="mt-40">
              <p>【ご注意】</p>
              <p>「商品仕上がり」連絡の前にご来店いただいても商品をお渡しすることはできませんのでご注意ください。</p>
              <p>商品や商品の納期に関するご不明点等ありましたら事前にLINEよりご連絡をお願いいたします。</p>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
