<?php

$params = array_replace_recursive(
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    // Site name
    'company' => 'app',
    'slogan' => 'app slogan',

    // Language
    'lang' => 'ru',

    // Errors
    'errorController' => '\App\controllers\DefaultController',
    'errorAction' => 'error',

    // Parameters
    'params' => $params
];
