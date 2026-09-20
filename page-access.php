<?php
/* Template Name: ACCESSページ */

[$access_fv_pc_src, $access_fv_pc_wh] = theme_img_src_wh('src/images/access/fv-pc.webp');
[$access_fv_sp_src, $access_fv_sp_wh] = theme_img_src_wh('src/images/access/fv-sp.webp');
[$access_map_src, $access_map_wh] = theme_img_src_wh('src/images/access/svg-01.svg');
[$access_parking_src, $access_parking_wh] = theme_img_src_wh('src/images/access/svg-02.svg');

get_header();
?>

<main class="overflow-hidden bg-white pb-160 pc:pb-240">
  <section class="relative aspect-square pc:aspect-[1920/480] overflow-hidden bg-[#f1ede7]" aria-labelledby="access-page-title">
    <div class="relative h-full">
      <div class="absolute inset-0 mx-auto max-w-920">
        <h1 id="access-page-title" class="absolute left-24 pc:left-64 top-96 pc:top-176 z-10 text-18 pc:text-20 font-montserrat font-light leading-none tracking-[0.18em] pc:tracking-[0.22em] [writing-mode:vertical-rl] pc:[writing-mode:horizontal-tb]">
          ACCESS
        </h1>
      </div>
      <picture>
        <source media="(min-width: 1272px)" srcset="<?php echo esc_url($access_fv_pc_src); ?>">
        <img class="absolute inset-0 block h-full w-full object-cover" src="<?php echo esc_url($access_fv_sp_src); ?>" alt="" loading="eager" fetchpriority="high" <?php echo $access_fv_sp_wh; ?>>
      </picture>
    </div>
  </section>

  <section class="px-20 pt-80 pc:pt-150" aria-labelledby="access-information-title">
    <div class="mx-auto flex max-w-440 flex-col items-center">
      <h2 id="access-information-title" class="sr-only">アクセス情報</h2>

      <address class="text-center text-10 pc:text-12 font-noto-sans font-light not-italic leading-[1.8] text-gray">
        <p>〒370-0828 群馬県高崎市宮元町270 3F</p>
        <p>TEL 027-325-4649</p>
        <p>受付時間：10:00〜18:00&nbsp;&nbsp;定休日：火曜／第1・3水曜</p>
      </address>

      <img class="mt-40 block w-294" src="<?php echo esc_url($access_map_src); ?>" alt="高崎市役所とJR高崎駅周辺の地図" loading="lazy" <?php echo $access_map_wh; ?>>

      <a class="mt-80 flex min-h-42 w-294 items-center justify-center border border-[#605f5f] text-11 pc:text-12 font-noto-sans font-light leading-none transition-opacity duration-300 hoverable:hover:opacity-50" href="https://www.google.com/maps/search/?api=1&amp;query=群馬県高崎市宮元町270" target="_blank" rel="noopener noreferrer">
        google mapで見る
      </a>

      <section class="mt-80 flex w-full flex-col items-center" aria-labelledby="access-parking-title">
        <h2 id="access-parking-title" class="flex min-h-42 w-160 items-center justify-center border border-[#605f5f] text-14 pc:text-16 font-montserrat font-light leading-none tracking-[0.05em]">
          PARKING
        </h2>
        <p class="mt-40 max-w-360 text-center text-10 pc:text-12 font-noto-sans font-light leading-[1.8] text-gray">
          スタジオ向かいに８台駐車可能となっております。<br>
          赤い箇所が駐車可能スペースです。<br>
          空きがない、場所がわからないなどございましたらお電話ください。
        </p>
        <img class="mt-40 block w-294" src="<?php echo esc_url($access_parking_src); ?>" alt="スタジオ周辺の駐車場案内図" loading="lazy" <?php echo $access_parking_wh; ?>>
      </section>
    </div>
  </section>
</main>

<?php get_footer(); ?>
