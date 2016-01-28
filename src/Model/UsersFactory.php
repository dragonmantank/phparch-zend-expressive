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

use Interop\Container\ContainerInterface;

/**
 * Generates a Users model
 *
 * @package MyApp\Model
 */
class UsersFactory
{
    /**
     * Creates the Users object
     *
     * @param ContainerInterface $container
     * @return Users
     */
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('Zend\Db\Adapter\Adapter');

        return new Users($dbAdapter);
    }
}
