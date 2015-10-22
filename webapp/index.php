<?php

/** @var \Composer\Autoload\ClassLoader $loader */
$loader = require __DIR__ . '/../vendor/autoload.php';
//$loader->addPsr4('App\\', __DIR__ . '/../app', false); # psr-4 project with composer

$app = new \Micro\Micro(
    __DIR__ . '/../app',
    __DIR__ . '/../vendor/linpax/microphp-framework',
    'devel',
    false,
    true # if enable psr-4 for project with composer, make this to false
);

if (array_key_exists('r', $_GET) && strpos($_GET['r'], '/rest') === FALSE) { # if disable hash into AngularJS
    $_GET['r'] = '/';
}

$app->run(new \Micro\web\Request())->send();

$app->terminate();
