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
namespace MyApp\Controller;

use Interop\Container\ContainerInterface;

/**
 * Creates an Index Controller
 *
 * @package MyApp\Controller
 */
class IndexControllerFactory
{
    /**
     * Creates an Index Controller
     *
     * @param ContainerInterface $container
     * @return IndexController
     */
    public function __invoke(ContainerInterface $container)
    {
        return new IndexController($container->get('Zend\Expressive\Template\TemplateRendererInterface'));
    }
}