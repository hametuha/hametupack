<?php
/**
 * PHPUnit bootstrap file
 *
 * @package hametupack
 */

$_tests_dir = getenv( 'WP_TESTS_DIR' );
if ( ! $_tests_dir ) {
	$_tests_dir = '/tmp/wordpress-tests-hametupack';
}

// Give access to tests_add_filter() function.
require_once $_tests_dir . '/includes/functions.php';

/**
 * Manually load the plugin being tested.
 */
tests_add_filter( 'muplugins_loaded', function() {
	// Activate jetpack
	define( 'JETPACK_DEV_DEBUG', true );
	update_option( 'active_plugins', [
		'jetpack/jetpack.php'
	] );
	update_option( 'jetpack_activated', 1 );
	update_option( 'jetpack_active_modules', ['sharedaddy'] );
	require dirname( dirname( __FILE__ ) ) . '/hametupack.php';
} );

// Start up the WP testing environment.
require $_tests_dir . '/includes/bootstrap.php';
