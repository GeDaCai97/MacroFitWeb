<?php
require_once __DIR__ . '/../includes/app.php';

use Controllers\AdminController;
use Controllers\AlimentoController;
use Controllers\DietaController;
use Controllers\PaginasController;
use MVC\Router;

$router = new Router();

//Public
$router->get('/', [PaginasController::class, 'index']);
$router->post('/contenido/calcular', [PaginasController::class, 'calcular']);
$router->get('/informacion', [PaginasController::class, 'informacion']);
$router->get('/otrainfo', [PaginasController::class, 'otrainfo']);
$router->get('/crearusuario', [AdminController::class, 'crearadmin']);
$router->get('/login', [AdminController::class, 'login']);
$router->post('/login', [AdminController::class, 'login']);
$router->get('/logout', [AdminController::class, 'logout']);

//Privado
$router->get('/admin', [AdminController::class, 'index']);

$router->get('/dieta/crear', [DietaController::class, 'crear']);
$router->post('/dieta/crear', [DietaController::class, 'crear']);
$router->get('/dieta/actualizar', [DietaController::class, 'actualizar']);
$router->post('/dieta/actualizar', [DietaController::class, 'actualizar']);
$router->post('/dieta/eliminar', [DietaController::class, 'eliminar']);

$router->get('/alimento/crear', [AlimentoController::class, 'crear']);
$router->post('/alimento/crear', [AlimentoController::class, 'crear']);
$router->get('/alimento/actualizar', [AlimentoController::class, 'actualizar']);
$router->post('/alimento/actualizar', [AlimentoController::class, 'actualizar']);
$router->post('/alimento/eliminar', [AlimentoController::class, 'eliminar']);


$router->comprobarRutas();
