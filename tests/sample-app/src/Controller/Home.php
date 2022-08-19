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
namespace App\Controller;

use Eliasis\Framework\Controller;

/**
 * Home controller.
 */
class Home extends Controller
{
    /**
     * Actions for header hook.
     */
    public function header()
    {
        echo '<header></header>';
    }

    /**
     * Actions for css hook.
     */
    public function css()
    {
        echo '<style></style>';
    }

    /**
     * Actions for js hook.
     */
    public function js()
    {
        echo '<script></script>';
    }

    /**
     * Actions for footer hook.
     */
    public function footer()
    {
        echo '<footer></footer>';
    }

    /**
     * Actions for route.
     */
    public function routes()
    {
        echo 'The routes were loaded correctly';
    }

    /**
     * Get model instance.
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Get database instance.
     */
    public function getDatabase()
    {
        return $this->model->getDatabase();
    }

    /**
     * Change database connection.
     */
    public function changeDatabaseConnection($id)
    {
        return $this->model->changeDatabaseConnection($id);
    }

    /**
     * Get view instance.
     */
    public function getView()
    {
        return $this->view;
    }
}
