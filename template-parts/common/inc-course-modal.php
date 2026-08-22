<?php
$modal = $args['modal'] ?? null;
$has_detail = !empty($modal);
$course = $args['course'] ?? [];
$modal_id = $modal['id'] ?? ($args['id'] ?? 'course-modal');
$section_title = $args['section_title'] ?? '';
$group_title = $args['group_title'] ?? '';
$render_course_modal_section = static function (string $title, string $title_ja, string $item_prefix, array $items, ?string $note = null): void {
?>
  <section class="mt-80">
    <div class="border-b border-black pb-12">
      <h3 class="text-14 font-montserrat font-light leading-none tracking-[0.05em]"><?php echo esc_html($title); ?></h3>
    </div>
    <p class="mt-16 text-12 font-noto-sans font-light leading-none tracking-[0.12em]"><?php echo esc_html($title_ja); ?></p>
    <div class="mt-40 flex flex-col gap-40">
      <?php foreach ($items as $index => $item) : ?>
        <div class="flex items-baseline gap-16">
          <span class="text-11 font-montserrat font-light leading-none whitespace-nowrap"><?php echo esc_html($item_prefix); ?> /<?php echo esc_html(sprintf('%02d', $index + 1)); ?></span>
          <span class="flex-1 border-b border-dashed border-black"></span>
          <span class="text-12 font-noto-sans font-light leading-none text-right"><?php echo esc_html($item); ?></span>
        </div>
      <?php endforeach; ?>
    </div>
    <?php if (!empty($note)) : ?>
      <div class="mt-40 flex justify-center">
        <p class="text-11 font-noto-sans font-light leading-[1.8] whitespace-pre-line"><?php echo esc_html($note); ?></p>
      </div>
    <?php endif; ?>
  </section>
<?php
};

?>
<dialog id="<?php echo esc_attr($modal_id); ?>" class="js-kids-course-modal fixed top-1/2 left-1/2 m-0 max-h-none h-[100dvh] md:h-[calc(100dvh-40rem)] w-full max-w-480 -translate-x-1/2 -translate-y-1/2 overflow-hidden border-0 bg-white p-0 text-black opacity-0 transition-opacity duration-300 md:backdrop:bg-[rgba(0,0,0,0.6)]" aria-labelledby="<?php echo esc_attr($modal_id); ?>-title">
  <?php [$src, $wh] = theme_img_src_wh('src/images/common/svg-logo-icon.svg'); ?>
  <img class="absolute top-24 left-24 z-10 block w-20 brightness-0" src="<?php echo $src; ?>" alt="" loading="lazy" <?php echo $wh; ?>>
  <button type="button" class="js-kids-course-modal-close absolute top-16 right-16 z-10 flex size-40 items-center justify-center focus:outline-none focus-visible:outline focus-visible:outline-1 focus-visible:outline-gray focus-visible:outline-offset-2" aria-label="モーダルを閉じる">
    <span class="absolute h-[1px] w-32 rotate-45 bg-gray"></span>
    <span class="absolute h-[1px] w-32 -rotate-45 bg-gray"></span>
  </button>
  <div class="h-full overflow-y-auto">
    <?php if ($has_detail) : ?>
      <div class="flex flex-col bg-[#e3dfdf] px-24 py-32">
        <p class="text-center text-11 font-noto-sans font-semibold leading-none text-gray"><?php echo esc_html($section_title); ?></p>
        <h2 id="<?php echo esc_attr($modal_id); ?>-title" class="mt-80 px-20 text-center text-17 font-montserrat font-semibold leading-[1.2] tracking-[0.02em]">
          <?php echo esc_html($modal['name']); ?>
        </h2>
        <?php if (empty($modal['compact_header'])) : ?>
          <div class="mt-60 px-20 text-center">
            <p class="text-12 font-noto-sans font-light leading-[1.8] tracking-[0.12em]"><?php echo esc_html($group_title); ?></p>
            <p class="text-12 font-noto-sans font-light leading-[1.8] tracking-[0.12em]"><?php echo esc_html($modal['subtitle']); ?></p>
          </div>
        <?php endif; ?>
      </div>

      <?php if (!empty($modal['compact_header'])) : ?>
        <div class="px-20 py-60 text-center">
          <p class="text-12 font-noto-sans font-light leading-[1.8] tracking-[0.12em]"><?php echo esc_html($group_title); ?></p>
          <p class="text-12 font-noto-sans font-light leading-[1.8] tracking-[0.12em]"><?php echo esc_html($modal['subtitle']); ?></p>
        </div>
      <?php endif; ?>

      <div class="px-40 pb-64">
        <div class="mx-auto max-w-688">
          <div class="pt-64 flex flex-col gap-40">
            <div class="flex items-baseline gap-16">
              <span class="text-12 font-noto-sans font-light leading-none whitespace-nowrap">料金</span>
              <span class="flex-1 border-b border-dashed border-black"></span>
              <span class="flex items-baseline gap-8 whitespace-nowrap">
                <span class="text-17 font-montserrat font-light leading-none tracking-[0.05em]"><?php echo esc_html($course['price']); ?></span>
                <span class="text-12 font-noto-sans font-light leading-none">（税込）</span>
              </span>
            </div>
            <div class="flex items-baseline gap-16">
              <span class="text-12 font-noto-sans font-light leading-none whitespace-nowrap">所要時間</span>
              <span class="flex-1 border-b border-dashed border-black"></span>
              <span class="flex items-baseline gap-8 whitespace-nowrap">
                <span class="text-17 font-montserrat font-light leading-none tracking-[0.05em]"><?php echo esc_html($modal['duration']); ?></span>
                <span class="text-18 font-noto-sans font-light leading-none">分</span>
              </span>
            </div>
          </div>

          <ul class="mt-40 flex flex-col items-center gap-16 text-14 font-noto-sans font-light leading-[1.4]">
            <?php foreach ($modal['notes'] as $note) : ?>
              <li>
                <?php echo esc_html($note['text']); ?>
                <?php if (!empty($note['link'])) : ?>
                  <span class="underline"><?php echo esc_html($note['link']); ?></span>
                <?php endif; ?>
              </li>
            <?php endforeach; ?>
          </ul>

          <?php
          $render_course_modal_section('COURSE CONTENTS', 'コース内容', 'Contents', $modal['contents'], $modal['contents_note'] ?? null);
          if (!empty($modal['products'])) {
            $render_course_modal_section('COURSE PRODUCTS', 'コース商品', 'Products', $modal['products']);
          }
          ?>
        </div>
      </div>
    <?php else : ?>
      <div class="relative min-h-300 bg-[#e3dfdf] px-24 pt-24">
        <p class="absolute top-28 left-1/2 -translate-x-1/2 text-16 font-noto-sans font-semibold leading-none text-gray" data-kids-course-modal-group-ja></p>
        <h2 id="<?php echo esc_attr($modal_id); ?>-title" class="absolute top-112 left-0 w-full px-20 text-center text-32 font-montserrat font-semibold leading-[1.2] tracking-[0.02em]" data-kids-course-modal-name></h2>
        <p class="absolute bottom-24 left-0 w-full px-20 text-center text-18 font-noto-sans font-light leading-[1.8] tracking-[0.12em]" data-kids-course-modal-group></p>
      </div>
      <div class="px-40 py-64">
        <p class="text-32 font-montserrat font-light leading-none tracking-[0.05em]" data-kids-course-modal-price></p>
      </div>
    <?php endif; ?>
  </div>
</dialog>
