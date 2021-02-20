<?php

/***********************************
	Load Js & Css Files
***********************************/
function plugin_name_style_and_scripts(){

	wp_enqueue_style( 'plugin_name_style', plugins_url( '/css/styles.css', __FILE__ ) );	
	wp_enqueue_script( 'plugin_name_script', plugins_url( '/js/scripts.js', __FILE__ ) , array('jquery'), '1.0.0', true);

	$data = array(
		"admin_ajax"=>admin_url("admin-ajax.php")
	);
	wp_localize_script("plugin_name_script","WPAjax", $data);
}
add_action('wp_enqueue_scripts', 'plugin_name_style_and_scripts');