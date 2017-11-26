<?php
/*
	 Include scripts
*/

function script_enqueue() {
	//css
	wp_enqueue_style('bootstrap-cdn-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css');
	wp_enqueue_style('w3-style', 'https://www.w3schools.com/w3css/4/w3.css');
	wp_enqueue_style('css', get_template_directory_uri() . '/style.min.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');

	//js
	wp_enqueue_script('bootstrap-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js' );
	wp_enqueue_script('bootstrap-cdn-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js');
	wp_enqueue_script('bootstrap-cdn-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js');
	wp_enqueue_script('bootstrap-cdn-js', 'https://tech.jellybo.com/products/MenuIcon6/assets/js/dist/final-noSnapSvg.min.js');
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js');
}

add_action('wp_enqueue_scripts', 'script_enqueue');
