<?php

/**
 * Tests to test that that testing framework is testing tests. Meta, huh?
 *
 * @package wordpress-plugins-tests
 */
class WP_Test_WordPress_Plugin_Tests extends WP_UnitTestCase {

    /**
     * Run a simple test to ensure that the tests are running
     */
    function test_tests() {

        $this->assertTrue( true );

    }

    /**
     * Ensure that the plugin has been installed and activated.
     */
    function test_plugin_activated() {

        $this->assertTrue( is_plugin_active( 'PLUGIN_GIT_REP_NAME/PLUGIN_GIT_REP_NAME.php' ) );

    }

}
