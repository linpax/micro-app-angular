<?php

return [
    'components' => [
        'router' => [
            'class' => '\Micro\web\Router',
            'arguments' => [
                'routes' => [
                    '/rest/<module:\w+>/<controller:\w+>/<action:\w+>' => '/rest/<module>/<controller>/<action>',
                    '/rest/<controller:\w+>/<action:\w+>/<id:\d+>'     => '/rest/<controller>/<action>',
                    '/rest/<controller:\w+>/<id:\d+>'                  => '/rest/<controller>/index'
                ]
            ]
        ]
    ]
];
