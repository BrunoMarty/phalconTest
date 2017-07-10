<?php

$router = $di->getRouter();

// Define your routes here

$router->add(
    '/tuto',
    [
        'controller' => 'index',
        'action'     => 'tuto',
    ]
);

$router->add(
    '/forum',
    [
        'controller' => 'index',
        'action'     => 'forum',
    ]
);


// ADMIN

$router->add(
    '/admin/tuto/new',
    [
        'controller' => 'admin',
        'action'     => 'new_tuto',
    ]
);

$router->add(
    '/admin/tuto/add',
    [
        'controller' => 'admin',
        'action'     => 'add_tuto',
    ]
);
$router->handle();


