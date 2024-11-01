<?php 
/*
*
*	***** Shipping RD *****
*
*	This file initializes all SR Core components
*	
*/
// If this file is called directly, abort. //
if ( ! defined( 'WPINC' ) ) {die;} // end if
// Define Our Constants
define('SRD_ASSETS_INC',dirname( __FILE__ ).'/assets/inc/');
define('SRD_ASSETS_IMG',plugins_url( 'assets/img/', __FILE__ ));
define('SRD_ASSETS_CSS',plugins_url( 'assets/css/', __FILE__ ));
define('SRD_ASSETS_JS',plugins_url( 'assets/js/', __FILE__ ));
/*
*
*  Register CSS
*
*/
function srd_add_styles(){
wp_enqueue_style('sr-core', SRD_ASSETS_CSS . 'sr-core.css',null,time(),'all');
};
add_action( 'wp_enqueue_scripts', 'srd_add_styles' );    
/*
*
*  Register JS/Jquery Ready
*
*/
function srd_add_javascripts(){
// Register Core Plugin JS	
wp_enqueue_script('sr-core', SRD_ASSETS_JS . 'sr-core.js','jquery',time(),true);
};
add_action( 'wp_enqueue_scripts', 'srd_add_javascripts' );    
/*
*
*  Includes
*
*/ 
// Load the Functions
if ( file_exists( SRD_ASSETS_INC . 'sr-core-functions.php' ) ) {
	require_once SRD_ASSETS_INC . 'sr-core-functions.php';
}     
// Load the ajax Request
if ( file_exists( SRD_ASSETS_INC . 'sr-ajax-request.php' ) ) {
	require_once SRD_ASSETS_INC . 'sr-ajax-request.php';
} 
// Load the Shortcodes
if ( file_exists( SRD_ASSETS_INC . 'sr-shortcodes.php' ) ) {
	require_once SRD_ASSETS_INC . 'sr-shortcodes.php';
}