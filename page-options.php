<?php
/* Template Name: OPTIONSページ */

$option_modals = [
  [
    'id' => 'options-modal-shooting',
    'title' => 'SHOOTING OPTION',
    'title_ja' => '撮影オプション',
    'items' => [
      ['label' => '兄弟（姉妹）撮影', 'price' => '¥5,500'],
      ['label' => '家族撮影（４名以下）', 'price' => '¥5,500'],
      ['label' => '家族撮影（５名以上）※', 'price' => '¥8,800'],
      ['label' => '子供洋衣装レンタル', 'price' => '¥7,700'],
      ['label' => "大人（母）着物レンタル\n（着付け代）", 'price' => '¥13,200'],
      ['label' => "大人（父）着物レンタル\n（着付け代）", 'price' => '¥13,200'],
      ['label' => '兄弟着物レンタル＋着付け', 'price' => '¥7,700'],
      ['label' => '姉妹着物レンタル＋着付け', 'price' => '¥9,900'],
      ['label' => '姉妹被布レンタル＋着付け', 'price' => '¥7,700'],
      ['label' => 'ヘアアップセット', 'price' => '¥5,500'],
      ['label' => "ヘアダウンセット\n（ブロー／アレンジ）", 'price' => '¥3,300'],
      ['label' => 'メイク', 'price' => '¥5,500'],
      ['label' => 'キッズメイク', 'price' => '¥2,200'],
      ['label' => '振袖着付け代（成人）', 'price' => '¥16,500'],
      ['label' => '振袖用ヘアセット（成人）', 'price' => '¥6,600'],
      ['label' => '外出衣装貸し出し（お宮参り）', 'price' => '¥9,900'],
      ['label' => '７５３用手結び帯', 'price' => '¥2,200'],
      ['label' => '外出衣装貸し出し（ハーフ成人）', 'price' => '¥27,500'],
      ['label' => 'レンタル振袖＋ママ振２着撮影', 'price' => '¥27,500'],
    ],
    'note' => "※家族撮影無しの場合。\n　家族撮影付プランの場合は3300円",
  ],
  [
    'id' => 'options-modal-sales',
    'title' => 'SALES OPTION',
    'title_ja' => '販売オプション',
    'items' => [
      ['label' => '肌襦袢', 'price' => '¥1,320'],
      ['label' => '裾よけ', 'price' => '¥1,430'],
      ['label' => '足袋（こはぜ付き 22.5cm ～）', 'price' => '¥1,650'],
      ['label' => '髪飾り', 'price' => '¥1,100～'],
      ['label' => 'レギンス', 'price' => '¥1,320'],
      ['label' => 'U 首半袖シャツ', 'price' => '¥880'],
      ['label' => '子供用足袋（こはぜ無し）', 'price' => '¥770'],
    ],
  ],
  [
    'id' => 'options-modal-retouching',
    'title' => 'RETOUCHING OPTION',
    'title_ja' => 'レタッチオプション（証明写真）',
    'items' => [
      ['label' => '美肌加工', 'price' => '¥1,100'],
      ['label' => '髪色補正（プリン）', 'price' => '¥1,100'],
      ['label' => '細身加工（輪郭）', 'price' => '¥1,100'],
      ['label' => '歯の白さ補正', 'price' => '¥1,100'],
      ['label' => '手の血管補正', 'price' => '¥1,100'],
    ],
  ],
  [
    'id' => 'options-modal-others',
    'title' => 'OTHERS OPTION',
    'title_ja' => 'その他のオプション',
    'menu_label' => 'その他',
    'items' => [
      ['label' => 'データをＵＳＢでのお渡しに変更', 'price' => '¥1,100'],
      ['label' => '７５３外出衣装１泊延長', 'price' => '¥5,500'],
      ['label' => 'お宮参り外出衣裳延長', 'price' => '¥5,500'],
    ],
  ],
  [
    'id' => 'options-modal-location',
    'title' => 'LOCATION PHOTO OPTION',
    'title_ja' => '出張撮影オプション',
    'items' => [
      ['label' => '出張撮影', 'price' => '¥33,000'],
      ['label' => '５km 毎に追加料金※', 'price' => '¥1,100'],
      ['label' => '出張撮影当日キャンセル', 'price' => '¥33,000'],
    ],
    'note' => '※6km 以内は別途料金不要',
  ],
  [
    'id' => 'options-modal-id-photo',
    'title' => 'ID PHOTO OPTION',
    'title_ja' => '証明写真オプション',
    'items' => [
      ['label' => '焼き増し１枚ごと', 'price' => '¥550'],
      ['label' => '焼き増しサイズ変更', 'price' => '¥550'],
      ['label' => 'プリントしたカットのデータ販売', 'price' => '¥3,300'],
      ['label' => "ヘアスタイリング\n（ブロー or ポニーテール or メンズ）", 'price' => '¥1,650'],
      ['label' => 'ヘアアレンジ', 'price' => '¥4,400'],
      ['label' => '証明用メイク', 'price' => '¥2,200'],
      ['label' => '当日仕上げ', 'price' => '¥1,100'],
    ],
  ],
  [
    'id' => 'options-modal-date-time',
    'title' => 'DATE & TIME OPTION',
    'title_ja' => '日時オプション',
    'items' => [
      ['label' => "早朝料金（１時間毎）\n※成人当日は除外", 'price' => '¥2,200'],
    ],
  ],
  [
    'id' => 'options-modal-data-retouching',
    'title' => 'DATA RETOUCHING OPTION',
    'title_ja' => 'データレタッチオプション（10 カット毎）',
    'menu_label' => 'データレタッチオプション',
    'items' => [
      ['label' => '美肌加工', 'price' => '¥5,500'],
      ['label' => '髪色補正（プリン）', 'price' => '¥5,500'],
      ['label' => '細身加工（輪郭）', 'price' => '¥5,500'],
      ['label' => '歯の白さ補正', 'price' => '¥5,500'],
      ['label' => '手の血管補正', 'price' => '¥5,500'],
    ],
  ],
];

