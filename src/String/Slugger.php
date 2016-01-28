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
namespace MyApp\String;

/**
 * Generates a slug from a string
 *
 * @package MyApp\String
 */
class Slugger
{
    /**
     * Creates a slugs
     *
     * @param $text
     * @return string
     */
    public function createSlug($text)
    {
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $text);
        $slug = strtolower($slug);

        return $slug;
    }
}