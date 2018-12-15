<?php

/**
 *  chargemment des scripts
 */


 /**
  *  <?php wp_head(); ?>
  *  fonction qui permet d'injecter notre feuille de style
  */

function cwmac_scripts() {
  wp_enqueue_style('cwmac_custom', get_template_directory_uri() .'/style.css', array(), '1.0.0', 'all' );
/**
 * recois 5 paramètres
 */

}//fin function wcmac_scripts

add_action('wp_enqueue_scripts', 'cwmac_scripts');
