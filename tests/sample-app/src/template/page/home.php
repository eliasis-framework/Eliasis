<?php
/**
 * Eliasis PHP Framework application.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2017 - 2018 (c) Josantonius - Eliasis Framework
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/eliasis-framework/eliasis
 * @since     1.1.2
 */
use Eliasis\Framework\View;
use Josantonius\Hook\Hook;

echo View::getOption('test');
?>
    <body>
        <?php Hook::doAction('after-body'); ?>
    </body>
