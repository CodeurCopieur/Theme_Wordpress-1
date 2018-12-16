<?php

 /**
  *  <?php wp_head(); ?>
  *  fonction qui permet d'injecter notre feuille de style
  */

 define('LGMAC_VERSION', '1.0.2');

//chargemment dans le front-end
function cw_scripts() {
    //chargement des styles
    wp_enqueue_style('cw_bootstrap-min-css', get_template_directory_uri() .'/css/bootstrap.min.css', array(), LGMAC_VERSION, 'all' );
    wp_enqueue_style('cw_custom', get_template_directory_uri() .'/css/style.css', array('cw_bootstrap-min-css'), LGMAC_VERSION, 'all' );

    //chrgement des scripts
    wp_enqueue_script('cw_script', get_template_directory_uri() .'/js/script.js', array('jquery'), LGMAC_VERSION, true );
}//fin function wc_scripts

add_action('wp_enqueue_scripts', 'cw_scripts');

// chargement dans l'admin
function cw_admin_scripts(){
    //chargement des styles
    wp_enqueue_style('bootstrap-adm-core', get_template_directory_uri() .'/css/bootstrap.min.css', array(), LGMAC_VERSION, 'all' );
}//fin function cw_admin_scripts

add_action('admin_init', 'cw_admin_scripts');
