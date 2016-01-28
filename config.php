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

return [
    'dependencies' => [
        'invokables' => [
            MyApp\String\Slugger::class => MyApp\String\Slugger::class,
            Zend\Expressive\Helper\ServerUrlHelper::class => Zend\Expressive\Helper\ServerUrlHelper::class,
            Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\FastRouteRouter::class,
        ],
        'factories' => [
            Zend\Db\Adapter\Adapter::class => Zend\Db\Adapter\AdapterServiceFactory::class,
            MyApp\Model\Users::class => MyApp\Model\UsersFactory::class,
            MyApp\Controller\IndexController::class  => MyApp\Controller\IndexControllerFactory::class,
            Zend\Expressive\Application::class => Zend\Expressive\Container\ApplicationFactory::class,
            Zend\Expressive\Template\TemplateRendererInterface::class => Zend\Expressive\Twig\TwigRendererFactory::class,
            'Zend\Expressive\FinalHandler' => Zend\Expressive\Container\TemplatedErrorHandlerFactory::class,
            'SessionContainer' => Dragonmantank\Http\Session\Factory\ZendSessionFactory::class,
            'SessionMiddleware' => Dragonmantank\Http\Session\Factory\SessionMiddlewareFactory::class,
            Zend\Expressive\Helper\UrlHelper::class => Zend\Expressive\Helper\UrlHelperFactory::class,
            Zend\Expressive\Helper\ServerUrlMiddleware::class => Zend\Expressive\Helper\ServerUrlMiddlewareFactory::class,
        ]
    ],

    'routes' => [
        [
            'name' => 'homepage',
            'path' => '/',
            'middleware' => MyApp\Controller\IndexController::class,
            'allowed_methods' => ['GET'],
        ],
    ],

    'middleware_pipeline' => [
        'always' => [
            'middleware' => [
                'SessionMiddleware'
            ],
            'priority' => 100000,
        ]
    ],

    'templates' => [
        'extension' => 'twig',
        'paths' => [
            '__main__' => ['views', 'views/layouts'],
            'account' => ['views/account'],
            'error' => ['views/error'],
            'index' => ['views/index'],
        ]
    ],
];