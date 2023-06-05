<?php
use App\Models\User;

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
    $users = User::all();

    // You can return the data or perform any other operations
    return response()->json($users);
});

/** @var \Laravel\Lumen\Routing\Router $router */

$router->post('/register', 'AuthController@register');
$router->post('/login', 'AuthController@login');
$router->get('/user', ['middleware' => 'auth', 'uses' => 'AuthController@user']);

