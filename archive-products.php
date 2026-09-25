<?php
/**
 * Products archive. The supplied product images are the source of truth for
 * the catalog; the _1 images are for cards and the _2 images are for dialogs.
 */

$products = [
  [
    'name' => 'HISTOIRE',
    'name_ja' => 'イストワール',
    'image' => 'HISTOIRE',
    'description' => 'ソフトカバータイプの雑誌風ブック',
    'size' => '212×275×8(10P)',
    'price' => '20P ¥33,000 / 10P ¥27,500',
  ],
  ['name' => 'PETIT BOIS', 'image' => 'PETIT BOIS'],
  ['name' => 'MURAL', 'image' => 'MURAL'],
  ['name' => 'TRESOR', 'image' => 'NOW PRINTING'],
  ['name' => 'ORIGINAL ALBUM STAND', 'image' => 'NOW PRINTING'],
  ['name' => 'ART DATA', 'image' => 'ART DATA'],
];

$additional_prices = [
  ['name' => 'レタッチ済みデータ', 'price' => '¥22,000'],
  ['name' => '手札', 'price' => '¥2,200'],
  ['name' => 'キャビネ', 'price' => '¥3,300'],
  ['name' => '八つ切り', 'price' => '¥4,400'],
  ['name' => '六つ切り', 'price' => '¥5,500'],
  ['name' => '四つ切り', 'price' => '¥6,600'],
];

[$fv_pc_src] = theme_img_src_wh('src/images/products/fv-pc.webp');
[$fv_sp_src, $fv_sp_wh] = theme_img_src_wh('src/images/products/fv-sp.webp');
[$arrow_src, $arrow_wh] = theme_img_src_wh('src/images/common/circe-arrow-right.svg');

get_header();
?>

<main class="overflow-hidden bg-white pb-120 pc:pb-240">
  <section class="relative aspect-square pc:aspect-[1920/400] overflow-hidden bg-[#f1ede7]" aria-labelledby="products-title">
    <picture>
      <source media="(min-width: 1272px)" srcset="<?php echo $fv_pc_src; ?>">
      <img class="absolute inset-0 block h-full w-full object-cover" src="<?php echo $fv_sp_src; ?>" alt="" loading="eager" fetchpriority="high" <?php echo $fv_sp_wh; ?>>
    </picture>
    <div class="absolute inset-0 mx-auto max-w-800">
      <h1 id="products-title" class="absolute left-24 pc:left-64 top-88 pc:top-190 text-18 pc:text-20 font-montserrat font-light leading-none tracking-[0.18em] pc:tracking-[0.22em] text-white [writing-mode:vertical-rl] pc:[writing-mode:horizontal-tb]">
        P R O D U C T S
      </h1>
    </div>
  </section>

  <section class="mx-auto mt-80 pc:mt-150 max-w-920 px-20 pc:px-40" aria-labelledby="products-list-title">
    <h2 id="products-list-title" class="sr-only">商品一覧</h2>
    <ul class="mx-auto grid max-w-560 grid-cols-2 pc:grid-cols-3 gap-x-20 pc:gap-x-40 gap-y-40">
      <?php foreach ($products as $index => $product) : ?>
        <?php
        [$card_src, $card_wh] = theme_img_src_wh('src/images/products/product_' . $product['image'] . '_1@2x.webp');
        ?>
        <li class="min-w-0 transition-all duration-700 ease-out" data-products-reveal>
          <button type="button" class="js-products-trigger group block w-full text-left" data-product-index="<?php echo esc_attr((string) $index); ?>" aria-haspopup="dialog" aria-controls="products-dialog" aria-label="<?php echo esc_attr($product['name'] . 'の商品詳細を開く'); ?>">
            <img class="block aspect-[315/321] w-full object-cover" src="<?php echo $card_src; ?>" alt="" loading="lazy" <?php echo $card_wh; ?>>
            <span class="mt-4 flex min-h-24 items-center justify-between gap-8">
              <span class="min-w-0 flex-1 text-center text-10 pc:text-11 font-montserrat font-light leading-[1.3] tracking-[0.05em] break-words"><?php echo esc_html($product['name']); ?></span>
              <img class="block w-16 shrink-0 transition-transform duration-300 group-hover:translate-x-2" src="<?php echo $arrow_src; ?>" alt="" loading="lazy" <?php echo $arrow_wh; ?>>
            </span>
          </button>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <section class="mx-auto mt-80 max-w-350 px-24" aria-labelledby="products-prices-title">
    <h2 id="products-prices-title" class="sr-only">その他の商品価格</h2>
    <dl class="flex flex-col gap-16">
      <?php foreach ($additional_prices as $item) : ?>
        <div class="flex items-baseline gap-10 text-10 pc:text-12 font-light leading-[1.4]">
          <dt class="shrink-0"><?php echo esc_html($item['name']); ?></dt>
          <span class="min-w-0 flex-1 border-b border-dashed border-[#605f5f]" aria-hidden="true"></span>
          <dd class="shrink-0 font-montserrat"><?php echo esc_html($item['price']); ?></dd>
        </div>
      <?php endforeach; ?>
    </dl>
    <p class="mt-24 text-right text-8 pc:text-10 font-light">※全て税込価格となります</p>
  </section>
