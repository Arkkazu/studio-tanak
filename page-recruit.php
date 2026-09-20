<?php
/* Template Name: RECRUITページ */

$recruit_jobs = [
  [
    'title' => 'カメラマン',
    'details' => [
      ['label' => '雇用形態', 'value' => '業務委託 / パート / アルバイト'],
      ['label' => '勤務時間', 'value' => '10:00-18:00'],
      ['label' => '給与', 'value' => '応相談'],
      ['label' => '詳細', 'value' => '週２日３時間〜OK'],
      ['label' => '業務内容', 'value' => 'スタジオ撮影、出張撮影、その他業務'],
    ],
  ],
  [
    'title' => 'ヘアメイク',
    'details' => [
      ['label' => '雇用形態', 'value' => '正社員 / 業務委託 / パート / アルバイト'],
      ['label' => '勤務時間', 'value' => '10:00-18:00'],
      ['label' => '給与', 'value' => '応相談'],
      ['label' => '詳細', 'value' => '週２日３時間〜OK、美容師免許'],
      ['label' => '業務内容', 'value' => '子供・大人のヘアメイク、その他業務'],
    ],
  ],
  [
    'title' => 'デザイナー',
    'details' => [
      ['label' => '雇用形態', 'value' => 'パート / アルバイト'],
      ['label' => '勤務時間', 'value' => '10:00-18:00'],
      ['label' => '時給', 'value' => '1,120円〜'],
      ['label' => '詳細', 'value' => '週２日３時間〜OK'],
      ['label' => '業務内容', 'value' => '写真のレタッチ、その他業務'],
    ],
  ],
  [
    'title' => '受付',
    'details' => [
      ['label' => '雇用形態', 'value' => 'パート / アルバイト'],
      ['label' => '勤務時間', 'value' => '10:00-18:00'],
      ['label' => '時給', 'value' => '1,120円〜'],
      ['label' => '詳細', 'value' => '週２日３時間〜OK'],
      ['label' => '業務内容', 'value' => '写真の受付・電話対応業務、その他業務'],
    ],
  ],
];

[$recruit_fv_pc_src, $recruit_fv_pc_wh] = theme_img_src_wh('src/images/recruit/fv-pc.webp');
[$recruit_fv_sp_src, $recruit_fv_sp_wh] = theme_img_src_wh('src/images/recruit/fv-sp.webp');
[$recruit_qr_src, $recruit_qr_wh] = theme_img_src_wh('src/images/common/qr-line.webp');

get_header();
?>

<main class="overflow-hidden bg-white pb-160 pc:pb-240">
  <section class="relative aspect-square pc:aspect-[1920/480] overflow-hidden bg-[#f1ede7]" aria-labelledby="recruit-page-title">
    <div class="relative h-full">
      <div class="absolute inset-0 mx-auto max-w-920">
        <h1 id="recruit-page-title" class="absolute left-24 pc:left-64 top-96 pc:top-176 z-10 text-18 pc:text-20 text-white font-montserrat  leading-none tracking-[0.18em] pc:tracking-[0.22em] [writing-mode:vertical-rl] pc:[writing-mode:horizontal-tb]">
          RECRUIT
        </h1>
      </div>
      <picture>
        <source media="(min-width: 1272px)" srcset="<?php echo esc_url($recruit_fv_pc_src); ?>">
        <img class="absolute inset-0 block h-full w-full object-cover" src="<?php echo esc_url($recruit_fv_sp_src); ?>" alt="" loading="eager" fetchpriority="high" <?php echo $recruit_fv_sp_wh; ?>>
      </picture>
    </div>
  </section>

  <section class="px-20 pt-150" aria-labelledby="recruit-information-title">
    <div class="mx-auto max-w-440">
      <h2 id="recruit-information-title" class="sr-only">採用情報</h2>

      <div class="flex flex-col gap-80">
        <?php foreach ($recruit_jobs as $recruit_job) : ?>
          <section class="flex flex-col items-center" aria-labelledby="recruit-job-<?php echo esc_attr(sanitize_title($recruit_job['title'])); ?>">
            <h3 id="recruit-job-<?php echo esc_attr(sanitize_title($recruit_job['title'])); ?>" class="flex min-h-42 w-160 items-center justify-center border border-black text-14 pc:text-16 font-noto-sans  leading-none">
              <?php echo esc_html($recruit_job['title']); ?>
            </h3>
            <dl class="mt-40 self-stretch text-10 pc:text-12 font-noto-sans  leading-[1.8] text-gray">
              <?php foreach ($recruit_job['details'] as $recruit_detail) : ?>
                <div class="flex gap-8">
                  <dt class="shrink-0"><?php echo esc_html($recruit_detail['label']); ?>：</dt>
                  <dd><?php echo esc_html($recruit_detail['value']); ?></dd>
                </div>
              <?php endforeach; ?>
            </dl>
          </section>
        <?php endforeach; ?>
      </div>

      <section class="mt-80 flex flex-col items-center text-center" aria-labelledby="recruit-contact-title">
        <h2 id="recruit-contact-title" class="sr-only">応募方法</h2>
        <p class="text-10 pc:text-12 font-noto-sans  leading-[1.8] text-gray">
          ご応募は公式LINEよりお願いいたします
        </p>

        <a class="mt-40 block w-100 transition-opacity duration-300 hoverable:hover:opacity-50" href="https://lin.ee/3qsIYBuw" target="_blank" rel="noopener noreferrer" aria-label="公式LINEから応募する">
          <img class="block w-full" src="<?php echo esc_url($recruit_qr_src); ?>" alt="公式LINE応募ページへのQRコード" loading="lazy" <?php echo $recruit_qr_wh; ?>>
        </a>

        <p class="mt-40 text-10 pc:text-12 font-noto-sans  leading-[1.8] text-gray">
          TEL 027-325-4649<br>
          営業時間：10:00〜18:00　定休日：火曜／第1・3水曜
        </p>

        <p class="mt-40 text-10 pc:text-12 font-noto-sans  leading-[1.8] text-gray">
          LINEでのお問い合わせは営業時間内に順次ご返信させていただきます。
        </p>
      </section>
    </div>
  </section>
</main>

<?php get_footer(); ?>
