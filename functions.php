<?php
function apk_load_styles_scripts() {
  //CSS
  wp_register_style('theme_style', get_stylesheet_uri(), '', '1.0', 'all');// para registrar el css
  wp_enqueue_style('theme_style');

  //JS
  wp_enqueue_script( 'script1', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script3', get_template_directory_uri() . '/js/main-script.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script4', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script6', get_template_directory_uri() . '/js/slider_home.js', array ( 'jquery' ), 1.1, true);
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
?>
