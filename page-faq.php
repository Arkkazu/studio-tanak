<?php
/* Template Name: FAQページ */

[$faq_fv_pc_src, $faq_fv_pc_wh] = theme_img_src_wh('src/images/faq/fv-pc.webp');
[$faq_fv_sp_src, $faq_fv_sp_wh] = theme_img_src_wh('src/images/faq/fv-sp.webp');
[$faq_arrow_src, $faq_arrow_wh] = theme_img_src_wh('src/images/common/arrow-right.svg');

/*
 * 質問と回答。本文は旧テーマ studio-tanaka_theme/page-faq.php の内容を引き継ぐ。
 * answers は段落の配列で持つ。旧テーマが1つの span 内で改行していた箇所は
 * 意味の切れ目ごとに段落へ分けた（改行位置を端末幅に依存させないため）。
 * link がある項目だけ、回答の下に関連ページへの導線を1本出す。
 */
$faq_items = [
  [
    'question' => 'キャンセル料はかかりますか？',
    'answers'  => ['当日の無断キャンセルのみご予約のプラン料金の100%を頂戴しております。詳しくはご利用の流れをご確認ください。'],
    'link'     => ['label' => 'ご利用の流れはこちら', 'path' => '/flow/'],
  ],
  [
    'question' => '駐車場はありますか？',
    'answers'  => ['当店入り口向かいにございます。当店用でお借りしている駐車場がございますので詳細はアクセスページまたは店舗スタッフにお問い合わせ下さい。'],
  ],
  [
    'question' => '定休日はいつですか？',
    'answers'  => ['毎週火曜日、第一・第三水曜日が定休日となります。'],
  ],
  [
    'question' => '営業時間を教えてください。',
    'answers'  => ['10:00〜18:00となります。早朝のご予約も承っておりますのでご相談下さい。'],
  ],
  [
    'question' => '営業時間外の予約はできますか？',
    'answers'  => [
      '時間外のご予約対応も可能です。',
      '１時間あたり１１００円（税込）の追加料金となります。',
      '成人式当日、七五三シーズンの特定のお日にちは早朝料金はいただいておりません。',
    ],
  ],
  [
    'question' => '忘れもの / 落とし物に関して',
    'answers'  => ['保管期限は２週間とさせて頂いております。'],
  ],
  [
    'question' => '撮影時間はどのくらいかかりますか？',
    'answers'  => ['メニュー毎に異なりますが短くて１５分〜１時間ほどになります。'],
  ],
  [
    'question' => '家族や兄弟、親戚も一緒に撮影できますか？',
    'answers'  => ['撮影可能です。衣裳や着付け、ヘアセットの必要性があれば追加料金を頂く場合もございますのでお気軽にご相談下さい。'],
  ],
  [
    'question' => 'スタジオ内でのスマホ撮影は可能ですか？',
    'answers'  => [
      'スタジオ内での撮影は禁止となっております。',
      'スタジオ以外の待ち時間等でのスマホ撮影はOKです。',
    ],
  ],
  [
    'question' => '衣裳は何着までOKですか？',
    'answers'  => ['プランにより１〜２着のお客様が多いです。３着のお客様もいらっしゃいますが、別途衣裳レンタル代が発生する場合もありますので、ご相談下さい。'],
  ],
  [
    'question' => '肌荒れや傷跡の補正はできますか？',
    'answers'  => ['可能です。別途レタッチオプションメニューがございますので、気になる点がございましたらご来店時にご相談下さい。'],
    'link'     => ['label' => 'オプションメニューはこちら', 'path' => '/options/'],
  ],
  [
    'question' => 'お出かけレンタルはできますか？',
    'answers'  => ['お出かけレンタル可能です。お出かけ用メニューございますのでご相談下さい。'],
  ],
  [
    'question' => 'どのくらいで納品されますか？',
    'answers'  => [
      '・データのみのお渡しの場合は１〜２週間以内にLINEからお渡し致します。',
      '・アルバムのお渡しは１か月（繁忙期は１〜２か月）でのお渡しとなります。',
    ],
  ],
  [
    'question' => '写真データを携帯に送る方法が知りたいです。',
    'answers'  => [
      '手順１：ご自身のパソコンにLINEアプリをインストールする',
      '手順２：パソコンのデスクトップ上でLINEアプリを開く',
      '手順３：ご自身の携帯でLINEを開き、デスクトップ上に開いたLINEのQRコードを読み込む',
      '手順４：パソコンのLINEのトークルームに写真をドロップする',
      '手順５：ご自身の携帯からトークルームにて写真を保存する',
    ],
  ],
];

