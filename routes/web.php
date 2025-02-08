<?php

/** @var \Laravel\Lumen\Routing\Router $router */

// Handle OPTIONS preflight requests for all routes

// Group routes with CORS middleware

$router->group(['middleware' => 'cors'], function () use ($router) {
    $router->get('/categories', 'CategoryController@index');
    $router->get('/categories/{id}/levels', 'LevelController@index');
    $router->get('/levels/{id}/questions', 'QuestionController@index');
});



// Default route for checking Lumen version
$router->get('/', function () use ($router) {
    return $router->app->version();
});
