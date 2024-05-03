<?php
namespace Controllers;

use Model\Admin;
use Model\Alimento;
use Model\Dieta;
use MVC\Router;

class AdminController {
    public static function index(Router $router) {
        $resultado = $_GET['resultado'] ?? null;
        $dietas = Dieta::all();
        $alimentos = Alimento::all();
        $router->render('admin/admin', [
            'resultado' => $resultado,
            'dietas' => $dietas,
            'alimentos' => $alimentos
        ]);
    }
    public static function login( Router $router) {
        $errores = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth = new Admin($_POST);
            $errores = $auth->validar();
            if(empty($errores)) {
                $resultado = $auth->existeUsuario();
                if(!$resultado) {
                    $errores = Admin::getErrores();
                } else {
                    $autenticado = $auth->comprobarPassword($resultado);
                    if($autenticado) {
                        $auth->autenticar();
                        
                    } else {
                        $errores = Admin::getErrores();
                    }
                }
            }
            
        }
        
        
        $router->render('admin/login', [
            'errores' => $errores
        ]);
    }
    public static function logout() {
        session_start();
        $_SESSION = [];
        header("Location: /");
    }
}