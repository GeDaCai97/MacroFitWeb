<?php
namespace Controllers;

use Model\Alimento;
use MVC\Router;

class AlimentoController {
    public static function crear(Router $router) {
        $alimento = new Alimento();
        $errores = Alimento::getErrores();
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $alimento = new Alimento($_POST['alimento']);
            $errores = $alimento->validar();
            if(empty($errores)) {
                $alimento->crear();
            }
        }

        $router->render('alimento/crear', [
            'errores' => $errores,
            'alimento' => $alimento
        ]);
    }
    public static function actualizar(Router $router) {
        $id = validarRedireccionar("/admin");
        $alimento = Alimento::find($id);
        $errores = Alimento::getErrores();
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $args = $_POST['alimento'];
            $alimento->sincronizar($args);
            $errores = $alimento->validar();
            if(empty($errores)) {
                $alimento->actualizar();
            }
        }
        $router->render('alimento/actualizar', [
            'errores' => $errores,
            'alimento' => $alimento
        ]);
    }
    public static function eliminar() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
            if($id) {
                $tipo = $_POST['tipo'];
                if(validarTipoContenido($tipo)) {
                    $alimentos = Alimento::find($id);
                    $alimentos->eliminar();
                }
            }
        }
    }
}