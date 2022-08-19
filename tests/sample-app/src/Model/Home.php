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
namespace App\Model;

use Eliasis\Framework\Model;

/**
 * Home model.
 */
class Home extends Model
{
    /**
     * Get database instance.
     */
    public function getDatabase()
    {
        return $this->db;
    }
}
