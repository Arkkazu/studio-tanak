<?php
// TOPページかどうかのフラグ
$is_front_page = is_front_page();
$is_home = (is_home() || $is_front_page);

$site_name = 'スタジオタナカ';
$brand_name = 'スタジオタナカ｜Art Photo Studio TA7CA';
$common_title = '高崎のフォトスタジオ｜' . $brand_name;
$common_desc  = '群馬県高崎市のフォトスタジオ、' . $brand_name . '。七五三、お宮参り、ニューボーン、成人式、卒業袴、家族写真など、大切な記念日を写真とアートで残します。';
$common_ogp   = get_template_directory_uri() . '/images/common/ogp.png';

$og_site_name = $brand_name;
$ogp_img      = $common_ogp;

$title       = $common_title;
$desc        = $common_desc;
$preload_img = [];
$css_name    = '';

$page_meta_defaults = [
  'kids' => [
    'title' => '七五三・入園入学の写真撮影｜高崎のフォトスタジオ ' . $brand_name,
    'desc' => '高崎のフォトスタジオ、' . $brand_name . 'のキッズ撮影。七五三、入園・卒園・入学・卒業、ハーフ成人式を家族の思い出として残します。',
  ],
  'baby' => [
    'title' => 'ニューボーン・お宮参り・誕生日の写真撮影｜高崎のフォトスタジオ ' . $brand_name,
    'desc' => '高崎のフォトスタジオ、' . $brand_name . 'のベビー撮影。ニューボーン、お宮参り、1歳からのお誕生日を自然な表情で撮影します。',
  ],
  'kimono-hakama' => [
    'title' => '成人式・卒業袴の写真撮影｜高崎のフォトスタジオ ' . $brand_name,
    'desc' => '高崎のフォトスタジオ、' . $brand_name . 'の成人式・卒業袴撮影。前撮り、当日撮影、着付け、ヘアメイクまでご案内します。',
  ],
  'others' => [
    'title' => '証明写真・出張撮影・店舗撮影｜高崎のフォトスタジオ ' . $brand_name,
    'desc' => '高崎のフォトスタジオ、' . $brand_name . '。証明写真、店舗・住宅撮影、出張撮影、結婚式前撮りなど幅広い撮影に対応します。',
  ],
  'options' => [
    'title' => '撮影オプション｜高崎のフォトスタジオ ' . $brand_name,
    'desc' => '高崎のフォトスタジオ、' . $brand_name . 'の撮影・販売・レタッチ・出張撮影オプションをご案内します。',
  ],
  'access' => [
    'title' => 'アクセス・店舗情報｜高崎のフォトスタジオ ' . $brand_name,
    'desc' => $brand_name . 'は群馬県高崎市宮元町のフォトスタジオです。店舗へのアクセス、駐車場、地図をご案内します。',
  ],
  'flow' => [
    'title' => 'ご利用の流れ｜高崎のフォトスタジオ ' . $brand_name,
    'desc' => '高崎のフォトスタジオ、' . $brand_name . 'のご予約からご来店、撮影、お写真のお渡しまでの流れをご案内します。',
  ],
  'recruit' => [
    'title' => '採用情報｜高崎のフォトスタジオ ' . $brand_name,
    'desc' => '高崎のフォトスタジオ、' . $brand_name . 'の採用情報です。撮影・接客・ヘアメイクなどのスタッフを募集しています。',
  ],
  'shichigosan' => [
    'title' => '七五三の写真撮影｜高崎のフォトスタジオ ' . $brand_name,
    'desc' => '高崎のフォトスタジオ、' . $brand_name . 'の七五三撮影。衣装、着付け、ヘアメイク、家族撮影までお任せください。',
  ],
];