$option_display_order = [
  'options-modal-shooting',
  'options-modal-date-time',
  'options-modal-id-photo',
  'options-modal-sales',
  'options-modal-location',
  'options-modal-retouching',
  'options-modal-data-retouching',
  'options-modal-others',
];
usort($option_modals, static function (array $left, array $right) use ($option_display_order): int {
  return array_search($left['id'], $option_display_order, true) <=> array_search($right['id'], $option_display_order, true);
});

get_header();
?>

<main class="overflow-hidden bg-white pb-160 pc:pb-240">
  <section class="relative aspect-square pc:aspect-[1920/480] overflow-hidden bg-[#f1ede7]">
    <div class="relative h-full">
      <div class="absolute inset-0 mx-auto max-w-920">
        <div class="absolute left-24 pc:left-64 top-96 pc:top-176 z-10 flex items-end gap-12 [writing-mode:vertical-rl] pc:[writing-mode:horizontal-tb]">
        <h1 class="text-18 font-montserrat font-light leading-none tracking-[0.18em] pc:text-24">
          OPTIONS
        </h1>
        </div>
      </div>
      <?php [$fv_pc_src, $fv_pc_wh] = theme_img_src_wh('src/images/options/ta7ca_pc_option01@2x.webp'); ?>
      <?php [$fv_sp_src, $fv_sp_wh] = theme_img_src_wh('src/images/options/ta7ca_sp_option01@2x.webp'); ?>
      <picture>
        <source media="(min-width: 1272px)" srcset="<?php echo esc_url($fv_pc_src); ?>">
        <img class="absolute inset-0 block h-full w-full object-cover" src="<?php echo esc_url($fv_sp_src); ?>" alt="" loading="eager" fetchpriority="high" <?php echo $fv_sp_wh; ?>>
      </picture>
    </div>
  </section>

  <section class="mt-120 pc:mt-150 px-40">
    <div class="mx-auto max-w-1116 pc:relative">
      <div class="flex flex-col items-center gap-6">
        <h2 class="text-16 font-montserrat font-light leading-[1.2] tracking-[0.05em] pc:text-18">
          OPTIONS
        </h2>
        <p class="text-10 font-light leading-[1.2] text-gray pc:text-13">
          オプション
        </p>
      </div>

      <ul class="mt-20 pc:mt-80 pc:mx-auto grid gap-y-80 pc:w-800 pc:grid-cols-2 pc:gap-x-120 pc:justify-items-center">
        <?php foreach ($option_modals as $option_modal) : ?>
          <li class="w-full">
            <button
              type="button"
              class="js-kids-course-modal-trigger flex w-full items-center justify-between gap-20 border-b border-[#605f5f] px-4 pb-12 text-left transition-opacity duration-300 hoverable:hover:opacity-50"
              aria-controls="<?php echo esc_attr($option_modal['id']); ?>"
              aria-haspopup="dialog"
              data-kids-course-modal-target="<?php echo esc_attr($option_modal['id']); ?>">
              <span class="font-noto-sans text-12 font-light leading-none">
                <?php echo esc_html($option_modal['menu_label'] ?? $option_modal['title_ja']); ?>
              </span>
              <?php [$src, $wh] = theme_img_src_wh('src/images/common/circe-arrow-right.svg'); ?>
              <img class="block w-16 shrink-0" src="<?php echo $src; ?>" alt="" loading="lazy" <?php echo $wh; ?>>
            </button>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
</main>

<?php
add_action('wp_footer', static function () use ($option_modals): void {
  foreach ($option_modals as $option_modal) {
    get_template_part('template-parts/common/inc-options-modal', null, ['modal' => $option_modal]);
  }
}, 5);
?>

<?php get_footer(); ?>
