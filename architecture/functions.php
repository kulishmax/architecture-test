<?php

function print_var($args){
  echo "<pre>";
  print_r($args);
  echo "</pre>";
}

function br_theme_setup() { // Устанавливаем настройки темы
    add_theme_support('post-thumbnails', array('post', 'page', 'speakers', 'logos', 'support', 'quote', 'curators', 'programs'));
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'br_theme_setup');

function add_theme_scripts() { // Подключаем стили и скрипты темы
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('et-googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('bootstrap-script', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script( 'owl-script', get_template_directory_uri().'/owl-carousel/owl.carousel.js', array( 'jquery' ) );
    wp_enqueue_script( 'widget-wfp-script', 'https://secure.wayforpay.com/server/pay-widget.js', array( 'jquery' ) );
    wp_enqueue_script( 'component-script', get_template_directory_uri() . '/js/component.js', array( 'jquery' ) );
    wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ) );
    wp_localize_script( 'theme-script', 'arch_ajax_object', array( 
        'ajaxurl'       => admin_url( 'admin-ajax.php' ),
        'redirecturl'     => $_SERVER['REQUEST_URI'],
        'loadingmessage'  => __( 'Loading...' )
    ));
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');

function sctipt_for_admin() {
   wp_enqueue_script( 'admin-script', get_template_directory_uri() . '/js/admin-script.js', array( 'jquery' ) );
}
add_action( 'admin_enqueue_scripts', 'sctipt_for_admin' );

function add_defer_attribute($tag, $handle) { // Отложенная загрузка скриптов
   $scripts_to_defer = array('theme-script');
   foreach($scripts_to_defer as $defer_script) {
      if ($defer_script === $handle) {
         return str_replace(' src', ' defer="defer" src', $tag);
      }
   }
   return $tag;
}
add_filter( 'script_loader_tag', 'add_defer_attribute', 10, 2 );

function true_load_theme_textdomain() {
    load_theme_textdomain( 'arch', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'true_load_theme_textdomain' );
 
function true_localize_theme( $locale ) {
    // $languages = apply_filters( 'wpml_active_languages', NULL );
    // foreach ( $languages as $l ) {
    //     if ( $l['active'] ) {
    //         $locale = $l['default_locale'];
    //         break;
    //     }
    // }
    // print_r($locale);
    // die();
    $locale = ICL_LANGUAGE_CODE;
    return $locale;
}
add_filter( 'locale', 'true_localize_theme' );

add_filter('shortcode_atts_gallery','force_large_images',10,3);
function force_large_images($out, $pairs, $atts) {
  $out['size'] = 'large'; // for example, "large" 
  return $out;
}

add_filter( 'the_content', 'breezer_addDivToImage' );
function breezer_addDivToImage( $content ) {
   // A regular expression of what to look for.
   $pattern = '/(<img([^>]*)>)/i';
   // What to replace it with. $1 refers to the content in the first 'capture group', in parentheses above
   $replacement = '<div class="page_content_img"><div class="wr_img">$1</div></div>';
   // run preg_replace() on the $content
   $content = preg_replace( $pattern, $replacement, $content );
   // return the processed content
   return $content;
}

include "includes/add_post_types.php";
include "includes/add_meta_fields.php";
include "includes/add_taxonomies.php";
include "includes/actions.php";
include "includes/ticket_page.php";
//include "includes/orders_database.php";
// function get_course(){
//     $url = "https://api.privatbank.ua/p24api/pubinfo?exchange&coursid=11";
//     $curl = curl_init($url);
//     if ( $curl ){
//         curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
//         $page = curl_exec($curl);
//         curl_close($curl);
//         unset($curl);
//         $xml = new SimpleXMLElement($page);
//         return $xml->row[0]->exchangerate['sale'][0];
//     }
// }