if ($is_home) {
  // トップページ対象IDの特定
  // - 固定フロント: page_on_front
  // - 投稿一覧: page_for_posts
  $home_post_id = 0;

  if (is_front_page()) {
    $home_post_id = (int) get_option('page_on_front');
  } elseif (is_home()) {
    $home_post_id = (int) get_option('page_for_posts');
  }

  // functions.phpで保存している post meta を取得
  $seo_title = ($home_post_id > 0) ? get_post_meta($home_post_id, '_seo_title', true) : '';
  $seo_desc  = ($home_post_id > 0) ? get_post_meta($home_post_id, '_seo_desc',  true) : '';

  // フォールバック
  $title = empty($seo_title) ? $common_title : $seo_title;
  $desc  = empty($seo_desc)  ? $common_desc  : $seo_desc;

  $css_name = 'home';
  $preload_img = [
    get_template_directory_uri() . '/media/images/home/fv_01.webp',
  ];
} elseif (is_archive()) {
  $slug = get_query_var('post_type');
  switch ($slug) {
    case 'news':
      $title = '新着情報｜' . $brand_name;
      $desc  = $brand_name . 'からのお知らせ、撮影メニューや営業に関する最新情報をご案内します。';
      $css_name = 'news';
      break;
    case 'products':
      $title = '商品一覧｜高崎のフォトスタジオ ' . $brand_name;
      $desc  = '高崎のフォトスタジオ、' . $brand_name . 'で取り扱うアルバムや写真商品をご案内します。';
      $css_name = 'products';
      break;
    case 'ai_gallery':
    case 'ai-gallery':
      $title = 'アートギャラリー｜高崎のフォトスタジオ ' . $brand_name;
      $desc  = '高崎のフォトスタジオ、' . $brand_name . 'のアートギャラリー。作品と写真表現をご紹介します。';
      $css_name = 'gallery';
      break;
    case 'costume':
      $title = '衣装ギャラリー｜高崎のフォトスタジオ ' . $brand_name;
      $desc  = '高崎のフォトスタジオ、' . $brand_name . 'の衣装ギャラリー。撮影で選べる衣装をご紹介します。';
      $css_name = 'costume';
      break;
    default:
      // カテゴリーアーカイブ（/news/ /blog/）。カテゴリーでは get_query_var('post_type') が
      // 空になりここへ落ちるため、カテゴリー名とサイト名で固有のtitleを作る
      // （rules/accessibility.md「ページの基本情報」：各ページに内容と目的を表す固有のtitleを設定する）。
      if (is_category()) {
        $cat_name = single_cat_title('', false);
        $cat_paged = max(1, (int) get_query_var('paged'));
        $title = $cat_name . ($cat_paged > 1 ? '（' . $cat_paged . 'ページ目）' : '') . '｜' . get_bloginfo('name');
        $desc  = $cat_name . 'の一覧ページです。';
        $css_name = 'category';
        break;
      }

      $css_name = '';
      break;
  }
} elseif (is_single()) {
  $post_id = get_queried_object_id();

  // functions.phpで保存している post meta を取得
  $seo_title = ($post_id > 0) ? get_post_meta($post_id, '_seo_title', true) : '';
  $seo_desc  = ($post_id > 0) ? get_post_meta($post_id, '_seo_desc',  true) : '';

  $slug = get_query_var('post_type');

  switch ($slug) {
    case 'news':
      // 未入力時のみ既存ロジックへフォールバック
      $title = empty($seo_title) ? (get_the_title() . '｜' . $brand_name) : $seo_title;
      $desc  = empty($seo_desc)  ? ('高崎のフォトスタジオ ' . $brand_name . 'からのお知らせ「' . get_the_title() . '」です。') : $seo_desc;
      $css_name = 'news';
      break;

    case 'products':
      $title = empty($seo_title) ? (get_the_title() . '｜高崎のフォトスタジオ ' . $brand_name) : $seo_title;
      $desc  = empty($seo_desc)  ? ('高崎のフォトスタジオ ' . $brand_name . 'の商品「' . get_the_title() . '」の詳細ページです。') : $seo_desc;
      $css_name = 'products';
      break;

    default:
      // 通常投稿（NEWS / TOPICS の記事詳細）。post では get_query_var('post_type') が空になり
      // ここへ落ちるため、記事タイトルとサイト名で固有のtitleを作る
      // （rules/accessibility.md「ページの基本情報」：各ページに内容と目的を表す固有のtitleを設定する）。
      if (is_singular('post')) {
        $title = empty($seo_title) ? (get_the_title() . '｜' . get_bloginfo('name')) : $seo_title;
        $desc  = empty($seo_desc)  ? wp_trim_words(wp_strip_all_tags(get_the_excerpt()), 60, '…') : $seo_desc;
        $css_name = 'single';
        break;
      }

      // その他の投稿タイプの場合も meta 優先（未入力時は共通）
      $title = empty($seo_title) ? $common_title : $seo_title;
      $desc  = empty($seo_desc)  ? $common_desc  : $seo_desc;
      $css_name = '';
      break;
  }
} elseif (is_page()) {
  global $wp_query;
  $post_obj = $wp_query->get_queried_object();
  $slug = $post_obj ? $post_obj->post_name : '';

  // 親階層がある場合は最上位の親スラッグを採用
  if ($post_obj) {
    $ancestors = get_post_ancestors($post_obj);
    if (!empty($ancestors)) {
      $top_parent_id = end($ancestors);
      $parent = get_post($top_parent_id);
      if ($parent) {
        $slug = $parent->post_name;
      }
    }
  }

  $page_id   = get_queried_object_id();
  $seo_title = ($page_id > 0) ? get_post_meta($page_id, '_seo_title', true) : '';
  $seo_desc  = ($page_id > 0) ? get_post_meta($page_id, '_seo_desc',  true) : '';

  $page_meta = $page_meta_defaults[$slug] ?? null;
  $fallback_page_title = $page_meta['title'] ?? ((get_the_title($page_id) ?: 'フォトスタジオ') . '｜高崎のフォトスタジオ ' . $brand_name);
  $fallback_page_desc = $page_meta['desc'] ?? ('高崎のフォトスタジオ ' . $brand_name . 'の「' . (get_the_title($page_id) ?: '撮影メニュー') . '」をご案内します。');

  $title = empty($seo_title) ? $fallback_page_title : $seo_title;
  $desc  = empty($seo_desc)  ? $fallback_page_desc  : $seo_desc;


  switch ($slug) {
    case 'about':
      $css_name = 'about';
      break;
    default:
      $css_name = '';
      break;
  }
} elseif (is_404()) {
  $title = 'お探しのページは見つかりませんでした｜' . $site_name;
  $desc  = 'お探しのページは一時的にアクセスができない状況にあるか、移動もしくは削除された可能性があります。URLをご確認いただくか、トップページを表示しメニューより目的のページをお探しください。';
  $css_name = '404';
} else {
  $title = $common_title;
  $desc  = $common_desc;
}

