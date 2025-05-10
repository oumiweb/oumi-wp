<?php
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
      'supports' => ['title', 'editor', 'thumbnail'],
      'rewrite' => ['slug' => 'staff'], //パーマリングをstaffに設定
      'show_in_rest' => true, // ブロックエディター対応（必要なら）
    ]
  );
}
add_action('init', 'create_staff_post_type');
