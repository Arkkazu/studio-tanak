<?php
/* Template Name: トップページ */
get_header();
?>

<body>
  <div class="max-pc:pb-40">

    <?php get_template_part('inc', 'header'); ?>

    <main class="py-70 pc:py-160 ">

      <div class="relative w-full">
        <picture>
          <source media='(min-width: 768px)' srcset='/wp-content/themes/studio-tanaka_theme/assets/media/images/options/optionimg_pc.webp'>
          <img class='w-full' src='/wp-content/themes/studio-tanaka_theme/assets/media/images/options/optionimg_sp.webp' alt='オプション' loading='lazy' width='1125' height='1130'>
        </picture>
        <div class="absolute left-0 md:left-160 pc:left-450 top-1/2 -translate-y-1/2">
          <h1 class="text-20 pc:text-30 font-zen-maru-gothic opacity-0 md:opacity-100">オプション</h1>
        </div>
      </div>

      <section class="mt-32 pc:mt-88">
        <div class="mx-auto w-343 md:w-736 pc:w-1450">

          <div class="flex items-center flex-col gap-y-4 pc:gap-y-8">
            <h2 class="text-14 pc:text-30 font-zen-maru-gothic half-leading">オプション メニュー</h2>
          </div>

          <?php if (have_rows('options')) : ?>
            <?php while (have_rows('options')) : the_row(); ?>
              <?php
              $option__name  = get_sub_field('option__name');

              $list = [];
              if (have_rows('option__list')) :
                while (have_rows('option__list')) : the_row();
                  $list[] = [
                    'option__list--name'   => get_sub_field('option__list--name'),
                    'option__list--price'   => get_sub_field('option__list--price'),
                  ];
                endwhile;
              endif;
              ?>

              <?php if (! empty($list)) : ?>
                <div class="mt-40 pc:mt-80">
                  <div class="mx-auto md:w-400 pc:w-full border border-border">
                    <div class="bg-[#B0B0B0] h-35 pc:h-60 flex justify-center items-center">
                      <h3 class="text-12 pc:text-20 text-white">
                        <?php if ($option__name) : ?>
                          <?php echo esc_html($option__name); ?>
                        <?php endif; ?>
                      </h3>
                    </div>
                    <div class="bg-white pt-16 pc:pt-24 pb-20 pc:pb-40 px-24 md:px-40 pc:px-160">
                      <ul class="flex flex-wrap gap-x-80">
                        <?php foreach ($list as $row) : ?>
                          <li class="w-full pc:w-[calc((100%-80rem)/2)] py-8 border-b border-border border-dashed flex justify-between items-center">
                            <span class="text-12 pc:text-20 leading-[1.3]">
                              <?php echo esc_html($row['option__list--name']); ?>
                            </span>
                            <span class="text-12 pc:text-20 js-price">
                              <?php echo esc_html($row['option__list--price']); ?>
                            </span>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

            <?php endwhile; ?>
          <?php endif; ?>

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
    document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('.js-price').forEach(el => {
        const text = el.textContent.trim();
        const hasTilde = /[〜～~]/.test(text); // 「〜」を含むか判定
        const num = text.replace(/[^\d]/g, ''); // 数字以外を除去

        if (num) {
          const formatted = '¥' + num.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
          el.textContent = hasTilde ? formatted + '~' : formatted;
        }
      });
    });
  </script>


  <?php wp_footer(); ?>
</body>

</html>