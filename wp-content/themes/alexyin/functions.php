<?php

require 'inc/misc.php';
require 'inc/enqueue.php';

if(function_exists('acf_register_block_type')){
	add_action('acf/init', 'register_acf_block_type');
}

function register_acf_block_type(){
	acf_register_block_type(array(
		'name' => 'hero',
		'title' => __('Hero'),
		'description' => __('Hero'),
		'category'          => 'design',
		'render_template' => 'partials/blocks/hero.php',
		'icon' => 'cover-image',
		'keywords' => array ('hero'),
	));

	acf_register_block_type(array(
		'name' => 'logo',
		'title' => __('Logo'),
		'description' => __('Logo'),
		'category'          => 'design',
		'render_template' => 'partials/blocks/logo.php',
		'icon' => 'cover-image',
		'keywords' => array ('logo'),
	));

	acf_register_block_type(array(
		'name' => 'form',
		'title' => __('Form'),
		'description' => __('Form'),
		'category'          => 'design',
		'render_template' => 'partials/blocks/form.php',
		'icon' => 'cover-image',
		'keywords' => array ('form'),
	));
}

