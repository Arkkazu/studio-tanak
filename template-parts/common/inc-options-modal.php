<?php
$modal = $args['modal'] ?? [];
$modal_id = $modal['id'] ?? 'options-modal';
$modal_title = $modal['title'] ?? '';
$modal_title_ja = $modal['title_ja'] ?? '';
$modal_items = $modal['items'] ?? [];
$modal_note = $modal['note'] ?? '';
?>

<dialog id="<?php echo esc_attr($modal_id); ?>" class="js-kids-course-modal fixed top-1/2 left-1/2 m-0 max-h-none h-[100dvh] w-full max-w-480 -translate-x-1/2 -translate-y-1/2 overflow-hidden border-0 bg-white p-0 text-black opacity-0 transition-opacity duration-300 md:h-[calc(100dvh-40rem)] md:backdrop:bg-[rgba(0,0,0,0.6)]" aria-labelledby="<?php echo esc_attr($modal_id); ?>-title">
  <?php [$src, $wh] = theme_img_src_wh('src/images/common/svg-logo-icon.svg'); ?>
  <img class="absolute top-24 left-24 z-10 block w-20 brightness-0" src="<?php echo $src; ?>" alt="" loading="lazy" <?php echo $wh; ?>>
  <button type="button" class="js-kids-course-modal-close absolute top-16 right-16 z-10 flex size-40 items-center justify-center focus:outline-none focus-visible:outline focus-visible:outline-1 focus-visible:outline-gray focus-visible:outline-offset-2" aria-label="モーダルを閉じる">
    <span class="absolute h-[1px] w-32 rotate-45 bg-gray"></span>
    <span class="absolute h-[1px] w-32 -rotate-45 bg-gray"></span>
  </button>
  <div class="h-full overflow-y-auto">
    <div class="flex min-h-280 flex-col items-center bg-[#e3dfdf] px-24 py-32">
      <h2 id="<?php echo esc_attr($modal_id); ?>-title" class="mt-80 px-20 text-center text-17 font-montserrat font-semibold leading-[1.2] tracking-[0.02em]">
        <?php echo esc_html($modal_title); ?>
      </h2>
      <p class="mt-auto px-20 text-center text-13 font-noto-sans font-light leading-[1.8] tracking-[0.12em]">
        <?php echo esc_html($modal_title_ja); ?>
      </p>
    </div>
    <div class="px-40 py-64">
      <div class="mx-auto max-w-688">
        <ul class="flex flex-col">
          <?php foreach ($modal_items as $modal_item) : ?>
            <li class="border-b border-black py-20 first:pt-0">
              <div class="flex items-center justify-between gap-20">
                <p class="text-12 font-noto-sans font-light leading-[1.7] whitespace-pre-line">
                  <?php echo esc_html($modal_item['label']); ?>
                </p>
                <p class="shrink-0 text-16 font-montserrat font-light leading-none tracking-[0.05em]">
                  <?php echo esc_html($modal_item['price']); ?>
                </p>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
        <?php if ($modal_note !== '') : ?>
          <p class="mt-32 text-11 font-noto-sans font-light leading-[1.8] whitespace-pre-line">
            <?php echo esc_html($modal_note); ?>
          </p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</dialog>
