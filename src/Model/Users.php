<?php
/**
 * Sample Zend Expressive Application for php[architect]
 *
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE', which is part of this source code package.
 *
 * @link      https://github.com/dragonmantank/phparch-zend-expressive for the canonical source repository
 * @copyright Copyright (c) 2015 Chris Tankersley
 * @license   See LICENSE
 */
namespace MyApp\Model;

use Zend\Db\Adapter\Adapter;
use Zend\Db\Sql\Sql;

/**
 * Interface for working with the Users table
 * Doesn't actually work, just here for demonstration purposes
 *
 * @package MyApp\Model
 */
class Users
{
    /**
     * @var Adapter
     */
    protected $dbAdapter;

    /**
     * Users constructor.
     * @param Adapter $dbAdapter
     */
    public function __construct(Adapter $dbAdapter)
    {
        $this->dbAdapter = $dbAdapter;
    }

    /**
     * Saves a user to a database
     *
     * @param array $user
     */
    public function saveUser(array $user)
    {
        $sql = new Sql($this->dbAdapter);
        $insert = $sql->insert('users');
        $insert->columns(array_keys($user))->values($user);
        $sql->prepareStatementForSqlObject($insert)->execute();
    }
}