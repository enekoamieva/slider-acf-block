<?php

/*
 * Add this snippet in your functions.php
*/

//* Register Slider Block in ACF
add_action( 'acf/init', 'ea_register_slider_acf_block_types' );
function ea_register_slider_acf_block_types() {

	// Register a Slider ACF Block.
    acf_register_block_type(array(
        'name'              => 'slider-acf-block',
		'title'             => __('Slider ACF Block'),
		'mode'				=> 'auto',
        'description'       => __('Un bloque personalizado de slider con ACF'),
        'render_template'   => 'inc/slider-acf-block/slider-acf-block.php',
        'category'          => 'common',
		'icon'              => 'images-alt2',
		'keywords'          => array( 'slider', 'carousel' ),

		'enqueue_assets'	=> function() {
			wp_enqueue_style( 'slider-css', get_stylesheet_directory_uri() . '/inc/slider-acf-block/css/jquery.bxslider.css', array(), '5.3.2' );
			wp_enqueue_script( 'slider-lib-js', get_stylesheet_directory_uri() . '/inc/slider-acf-block/js/jquery.bxslider.js', array('jquery'), '5.3.2', true );
			wp_enqueue_script( 'slider-script-js', get_stylesheet_directory_uri() . '/inc/slider-acf-block/js/slider.js', array('jquery'), '5.3.2', true );
		}
	));
}


?>
