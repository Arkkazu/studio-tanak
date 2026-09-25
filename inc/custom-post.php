<?php
//// 商品ページへの切り替え後、旧アーカイブのリライトルールを一度だけ除去
add_action('wp_loaded', function () {
  if (get_option('studio_tanaka_products_page_rewrite_version') === '1') {
    return;
  }

  flush_rewrite_rules(false);
  update_option('studio_tanaka_products_page_rewrite_version', '1', false);
});
//// end 商品ページへの切り替え

//// カスタム投稿を管理画面で最新の記事順
add_action('pre_get_posts', function ($q) {
  if (!is_admin() || !$q->is_main_query()) {
    return;
  }

  global $pagenow;
  if ($pagenow !== 'edit.php') {
    return;
  }

  // 一覧画面の対象投稿タイプ（未指定は post）
  $pt = isset($_GET['post_type']) ? sanitize_key(wp_unslash($_GET['post_type'])) : 'post';

  // 通常投稿（post）は除外し、カスタム投稿タイプのみ対象
  if ($pt === 'post') {
    return;
  }

  // 念のため、存在しない投稿タイプは除外
  if (!post_type_exists($pt)) {
    return;
  }

  // ユーザー操作（列クリック等）による orderby 指定がある場合は尊重する
  if (!empty($_GET['orderby'])) {
    return;
  }

  // 初期表示のみ最新順にする
  $q->set('orderby', 'date');
  $q->set('order', 'DESC');
});
//// end カスタム投稿を管理画面で最新の記事順


//// カスタム分類アーカイブ用のリライトルール（2026-09-19 削除）
//
// 削除前は次の2本を 'top' 優先で登録していた。
//   news/([^/]+)/?$               => index.php?news_cat=$matches[1]
//   news/([^/]+)/page/([0-9]+)/?$ => index.php?news_cat=$matches[1]&paged=$matches[2]
//
// このサイトに `news_cat` タクソノミーは存在せず（`taxonomy_exists('news_cat') === false`、
// public query var にも未登録）、パーマリンク構造は `/%category%/%post_id%/` である。
// そのため `news` カテゴリーの投稿URL `/news/<投稿ID>/` が上の1本目に先に一致し、
// 解決先が無いままWordPressの正規化リダイレクトでトップページへ301していた。
// 2026-09-19 実測：/news/3367/ /news/3236/ /news/3055/ がいずれも 301 -> `/`。
// `/blog/3046/` は該当ルールが無いため 200 だった。
//
// 対象のカスタム投稿タイプ・タクソノミーを実際に登録する時点で、
// 投稿パーマリンクと衝突しない正規表現とともに作り直すこと。


//// カスタム投稿パーマリンク「/taxonomy/」削除
function my_custom_post_type_permalinks_set($termlink, $term, $taxonomy)
{
  return str_replace('/' . $taxonomy . '/', '/', $termlink);
}
add_filter('term_link', 'my_custom_post_type_permalinks_set', 11, 3);
//// end カスタム投稿パーマリンク「/taxonomy/」削除


//// 上の term_link フィルタに対応するカテゴリーアーカイブのリライトルール（2026-09-19 追加）
//
// フィルタが `/category/news/` を `/news/` へ書き換えているのに、対応するリライトルールが
// 無かった。WordPress本体が用意するのは `category/(.+?)/?$` と `category/(.+?)/page/N` だけで、
// 接頭辞なしの `/news/` は pagename ルール（`(.?.+?)(?:/([0-9]+))?/?$`）へ落ちる。
// 2026-09-19 実測：`/news/` `/blog/` が本文0バイト、`/news/page/2/` が404だった。
//
// 対象はスラッグが英数字・ハイフン・アンダースコアだけのカテゴリーに限る。
// 日本語スラッグ（パーセントエンコード）は正規表現が壊れるため対象外とし、
// 本体の `/category/<slug>/` で引き続き到達できる。
// `^<slug>/?$` と `^<slug>/page/N/?$` は `/news/<投稿ID>/` に一致しないため、
// 個別記事のURLへは影響しない。
add_action('init', function () {
  $slugs = get_terms([
    'taxonomy'   => 'category',
    'hide_empty' => false,
    'fields'     => 'slugs',
  ]);

  if (is_wp_error($slugs) || !is_array($slugs)) {
    return;
  }

  foreach ($slugs as $slug) {
    if (!is_string($slug) || !preg_match('/\A[a-z0-9_-]+\z/', $slug)) {
      continue;
    }

    add_rewrite_rule('^' . $slug . '/page/?([0-9]{1,})/?$', 'index.php?category_name=' . $slug . '&paged=$matches[1]', 'top');
    add_rewrite_rule('^' . $slug . '/?$', 'index.php?category_name=' . $slug, 'top');
  }
});
//// end カテゴリーアーカイブのリライトルール


//// カスタム投稿タイプでカテゴリ未選択時にデフォルトのタームを設定
// function add_defaultcategory_automatically($post_ID)
// {
//   global $wpdb;
//   // 設定されているカスタム分類のタームを取得
//   $curTerm = wp_get_object_terms($post_ID, 'newscat');
//   if (0 == count($curTerm)) {
//     $defaultTerm = array(4);
//     wp_set_object_terms($post_ID, $defaultTerm, 'newscat');
//   }
// }
// add_action('publish_news', 'add_defaultcategory_automatically');
//// end カスタム投稿タイプでカテゴリ未選択時にデフォルトのタームを設定
