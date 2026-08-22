<?php
$shooting_menu_items = [
  ['label' => 'ニューボーン', 'path' => '/newborn/'],
  ['label' => 'お宮参り', 'path' => '/omiyamairi/'],
  ['label' => 'バースデー', 'path' => '/birthday/'],
  ['label' => '七五三', 'path' => '/shichigosan/'],
  ['label' => '入園・卒園・入学・卒業', 'path' => '/admission-graduation/'],
  ['label' => 'ハーフ成人式', 'path' => '/half-coming-of-age/'],
  ['label' => '成人式女性', 'path' => '/coming-of-age-women/'],
  ['label' => '成人式男性', 'path' => '/coming-of-age-men/'],
  ['label' => '卒業袴', 'path' => '/graduation-hakama/'],
  ['label' => '家族撮影・記念撮影', 'path' => '/family-photo/'],
  ['label' => 'ポートレート撮影', 'path' => '/portrait/'],
  ['label' => '証明写真', 'path' => '/id-photo/'],
  ['label' => '遺影撮影', 'path' => '/funeral-photo/'],
  ['label' => '出張撮影', 'path' => '/location-photo/'],
  ['label' => '店舗・住宅撮影', 'path' => '/store-home-photo/'],
  ['label' => '結婚式前撮り（ロケ撮影）', 'path' => '/wedding-photo/'],
  ['label' => 'オプションメニュー', 'path' => '/option/'],
];

$site_menu_items = [
  ['label' => 'Art gallery', 'path' => '/art-gallery/'],
  ['label' => 'News/Topics', 'path' => '/news/'],
  ['label' => 'Clothing', 'path' => '/clothing/'],
  ['label' => 'Product', 'path' => '/product/'],
  ['label' => 'Q&A', 'path' => '/qa/'],
  ['label' => 'Access', 'path' => '/access/'],
  ['label' => 'Reservation', 'path' => '/reservation/'],
  ['label' => 'Usage flow', 'path' => '/usage-flow/'],
  ['label' => 'Recruit', 'path' => '/recruit/'],
];
?>

<div id="sp-menu" class="js-sp-menu fixed inset-0 z-[700] bg-[#323232] opacity-0 pointer-events-none transition-opacity duration-500" aria-hidden="true" inert>
  <div class="h-full overflow-y-auto overscroll-contain px-40 pt-60 pb-48">
    <nav aria-label="サイトメニュー">
      <ul class="mt-6 flex flex-col gap-18 pl-12">
        <li>
          <button type="button" class="js-sp-shooting-menu-trigger flex w-full items-center gap-6 text-left text-15 text-white font-montserrat font-semibold leading-[1.2] tracking-[0.05em] transition-opacity duration-300 hoverable:hover:opacity-50" aria-controls="sp-shooting-menu" aria-expanded="false">
            <span class="block h-10 w-10 shrink-0" aria-hidden="true">
              <svg class="block h-full w-full" viewBox="0 0 10 10" fill="none" focusable="false" aria-hidden="true">
                <path d="M0 5H10" stroke="currentColor" stroke-width="1" vector-effect="non-scaling-stroke" />
                <path class="js-sp-shooting-menu-trigger-icon origin-center transition-transform duration-300 [transform-box:view-box]" d="M5 0V10" stroke="currentColor" stroke-width="1" vector-effect="non-scaling-stroke" />
              </svg>
            </span>
            <span>Shooting menu</span>
          </button>
          <div id="sp-shooting-menu" class="js-sp-shooting-menu-panel h-0 overflow-hidden transition-[height] duration-500" aria-hidden="true" inert>
            <ul class="pt-6">
              <?php foreach ($shooting_menu_items as $item) : ?>
                <li>
                  <a class="block pl-32 text-14 text-white font-noto-sans font-thin leading-[2.5] transition-opacity duration-300 hoverable:hover:opacity-50" href="<?php echo esc_url(home_url($item['path'])); ?>">
                    <?php echo esc_html($item['label']); ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </li>
        <?php foreach ($site_menu_items as $item) : ?>
          <li>
            <a class="block text-15 text-white font-montserrat font-semibold leading-[1.2] tracking-[0.05em] transition-opacity duration-300 hoverable:hover:opacity-50" href="<?php echo esc_url(home_url($item['path'])); ?>">
              <?php echo esc_html($item['label']); ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>

      <span class="mt-48 ml-12 flex h-32 w-32 items-center justify-center text-white" role="img" aria-label="Instagram">
        <svg class="h-full w-full" viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="2"></rect>
          <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="2"></circle>
          <circle cx="17.5" cy="6.5" r="1" fill="currentColor"></circle>
        </svg>
      </span>
    </nav>
  </div>
</div>