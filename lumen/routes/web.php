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
    return "hola";//$router->app->version();
});
$router->post('/login', 'LoginController@login');
$router->get('/cana-talada', 'CanaController@getCanaTalada');
$router->get('/accidentes', 'AccidentesController@getaccidentes');
$router->get('/alarma', 'AlarmaController@getAlarmas');
$router->get('/produccion', 'ProduccionController@getProduccion');
$router->get('/horas', 'HorasController@getHoras');