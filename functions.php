<?php

function assone_theme_setup(){

	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
}
add_action('after_setup_theme','assone_theme_setup');

function assone_theme_scripts(){

	wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_enqueue_style('assone-main-css', get_stylesheet_uri());
	

}
add_action('wp_enqueue_scripts','assone_theme_scripts');
