<?php

$rotas = [
    '/' => [
        'GET' => '\Controlador\AppControlador#index',
    ],
    '/contato' => [
        'GET' => '\Controlador\AppControlador#contato',
    ],
    '/index' => [
        'GET' => '\Controlador\AppControlador#index',
    ],
    '/login' => [
        'GET' => '\Controlador\AppControlador#login',
    ]
];
