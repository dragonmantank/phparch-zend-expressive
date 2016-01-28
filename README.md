# php[architect] Zend Expressive Demo App

This repository is for looking at the demo code for a php[architect] article that I wrote, all put together and in
a working state. 

## Using this code

Feel free to clone this repository, run a `composer install` to download all of the dependencies, and try it in a 
vagrant box. You can also run it locally with:

    php -S 0.0.0.0:8080 -t public/
    
You should then be able to hit the `/` route and see a message. That's about it!

## Differences from the article

There are a few differences from the article. First, there are many more classes in the `dependencies` section than 
what I showed in the article. This was due to space constraints, but here you can see everything all put together.

Some code may also be missing, such as the `/profile` route. 

The Session code is also handled by a middleware I am working on, instead of being part of the `MyApp\` namespace.

## What doesn't work

There is no database connection set up, but this code does include [`Zend\Db`](https://packagist.org/packages/zendframework/zend-db),
so you could hook it up to one. 