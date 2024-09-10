<?php

require_once("lib/designbuero-freise.php");
require_once("lib/blocks.php");
require_once("lib/colors.php");
require_once("lib/gutenberg.php");

//require_once("lib/cpt.php");

/************************************************************************************************/
/*
/*  Theme-Support
*/

add_theme_support( 'post-thumbnails' );

add_theme_support("automatic-feed-links");
add_theme_support('wp-block-styles');
add_theme_support('align-wide');
add_theme_support('editor-styles');
add_theme_support('disable-custom-colors');
add_theme_support('disable-custom-font-sizes');

add_editor_style(get_theme_file_uri('/css/editor.css'));

/************************************************************************************************/
/*
/*  Menue Support
*/

add_theme_support('menus');

function _los_registermenus() {
  register_nav_menus(
    array('main' => 'Hauptmenue', 'secondary' => 'Sekundär','footer' => 'Fuß','mobile' => "Mobil")
  );
}

add_action('init','_los_registermenus');

function my_wp_nav_menu_args( $args = '' )
{
	$args['container'] = false;
	return $args;
}

add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

/************************************************************************************************/
/*
/*  Utilities
*/

// Max. width for oEmbeds

if (!isset($content_width)) $content_width = 1000;

remove_action('wp_head', 'rel_canonical');

// Enq

function los_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script("jquery");
	wp_enqueue_script( 'df_lib', get_stylesheet_directory_uri()."/js/site.js", array("jquery"), $theme_version, true );
	wp_enqueue_style('df_css', get_stylesheet_directory_uri() . "/css/site.css", '', $theme_version);
	add_filter( 'use_default_gallery_style', '__return_false' );
	wp_enqueue_script('fancyboxx', get_stylesheet_directory_uri() . "/js/fancybox-master/dist/jquery.fancybox.min.js", array(), $theme_version, true);

};

add_action('wp_enqueue_scripts', 'los_scripts', 100 );

function prefix_block_styles()
{
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style('prefix-editor-styles', get_theme_file_uri('css/editor.css'));
	wp_enqueue_script( 'df_site', get_stylesheet_directory_uri()."/js/site.js", array(), $theme_version, false );
}

add_action('admin_enqueue_scripts', 'prefix_block_styles');

// Kommentare ausschalten

add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}

if(function_exists("acf_add_options_page")) {
	acf_add_options_page(array(
		'page_title' => 'Allgemeine Einstellungen',
		'menu_title' => 'Allgemein',
		'menu_slug' => 'allgemein',
		'capability' => 'edit_posts',
		'redirect' => false
	));
}

remove_action('wp_head', 'wlwmanifest_link');

function remove_version()
{
	return '';
}
add_filter('the_generator', 'remove_version');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');

?>