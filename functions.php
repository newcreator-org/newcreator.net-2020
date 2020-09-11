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

function create_taxonomy() {
  $args = array(
    'hierarchical' => true,
    'labels' => array(
      'name' => 'Cources'
    )
    );
  register_taxonomy('cource', 'material', $args);
}
add_action('init', 'create_taxonomy');

function create_custom_menus() {
  register_nav_menus(array(
    'header-menu' => __('ヘッダーメニュー'),
    'footer-menu_1' => __('フッターメニュー1'),
    'footer-menu_2' => __('フッターメニュー2'),
    'footer-menu_3' => __('フッターメニュー3'),
    'footer-menu_4' => __('フッターメニュー4'),
  ));
}
add_action('init','create_custom_menus');

function add_item_class($classes, $item, $args) {
  if(isset($args->item_class)) {
      $classes[] = $args->item_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_item_class', 1, 3);