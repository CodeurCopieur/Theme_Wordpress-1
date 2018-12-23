<?php

 /**
  *  <?php wp_head(); ?>
  *  fonction qui permet d'injecter notre feuille de style
  */

 define('CW_VERSION', '1.0.3');

//chargemment dans le front-end
function cw_scripts() {
    //chargement des styles
    wp_enqueue_style('cw_bootstrap-min-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), CW_VERSION, 'all' );
    wp_enqueue_style('cw_custom', get_template_directory_uri() . '/style.css', array('cw_bootstrap-min-css'), CW_VERSION, 'all' );

    //chargement des scripts
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), CW_VERSION, true );
    wp_enqueue_script('cw_admin_script', get_template_directory_uri() . '/js/script.js', array('jquery', 'bootstrap-js'), CW_VERSION, true );
}//fin function wc_scripts

add_action('wp_enqueue_scripts', 'cw_scripts');

// chargement dans l'admin
function cw_admin_scripts(){
    //chargement des styles
    wp_enqueue_style('bootstrap-adm-core', get_template_directory_uri() . '/css/bootstrap.min.css', array(), CW_VERSION, 'all' );
}//fin function cw_admin_scripts

add_action('admin_init', 'cw_admin_scripts');


/**
 * Utilitaires
 */

function cw_setup(){
  //support   des vignettes
  add_theme_support('post-thumbnails');

  //enlève générateur de version
  remove_action('wp_head', 'wp_generator');

  //enlève les guillemets à la française
  remove_filter('the_content', 'wptexturize');

  //support du Titre
  add_theme_support('title_tag');

}//fin function cw_setup

add_action('after_setup_theme', 'cw_setup');
