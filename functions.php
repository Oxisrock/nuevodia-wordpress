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
  wp_enqueue_script( 'script7', get_template_directory_uri() . '/js/vendor/owl.carousel.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script8', get_template_directory_uri() . '/js/truncktitle.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script9', get_template_directory_uri() . '/js/truncktitlewidget.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script5', get_template_directory_uri() . '/js/social.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script10', get_template_directory_uri() . '/js/truncktitleslider.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script2', 'https://platform.twitter.com/widgets.js' , array ( 'jquery' ), 1.1, true);

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

function apk_register_sidebars_page() {
  register_sidebar(array(
    'name' => __('Sidebar principal post page','apk'),
    'id' => 'sidebar_post_page',
    'description' => __('Este es el sidebar del ','apk'),
    'before_widget' => '<div id="%1$s" class="single-sidebar %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
  ));
}
add_action('widgets_init', 'apk_register_sidebars_page');

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

// Función para contar visualizaciones de un post.
function set_post_views() {
    if (is_single()) {
        $post_ID = get_the_ID();
        $count = get_post_meta( $post_ID, 'post_views', true );

        if ( $count == '' ) {
            delete_post_meta( $post_ID, 'post_views' );
            add_post_meta( $post_ID, 'post_views', 1 );
        } else {
            update_post_meta( $post_ID, 'post_views', ++$count );
        }
    }
}
add_action( 'wp', 'set_post_views' );

// Función para obtener el número de visualizaciones de un post
function get_post_views($post_ID){
    $count = get_post_meta($post_ID, 'post_views', true);

    if ($count == ''){
        delete_post_meta($post_ID, 'post_views');
        add_post_meta($post_ID, 'post_views', 0);
        return 0;
    }
    return $count;
}

if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );

  /*Header administrable*/
function magazine_theme_customize_register( $wp_customize ) {
  /*agrega el panel*/

  $wp_customize->add_panel( 'demo_panel', array(
    'title' => __( 'Header', 'textdomain' ),
 'description' => __( 'Header administrable', 'textdomain' ),
    'priority' => 160,
    'capability' => 'edit_theme_options'
  ));
  // Agrega la seccion
  $wp_customize->add_section( 'primera_seccion' , array(
    'title' => __( 'Header', 'textdomain' ),
    'panel' => 'demo_panel',
    'priority' => 1,
    'capability' => 'edit_theme_options',
  ));

  /* Inputs de logo y el header */

  $wp_customize->add_setting( 'img-upload-logo');

  $wp_customize->add_control(
  		new WP_Customize_Image_Control(
  				$wp_customize,
  				'img-upload-logo',
  				array(
  						'label' => 'Logo',
  						'section' => 'primera_seccion',
  						'settings' => 'img-upload-logo',
              'priority' => 60
  				)
  		)
  );
  $wp_customize->add_setting( 'img-upload-header' );

  $wp_customize->add_control(
  		new WP_Customize_Image_Control(
  				$wp_customize,
  				'img-upload-header',
  				array(
  						'label' => 'Header',
  						'section' => 'primera_seccion',
  						'settings' => 'img-upload-header',
              'priority' => 80
  				)
  		)
  );
}
add_action( 'customize_register', 'magazine_theme_customize_register' );

function perfil_usuario_personalizado( $user_contact ) {
    $user_contact['perfil_twitter'] = __('Twitter');
    $user_contact['perfil_facebook'] = __('Facebook');
    $user_contact['perfil_linkedin'] = __('Linkedin');
    unset($user_contact['WEB']);
    return $user_contact;
}

add_filter( 'user_contactmethods', 'perfil_usuario_personalizado' );

function dc_social_sharing_buttons($content)
{
	if( is_single() )
	{
		$plantilla		='
		 <a class="dc-link dc-twitter" href="{twitter}" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>'.
		'<a class="dc-link dc-facebook" href="{facebook}" target="_blank"><i class="fa fa-facebook"></i> Facebook </a>'.
		'<a class="dc-link dc-googleplus" href="{google}" target="_blank"><i class="fa fa-google-plus"></i> Google+</a>'.
		'<a class="dc-link dc-linkedin" href="{linkedin}" target="_blank"><i class="fa fa-linkedin"></i> LinkedIn</a>'.
		'<a class="dc-link dc-whatsapp" href="{whatsapp}" target="_blank"><i class="fa fa-whatsapp"></i> WhatsApp</a>';

		$cad			='';
		$urlArticulo 	= urlencode(get_permalink());
 		$titleArticulo 	= str_replace( ' ', '%20', get_the_title());

		// Urls
		$twitterURL	= 'https://twitter.com/intent/tweet?text='.$titleArticulo.'&amp;url='.$urlArticulo.'&amp;via=DecodeCMS';
		$facebookURL= 'https://www.facebook.com/sharer/sharer.php?u='.$urlArticulo;
		$googleURL 	= 'https://plus.google.com/share?url='.$urlArticulo;
		$whatsappURL= 'whatsapp://send?text='.$titleArticulo . ' ' . $urlArticulo;
		$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$urlArticulo.'&amp;title='.$titleArticulo;

		$ar_buscar 		= array('{twitter}','{facebook}','{google}','{linkedin}','{whatsapp}');
		$ar_reemplazar 	= array($twitterURL,$facebookURL,$googleURL,$linkedInURL,$whatsappURL);

		$cad	.= '<div class="dc-social">';
		$cad	.= '<p>¿Compartir?</p>';
		$cad	.=  str_replace($ar_buscar, $ar_reemplazar, $plantilla);
		$cad	.= '</div>';
		$content .= $cad; //botones inferiores

		return $content;
	}
	else
	{
		return $content;
	}
};

add_filter( 'the_content', 'dc_social_sharing_buttons',0);

function show_category_posts( $atts ){
    extract(shortcode_atts(array('cat'=> ''), $atts));
    query_posts('cat='.$cat.'&orderby;=dateℴ=ASC&posts;_per_page=-1');
    if ( have_posts() ){
        $content = '<ul>';
        while ( have_posts() ){
            the_post();
            $content .= the_title('<li><a href="'.get_permalink().'">', '</a></li>', true);
        }
        $content .= '</ul>';
    }
    //Reset query
    wp_reset_query();
    return $content;
}
add_shortcode('mostrar_cat', 'show_category_posts');

?>
