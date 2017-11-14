<?php
function apk_load_styles_scripts() {
  //CSS
  wp_register_style('theme_style', get_stylesheet_uri(), '', '1.0', 'all');// para registrar el css
  wp_enqueue_style('theme_style');

  //JS
  wp_enqueue_script( 'script1', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script3', get_template_directory_uri() . '/js/main-script.js', array ( 'jquery' ), 1.1, true);
  // wp_enqueue_script( 'script4', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script6', get_template_directory_uri() . '/js/slider_home.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script7', get_template_directory_uri() . '/js/vendor/owl.carousel.js', array ( 'jquery' ), 1.1, true);

  }
add_action('wp_enqueue_scripts', 'apk_load_styles_scripts');

function apk_register_sidebars() {
  register_sidebar(array(
    'name' => __('Sidebar principal','apk'),
    'id' => 'main_sidebar',
    'description' => __('Este es el sidebar principal','apk'),
    'before_widget' => '<div id="%1$s" class="single-sidebar %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
  ));
}
add_action('widgets_init', 'apk_register_sidebars');

function apk_register_footer() {
  register_sidebar(array(
    'name' => __('Footer left','apk'),
    'id' => 'main_footer',
    'description' => __('Este es el sidebar del footer','apk'),
    'before_widget' => '<div id="%1$s" class="single-widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
  ));
}
add_action('widgets_init', 'apk_register_footer');

function apk_register_footer2() {
  register_sidebar(array(
    'name' => __('Footer Home','apk'),
    'id' => 'main_footer_home',
    'description' => __('Este es el home del footer','apk'),
    'before_widget' => '<div id="%1$s" class="single-widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
  ));
}

add_action('widgets_init', 'apk_register_footer2');

function apk_register_footer3() {
  register_sidebar(array(
    'name' => __('Footer Facebook','apk'),
    'id' => 'main_footer_face',
    'description' => __('Este es el home del footer','apk'),
    'before_widget' => '<div id="%1$s" class="single-widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
  ));
}

add_action('widgets_init', 'apk_register_footer3');

function apk_register_footer4() {
  register_sidebar(array(
    'name' => __('Footer datos','apk'),
    'id' => 'main_footer_data',
    'description' => __('Este es el home del footer','apk'),
    'before_widget' => '<div id="%1$s" class="single-widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
  ));
}

add_action('widgets_init', 'apk_register_footer4');


if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );
?>
