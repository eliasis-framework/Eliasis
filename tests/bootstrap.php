<?php
/**
 * Eliasis PHP Framework.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2017 - 2018 (c) Josantonius - Eliasis Framework
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/eliasis-framework/eliasis
 * @since     1.1.2
 */
session_start();

require __DIR__ . '/../vendor/autoload.php';

/**
 * Load theme and plugins for testing environment.
 */
function _manually_load_environment()
{
    switch_theme('twentyseventeen');
    // require __DIR__ . '/sample-plugin.php';
}

define('WP_CORE_DIR', '/tmp/wordpress/');

define('WP_TESTS_DIR', '/tmp/wordpress-tests-lib');

require_once WP_TESTS_DIR . '/includes/functions.php';

tests_add_filter('muplugins_loaded', '_manually_load_environment');

require_once WP_TESTS_DIR . '/includes/bootstrap.php';
