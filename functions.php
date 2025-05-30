<?php 
// 管理画面｜アイキャッチ画像の設定領域を表示
function theme_setup(){
  // アイキャッチ画像を有効化（全体または特定の投稿タイプ）
  add_theme_support('post-thumbnails', ['post', 'staff']); // 'post'はブログ投稿、'staff'はカスタム投稿タイプ
}
add_action('after_setup_theme', 'theme_setup');


function create_staff_post_type() {
  register_post_type('staff',
  // 投稿タイプのスラッグ
    [
      'label' => 'STAFF', 
      // 管理画面に表示される名前
      'public' => true,
      // サイト訪問者にも公開
      'has_archive' => true,
      // 一覧ページを有効にするarchive-staff.phpが使える
      'menu_position' => 5,
      'supports' => ['title', 'editor', 'thumbnail', 'page-attributes'],
      'rewrite' => ['slug' => 'staff'], //パーマリングをstaffに設定
      'show_in_rest' => true, // ブロックエディター対応（必要なら）
    ]
  );
}
add_action('init', 'create_staff_post_type');

function change_menu_label(){
  global $menu;
  global $submenu;
  $name = 'BLOG';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新しい'.$name;
}
function change_object_label(){
  global $wp_post_types;
  $name = 'BLOG';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name.'の新規追加';
  $labels->edit_item = $name.'の編集';
  $labels->new_item = '新規'.$name;
  $labels->view_item = $name.'を表示';
  $labels->search_items = $name.'を検索';
  $labels->not_found = $name.'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'change_object_label' );
add_action( 'admin_menu', 'change_menu_label' );

function exclude_specific_breadcrumb_category($trail) {
  foreach ($trail->breadcrumbs as $key => $crumb) {
    if (isset($crumb->taxonomy) && $crumb->taxonomy === 'category' && $crumb->name === '社内イベント') {
      unset($trail->breadcrumbs[$key]);
    }
  }
  return $trail;
}
add_filter('bcn_after_fill', 'exclude_specific_breadcrumb_category');

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
} 
function add_body_class_slug( $classes ) {
  if ( is_front_page() ) {
    $classes[] = 'top-page';
  } else {
    $classes[] = 'sub-page';
  }
  return $classes;
}
function theme_enqueue_scripts() {
  // jQuery（WordPress同梱のバージョンを使う）
  wp_enqueue_script('jquery');

  // Swiper
  wp_enqueue_script(
    'swiper',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
    array(),
    '11.0.0',
    true
  );

  // Slick（必要なら）
  wp_enqueue_script(
    'slick-carousel',
    'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
    array('jquery'),
    '1.8.1',
    true
  );

  // main.js（jQuery に依存させる）
  wp_enqueue_script(
    'main-js',
    get_stylesheet_directory_uri() . '/js/main.js',
    array('jquery', 'swiper', 'slick-carousel'),
    '1.0.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

