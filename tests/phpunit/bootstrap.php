<?php
/**
* Bootstrap the plugin unit testing environment.
*
* Edit 'active_plugins' setting below to point to your main plugin file.
*
* @package wordpress-plugin-tests
*/

// Activates this plugin in WordPress so it can be tested.
$GLOBALS['wp_tests_options'] = array(
'active_plugins' => array( 'PLUGIN_GIT_REP_NAME/PLUGIN_GIT_REP_NAME.php' ),
);

// load bootstra file
if ( getenv( 'TRAVIS' ) ) {
    require '/tmp/wordpress-tests/tests/phpunit/includes/bootstrap.php';
}else{
    require '../../../../../wp-tests/tests/phpunit/includes/bootstrap.php';
}

//just trying to add it manually in travis-ci but i think it is not the perfect way
// to load a plugin in this way just after the loading of all WordPress framework
if ( getenv( 'TRAVIS' ) ) {
    require '/tmp/wordpress/wp-content/plugins/PLUGIN_GIT_REP_NAME/PLUGIN_GIT_REP_NAME.php';
}