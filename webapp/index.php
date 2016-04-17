<?php

require __DIR__ . '/../app/_bootstrap.php';
require __DIR__ . '/../app/Application.php';


$app = new \App\Application('devel', true);

if (
    array_key_exists('r', $_GET)
    && 0 !== strpos($_GET['r'], '/rest')
    && false === strpos($_GET['r'], '/admin')
) {
    $_GET['r'] = '/';
}

$response = $app->run(new \Micro\Web\Request);
$response->send();

$app->terminate();
