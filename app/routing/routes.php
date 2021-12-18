<?php

$router = new AltoRouter;

// Home Routes
// $router->setBasePath(''); -> Don't need it when not using xampp
$router->map(
    'GET',
    '/',
    'App\Controllers\IndexController@show',
    'home'
);

