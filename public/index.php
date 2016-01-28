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

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$config = require 'config.php';
$serviceManagerConfig = new Zend\ServiceManager\Config($config['dependencies']);
$container = new Zend\ServiceManager\ServiceManager($serviceManagerConfig);
$container->setService('config', $config);

$app = $container->get('Zend\Expressive\Application');
$app->run();