<?php
// TOPページかどうかのフラグ
$is_home = (is_home() || is_front_page());

$common_title = '';
$common_desc  = '';
$common_ogp   = get_template_directory_uri() . '/images/common/ogp.png';

$og_site_name = get_bloginfo('name');
$ogp_img      = $common_ogp;

$title       = $common_title;
$desc        = $common_desc;
$preload_img = [];
$css_name    = '';

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
      $title = '新着情報｜○○（案件名）';
      $desc  = '新着情報一覧ページです。';
      $css_name = 'news';
      break;
    case 'products':
      $title = '商品一覧｜○○（案件名）';
      $desc  = '商品の一覧ページです。';
      $css_name = 'products';
      break;
    default:
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
      $title = empty($seo_title) ? (get_the_title() . '｜○○（案件名）') : $seo_title;
      $desc  = empty($seo_desc)  ? ('加盟参考情報「' . get_the_title() . '」の詳細ページです') : $seo_desc;
      $css_name = 'news';
      break;

    case 'products':
      $title = empty($seo_title) ? (get_the_title() . '｜○○（案件名）') : $seo_title;
      $desc  = empty($seo_desc)  ? ('商品「' . get_the_title() . '」の詳細ページです') : $seo_desc;
      $css_name = 'products';
      break;

    default:
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

  $title = empty($seo_title) ? $common_title : $seo_title;
  $desc  = empty($seo_desc)  ? $common_desc  : $seo_desc;


  switch ($slug) {
    case 'about':
      $css_name = 'about';
      break;
    default:
      $css_name = '';
      break;
  }
} elseif (is_404()) {
  $title = 'お探しのページは見つかりませんでした｜○○（案件名）';
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

<body <?php body_class(); ?>>
  <?php get_template_part('template-parts/common/inc', 'header'); ?>
  <div class="js-scroll-container flex-1 overflow-x-hidden flex flex-col justify-between">