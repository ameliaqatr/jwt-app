<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//register
$router->group([
    'prefix' => 'auth',
], function () use ($router){
    $router->post('/register', 'UserController@register');
});

//login
$router->post('/login', 'UserController@login');

//logout
$router->get('/logout', 'UserController@logout');

//me melihat pengguna yg sedang login
$router->get('/me', 'UserController@me');

//index list pengguna
$router->get('/user', 'UserController@index');