$og_title = $title;
$og_desc  = $desc;

// OGP type（一覧などは website、詳細は article）
$og_type = (is_singular() && !$is_home) ? 'article' : 'website';
$og_url = home_url(add_query_arg(null, null));
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  // 本番/テスト判定
  $siteHost = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
  if (strpos($siteHost, 'XXXXXX.jp') !== false) : ?>
    <!-- Google tag (gtag.js) -->
    <!-- TODO GTMの埋め込み確認 -->
  <?php else : ?>
    <!-- テストサイト -->
  <?php endif; ?>

  <meta charset="UTF-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <?php
  //// インラインcss
  // 読み込み対象をホワイトリスト化します
  $inline_css_files = $is_home
    ? array('first_view_home', 'splide-core.min')
    : array('first_view_lower');

  $allowed = array('first_view_home', 'first_view_lower', 'splide-core.min');
  $first_view = '';
  $theme_uri = untrailingslashit(get_template_directory_uri());

  foreach ($inline_css_files as $css_file) {
    if (!in_array($css_file, $allowed, true)) {
      continue;
    }

    $css_path = get_template_directory() . '/css/' . $css_file . '.css';

    if (!file_exists($css_path) || !is_readable($css_path)) {
      continue;
    }

    $css = file_get_contents($css_path);

    if ($css === false) {
      continue;
    }

    // 先頭の @charset を除去
    $tmp = preg_replace('/^\s*@charset\s+[\'"]utf-8[\'"]\s*;\s*/i', '', $css);
    if ($tmp !== null) {
      $css = $tmp;
    }

    // </style> の混入対策
    $css = str_replace('</style>', '<\/style>', $css);

    // ../ をテーマURIへ寄せる（仕様固定が前提）
    $tmp = preg_replace(
      '#url\(\s*([\'"]?)\.\./#',
      'url($1' . $theme_uri . '/',
      $css
    );
    if ($tmp !== null) {
      $css = $tmp;
    }

    $first_view .= "\n" . $css;
  }
  ?>

  <?php if ($first_view !== '') : ?>
    <style id="critical-first-view">
      <?php echo $first_view; ?>
    </style>
  <?php endif; ?>

  <?php if ($is_front_page) : ?>
    <style id="front-page-header-intro">
      .js-fv-header {
        visibility: hidden;
        opacity: 0;
      }

      @media (prefers-reduced-motion: reduce) {
        .js-fv-header {
          visibility: visible;
          opacity: 1;
        }
      }
    </style>
  <?php endif; ?>


  <title><?php echo esc_html($title); ?></title>
  <meta name="description" content="<?php echo esc_attr($desc); ?>">

  <meta property="og:url" content="<?php echo esc_url($og_url); ?>">
  <meta property="og:type" content="<?php echo esc_attr($og_type); ?>">
  <meta property="og:title" content="<?php echo esc_attr($og_title); ?>">
  <meta property="og:description" content="<?php echo esc_attr($og_desc); ?>">
  <meta property="og:site_name" content="<?php echo esc_attr($og_site_name); ?>">
  <meta property="og:image" content="<?php echo esc_url($ogp_img); ?>">

  <link rel="apple-touch-icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri() . '/media/images/common/apple-touch-icon.png'); ?>" sizes="180x180">
  <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri() . '/media/images/common/android-chrome.png'); ?>" sizes="192x192">

  <!-- <?php
        // preload
        // if (!empty($preload_img)) {
        //   foreach ((array)$preload_img as $img) {
        //     if (!empty($img)) {
        //       echo '<link rel="preload" href="' . esc_url($img) . '" as="image">' . "\n";
        //     }
        //   }
        // }
        ?> -->



  <?php
  // 構造化データ
  get_template_part('inc', 'ld');

  wp_head();
  ?>
</head>

<body <?php body_class('bg-white'); ?>>
  <?php get_template_part('template-parts/common/inc', 'header'); ?>
  <?php get_template_part('template-parts/common/inc', 'sp-menu'); ?>
  <div class="js-scroll-container flex-1 overflow-x-hidden flex flex-col justify-between">
