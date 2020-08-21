<?php
function create_post_type() {
  $args = array(
    'public' => true,
    'labels' => array(
      'name' => 'Materials',
      'menu_name' => '教材',
      'all_items' => '教材一覧',
      'edit_item' => '教材を編集'
    ),
    'menu_position' => 5,
    'has_archive' => true,
    'show_in_rest' => true,
  );
  register_post_type('material', $args);
  
}
add_action('init', 'create_post_type');
