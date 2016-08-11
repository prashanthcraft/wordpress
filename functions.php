<?php
/**
 * Royaal Infra Theme's functions and definitions
 *
 * @package Royaal Infra
 * @since Royaal Infra 1.0
 */
function royaal_enqueue(){
	wp_enqueue_script('jquery_2.1.4', get_template_directory_uri(). '/js/jquery-2.1.4.min.js', array( 'jquery' ),true);	
	wp_enqueue_script('move-top', get_template_directory_uri(). '/js/move-top.js', array( 'jquery'),true);
	wp_enqueue_script('easing', get_template_directory_uri(). '/js/easing.js', array( 'jquery'),true);
	wp_enqueue_script('wmuSlider', get_template_directory_uri(). '/js/jquery.wmuSlider.js', array( 'jquery'),true);
	wp_enqueue_script('flexslider', get_template_directory_uri(). '/js/jquery.flexslider.js', array( 'jquery'),true);
	wp_enqueue_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.js', array( 'jquery'),true);
	wp_enqueue_script('custom', get_template_directory_uri(). '/js/custom.js', array( 'jquery'),true);
	wp_enqueue_script('easyResponsiveTabs', get_template_directory_uri(). '/js/easyResponsiveTabs.js', array( 'jquery'),true);
	wp_enqueue_script('devrama', get_template_directory_uri(). '/js/jquery.devrama.slider-0.9.4.js', array( 'jquery'),true);
	wp_enqueue_script('lightCarousel', get_template_directory_uri(). '/js/jquery.light-carousel.js', array( 'jquery'),true);
	wp_enqueue_script('jzBox', get_template_directory_uri(). '/js/jzBox.js', array( 'jquery'),true);
}
add_action('wp_footer', 'royaal_enqueue', 999 );


function royaal_enqueue(){
	wp_enqueue_script('jquery_2.1.4', get_template_directory_uri(). '/js/jquery-2.1.4.min.js',array( 'jquery'),true);	
	wp_enqueue_script('move-top', get_template_directory_uri(). '/js/move-top.js', '','',true);
	wp_enqueue_script('easing', get_template_directory_uri(). '/js/easing.js', '','',true);
	wp_enqueue_script('wmuSlider', get_template_directory_uri(). '/js/jquery.wmuSlider.js', '','',true);
	wp_enqueue_script('flexslider', get_template_directory_uri(). '/js/jquery.flexslider.js', '','',true);
	wp_enqueue_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.js', '','',true);
	wp_enqueue_script('custom', get_template_directory_uri(). '/js/custom.js', '','',true);
	wp_enqueue_script('easyResponsiveTabs', get_template_directory_uri(). '/js/easyResponsiveTabs.js', '','',true);
	wp_enqueue_script('devrama', get_template_directory_uri(). '/js/jquery.devrama.slider-0.9.4.js', '','',true);
	wp_enqueue_script('lightCarousel', get_template_directory_uri(). '/js/jquery.light-carousel.js', '','',true);
	wp_enqueue_script('jzBox', get_template_directory_uri(). '/js/jzBox.js', '','',true);
}
add_action('wp_enqueue_scripts', 'royaal_enqueue',999 );
?>
