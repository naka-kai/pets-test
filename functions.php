<?php

function add_files() {
  // 全てのページにCSS読み込み
  wp_enqueue_style('reset_css', 'https://cdn.jsdelivr.net/npm/the-new-css-reset@1.7.3/css/reset.min.css');
  wp_enqueue_style('FontAwesome_css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css');
  wp_enqueue_style('NotoSansJP_css', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap');
  wp_enqueue_style('Swiper_css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
  wp_enqueue_style('base_css', get_theme_file_uri().'/common/css/base.css');

  wp_enqueue_script('Swiper_js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js');
  wp_enqueue_script('index_js', get_theme_file_uri().'/js/index.js');

  // front-pageにCSS, JS読み込み
  if (is_page('home')) {
    wp_enqueue_style('AOS_css', 'https://unpkg.com/aos@next/dist/aos.css');
    wp_enqueue_style('top-page_css', get_theme_file_uri().'/common/css/top-page.css');
    wp_enqueue_style('top-title_css', get_theme_file_uri().'/common/css/top-title.css');
    wp_enqueue_style('banner_css', get_theme_file_uri().'/common/css/banner.css');
    wp_enqueue_style('card_css', get_theme_file_uri().'/common/css/card.css');
    wp_enqueue_style('description-box_css', get_theme_file_uri().'/common/css/description-box.css');
    wp_enqueue_style('description-btn_css', get_theme_file_uri().'/common/css/description-btn.css');
    wp_enqueue_style('more-btn_css', get_theme_file_uri().'/common/css/more-btn.css');
    wp_enqueue_style('sub-title_css', get_theme_file_uri().'/common/css/sub-title.css');

    wp_enqueue_script('AOS_js', 'https://unpkg.com/aos@next/dist/aos.js');
  } else if (is_post_type_archive('feature')) {
    wp_enqueue_style('banner_css', get_theme_file_uri().'/common/css/banner.css');
    wp_enqueue_style('a-feature_css', get_theme_file_uri().'/common/css/a-feature.css');
  }
}
add_action('wp_enqueue_scripts', 'add_files');

// deferを付加するフィルターフック
add_filter('script_loader_tag', 'add_defer', 10, 2);
function add_defer($tag, $handle) {
  if ($handle !== 'index_js') {
    return $tag;
  }
  return str_replace(' src=', ' defer src=', $tag);
}

// ACFの選択肢を自動入力
function acf_load_choices($field) {
  $field['choices'] = array();
  // $choices = get_field('')

  return $field;
}
add_filter('acf/load_field/name=category', 'acf_load_choices');

// 固定ページのエディタを非表示にする
add_filter('use_block_editor_for_post', function($use_block_editor, $post) {
  if ($post->post_type === 'page') {
    remove_post_type_support('page', 'editor');
    return false;
  }
  return $use_block_editor;
}, 10, 2);
?>
