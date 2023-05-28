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


// Admin routes
$router->map(
    'GET',
    '/admin',
    'App\Controllers\Admin\DashboardController@show',
    'admin_dashboard'
);

$router->map(
    'POST',
    '/admin',
    'App\Controllers\Admin\DashboardController@get',
    'admin_form'
);

// Product management
$router->map(
    'GET',
    '/admin/product/categories',
    'App\Controllers\Admin\ProductCategoryController@show',
    'product_category'
);

$router->map(
    'POST',
    '/admin/product/categories',
    'App\Controllers\Admin\ProductCategoryController@store',
    'create_product_category'
);

$router->map(
    'POST',
    '/admin/product/categories/[i:id]/edit',
    'App\Controllers\Admin\ProductCategoryController@edit',
    'edit_product_category'
);

$router->map(
    'POST',
    '/admin/product/categories/[i:id]/delete',
    'App\Controllers\Admin\ProductCategoryController@delete',
    'delete_product_category'
);