</main>

<dialog id="products-dialog" class="js-products-dialog fixed inset-0 m-0 h-dvh max-h-none w-full max-w-none overflow-y-auto bg-[#797575] pc:bg-transparent p-0 text-[#231815] backdrop:bg-black/60" aria-label="商品詳細">
  <div class="flex min-h-full flex-col items-center justify-center pc:p-40">
    <div class="relative w-full pc:max-w-500 bg-[#797575] pc:px-60 pc:pt-60">
      <div class="relative h-60 pc:h-0">
        <button type="button" class="js-products-close absolute right-20 pc:-right-48 top-8 pc:-top-52 z-10 flex h-44 w-44 items-center justify-center text-32 font-thin leading-none text-white" aria-label="商品詳細を閉じる">×</button>
      </div>
      <?php foreach ($products as $index => $product) : ?>
        <?php [$detail_src, $detail_wh] = theme_img_src_wh('src/images/products/product_' . $product['image'] . '_2@2x.webp'); ?>
        <section class="js-products-panel bg-white px-40 pc:px-40 pt-40 pc:pt-40 pb-24 pc:pb-24" data-product-panel="<?php echo esc_attr((string) $index); ?>" aria-labelledby="products-panel-title-<?php echo esc_attr((string) $index); ?>" hidden>
          <h2 id="products-panel-title-<?php echo esc_attr((string) $index); ?>" class="text-center text-12 pc:text-12 font-montserrat font-medium tracking-[0.08em]"><?php echo esc_html($product['name']); ?></h2>
          <?php if (!empty($product['name_ja'])) : ?>
            <p class="mt-4 text-center text-9 pc:text-9 font-light"><?php echo esc_html($product['name_ja']); ?></p>
          <?php endif; ?>
          <img class="mx-auto mt-32 pc:mt-32 block w-full max-w-591 object-contain" src="<?php echo $detail_src; ?>" alt="<?php echo esc_attr($product['name']); ?>" loading="lazy" <?php echo $detail_wh; ?>>
          <?php if (!empty($product['description'])) : ?>
            <div class="mt-16 text-center text-9 font-light leading-[1.8]">
              <p><?php echo esc_html($product['description']); ?></p>
              <p><span class="font-montserrat">size:</span><?php echo esc_html($product['size']); ?>　<span class="font-montserrat">price:</span><?php echo esc_html($product['price']); ?></p>
            </div>
          <?php endif; ?>
        </section>
      <?php endforeach; ?>
      <nav class="flex items-center justify-center gap-56 py-12" aria-label="商品詳細の切り替え">
        <button type="button" class="js-products-prev flex h-40 w-40 items-center justify-center text-28 font-light text-white" aria-label="前の商品">‹</button>
        <button type="button" class="js-products-next flex h-40 w-40 items-center justify-center text-28 font-light text-white" aria-label="次の商品">›</button>
      </nav>
    </div>
  </div>
</dialog>

<?php get_footer(); ?>
