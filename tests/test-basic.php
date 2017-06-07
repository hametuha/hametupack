<?php
/**
 * Function test
 *
 * @package hametupack
 */

/**
 * Sample test case.
 */
class HametuPack_Basic_Test extends WP_UnitTestCase {

	/**
	 * A single example test
	 *
	 */
	function test_auto_loader() {
		// Check class exists
		$this->assertTrue( class_exists( 'Hametuha\\HametuPack\\ShareDaddy\\ShareHatebu' ) );
	}

	/**
	 * Test functions
	 */
	function test_basic_function() {
		$this->assertTrue( function_exists( 'hametupack_version' ), 'Basic function exits.' );
	}
}
