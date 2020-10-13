<?php

function lp_enqueue_frontend() {

	// Dequeue existing scripts
	wp_dequeue_script('jquery');
	wp_deregister_script('jquery');
	
	wp_enqueue_style('main-style', get_template_directory_uri().'/dist/css/main.min.css');

	// Third-party scripts
	wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.4.1.min.js', '', '', true);

	wp_enqueue_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '', true);

	// Our script
	wp_enqueue_script('main-script', get_template_directory_uri().'/dist/js/main.min.js', array('jquery', 'bootstrap'),'', true);

	wp_enqueue_script('react-script', get_template_directory_uri().'/dist/js/bundle.js', array(),'', true);

}
add_action('wp_enqueue_scripts', 'lp_enqueue_frontend');


function lp_enqueue_admin() {
	wp_enqueue_style('main-style', get_template_directory_uri().'/dist/css/main.min.css');
}
add_action('admin_init', 'lp_enqueue_admin');