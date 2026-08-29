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
      ['label' => '足袋（こはぜ付き 22.5cm～）', 'price' => '¥1,650'],
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
    'title' => 'DATA RETOUCHIG OPTION',
    'title_ja' => 'データレタッチオプション（10 カット毎）',
    'items' => [
      ['label' => '美肌加工', 'price' => '¥5,500'],
      ['label' => '髪色補正（プリン）', 'price' => '¥5,500'],
      ['label' => '細身加工（輪郭）', 'price' => '¥5,500'],
      ['label' => '歯の白さ補正', 'price' => '¥5,500'],
      ['label' => '手の血管補正', 'price' => '¥5,500'],
    ],
  ],
];

get_header();
?>

<main class="overflow-hidden bg-white pb-160 pc:pb-240">
  <section class="relative px-20 pt-120">
    <div class="relative mx-auto max-w-688">
      <div class="vertical-rl-mixed absolute left-0 top-80 flex items-end gap-12">
        <h1 class="text-18 font-montserrat font-light leading-none tracking-[0.18em] pc:text-24">
          OPTIONS
        </h1>
      </div>
      <div class="mx-auto w-280 pc:w-560">
        <?php [$src, $wh] = theme_img_src_wh('src/images/options/kv.webp'); ?>
        <img class="block w-full" src="<?php echo $src; ?>" alt="" loading="eager" fetchpriority="high" <?php echo $wh; ?>>
      </div>
    </div>
  </section>

  <section class="mt-120 px-20 pc:mt-160">
    <div class="mx-auto max-w-688">
      <div class="flex flex-col items-center gap-6">
        <h2 class="text-16 font-montserrat font-light leading-[1.2] tracking-[0.05em] pc:text-18">
          OPTIONS
        </h2>
        <p class="text-10 font-light leading-[1.2] text-gray pc:text-13">
          オプション
        </p>
      </div>

      <ul class="mt-80 grid gap-y-56 px-20 pc:grid-cols-2 pc:gap-x-120 pc:gap-y-64">
        <?php foreach ($option_modals as $option_modal) : ?>
          <li class="pl-40">
            <button
              type="button"
              class="js-kids-course-modal-trigger flex w-full items-center justify-between gap-20 border-b border-[#605f5f] px-4 pb-12 text-left transition-opacity duration-300 hoverable:hover:opacity-50"
              aria-controls="<?php echo esc_attr($option_modal['id']); ?>"
              aria-haspopup="dialog"
              data-kids-course-modal-target="<?php echo esc_attr($option_modal['id']); ?>">
              <span class="flex flex-col gap-6">
                <span class="text-13 font-montserrat font-light leading-none tracking-[0.05em] pc:text-15">
                  <?php echo esc_html($option_modal['title']); ?>
                </span>
                <span class="text-10 font-light leading-none text-gray pc:text-12">
                  <?php echo esc_html($option_modal['title_ja']); ?>
                </span>
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