get_header();
?>

<main class="overflow-hidden bg-white pb-160 pc:pb-240">
  <section class="relative aspect-square pc:aspect-[1920/480] overflow-hidden bg-[#f1ede7]" aria-labelledby="faq-page-title">
    <div class="relative h-full">
      <div class="absolute inset-0 mx-auto max-w-920">
        <h1 id="faq-page-title" class="absolute left-24 pc:left-64 top-96 pc:top-176 z-10 text-18 pc:text-20 text-white font-montserrat font-light leading-none tracking-[0.18em] pc:tracking-[0.22em] [writing-mode:vertical-rl] pc:[writing-mode:horizontal-tb]">
          FAQ
        </h1>
      </div>
      <picture>
        <source media="(min-width: 1272px)" srcset="<?php echo esc_url($faq_fv_pc_src); ?>">
        <img class="absolute inset-0 block h-full w-full object-cover" src="<?php echo esc_url($faq_fv_sp_src); ?>" alt="" loading="eager" fetchpriority="high" <?php echo $faq_fv_sp_wh; ?>>
      </picture>
    </div>
  </section>

  <section class="px-20 pt-80 pc:pt-150" aria-labelledby="faq-list-title">
    <div class="mx-auto max-w-600">
      <h2 id="faq-list-title" class="sr-only">よくあるご質問</h2>

      <div class="flex flex-col gap-40">
        <?php foreach ($faq_items as $faq_index => $faq_item) : ?>
          <?php
          $faq_number      = $faq_index + 1;
          $faq_question_id = 'faq-question-' . $faq_number;
          $faq_answer_id   = 'faq-answer-' . $faq_number;
          ?>
          <div class="border border-black">
            <h3>
              <button id="<?php echo esc_attr($faq_question_id); ?>" class="js-faq-trigger flex w-full items-center gap-12 px-16 py-14 text-left text-12 pc:text-14 font-noto-sans leading-[1.6] transition-opacity duration-300 hoverable:hover:opacity-50" type="button" aria-controls="<?php echo esc_attr($faq_answer_id); ?>" aria-expanded="false">
                <span class="flex h-20 w-20 shrink-0 items-center justify-center border border-black text-10 font-montserrat leading-none" aria-hidden="true">Q</span>
                <span class="grow"><?php echo esc_html($faq_item['question']); ?></span>
                <svg class="js-faq-trigger-icon block h-10 w-10 shrink-0 transition-transform duration-300" viewBox="0 0 10 10" fill="none" focusable="false" aria-hidden="true">
                  <path d="M1 3.5L5 7L9 3.5" stroke="currentColor" stroke-width="1" vector-effect="non-scaling-stroke" />
                </svg>
              </button>
            </h3>
            <div id="<?php echo esc_attr($faq_answer_id); ?>" class="js-faq-panel h-0 overflow-hidden transition-[height] duration-500" role="region" aria-labelledby="<?php echo esc_attr($faq_question_id); ?>" aria-hidden="true" inert>
              <div class="flex gap-12 border-t border-black px-16 py-14">
                <span class="flex h-20 w-20 shrink-0 items-center justify-center bg-black text-10 text-white font-montserrat leading-none" aria-hidden="true">A</span>
                <div class="grow text-12 pc:text-14 font-noto-sans leading-[1.8] text-gray">
                  <?php foreach ($faq_item['answers'] as $faq_answer_index => $faq_answer) : ?>
                    <p class="<?php echo $faq_answer_index === 0 ? '' : 'mt-8'; ?>">
                      <?php echo esc_html($faq_answer); ?>
                    </p>
                  <?php endforeach; ?>
                  <?php if (!empty($faq_item['link'])) : ?>
                    <p class="mt-16 text-center">
                      <a class="inline-flex items-center gap-8 transition-opacity duration-300 hoverable:hover:opacity-50" href="<?php echo esc_url(home_url($faq_item['link']['path'])); ?>">
                        <span class="underline"><?php echo esc_html($faq_item['link']['label']); ?></span>
                        <img class="block w-[10.54rem]" src="<?php echo esc_url($faq_arrow_src); ?>" alt="" aria-hidden="true" loading="lazy" <?php echo $faq_arrow_wh; ?>>
                      </a>
                    </p>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
