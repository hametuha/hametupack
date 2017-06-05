<?php
/**
 * Hooks for ShareDaddy
 *
 * @package hametupack
 */

/**
 * Add share service
 *
 * @param array $services
 * @return array
 */
add_filter( 'sharing_services', function ( $services ) {
	$services['hatebu'] = \Hametuha\HametuPack\ShareDaddy\ShareHatebu::class;
	$services['line']   = \Hametuha\HametuPack\ShareDaddy\ShareLine::class;
	return $services;
} );

/**
 * Register styles
 */
add_action( 'init', function(){
	$asset_url = plugin_dir_url( __DIR__ ) . 'assets';
	wp_register_style( 'hametupack-share-daddy', "{$asset_url}/css/share-daddy-support.css", [], hametupack_version() );
} );

/**
 * Load asset in admin screen
 */
add_action( 'admin_enqueue_scripts', function( $page ) {
	wp_enqueue_style( 'hametupack-share-daddy' );
} );
