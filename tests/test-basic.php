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
	public function test_auto_loader() {
		// Check class exists
		$this->assertTrue( class_exists( 'Hametuha\\HametuPack\\OGP\\TwitterCard' ) );
	}

	/**
	 * Share buttons extend Jetpack's Sharing_Source.
	 */
	public function test_share_button_classes() {
		if ( ! class_exists( 'Sharing_Source' ) ) {
			$this->markTestSkipped( 'Jetpack is not installed in the test environment.' );
		}
		$this->assertTrue( class_exists( 'Hametuha\\HametuPack\\ShareDaddy\\ShareHatebu' ) );
		$this->assertTrue( class_exists( 'Hametuha\\HametuPack\\ShareDaddy\\ShareLine' ) );
	}

	/**
	 * Test functions
	 */
	public function test_basic_function() {
		$this->assertTrue( function_exists( 'hametupack_version' ), 'Basic function exits.' );
	}
}
