<?php

use App\Models\Produtos;
use App\Models\Usuarios;
use Illuminate\Http\Request;

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

// PRODUTOS
$router
    ->group(["prefix" => "/produtos"], function () use ($router) {
        $router->get("/", function (Request $request) {

            return response(Produtos::all());
        });
    });
// USUARIOS
$router
    ->group(["prefix" => "/usuarios"], function () use ($router) {
        $router->get("/", function (Request $request) {
            return response(Usuarios::all());
        });
    });
// PEDIDOS
$router
    ->group(["prefix" => "/pedidos"], function () use ($router) {
        $router->get("/", function (Request $request) {
        });
    });
