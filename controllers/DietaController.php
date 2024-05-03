<?php
namespace Controllers;

use Model\Dieta;
use MVC\Router;

class DietaController {
    public static function crear(Router $router) {
        $dieta = new Dieta();
        $errores = Dieta::getErrores();
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $dieta = new Dieta($_POST['dieta']);
            $errores = $dieta->validar();
            if(empty($errores)) {
                $dieta->crear();
            }  
        }

        $router->render('dieta/crear', [
            'errores' => $errores,
            'dieta' => $dieta
        ]);
    }
    public static function actualizar(Router $router) {
        $idCalorias = validarRedireccionar("/admin");
        $dieta = Dieta::find($idCalorias);
        $errores = Dieta::getErrores();
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $args = $_POST['dieta'];
            $dieta->sincronizar($args);
            $errores = $dieta->validar();
            if(empty($errores)) {
                $dieta->actualizar();
            }
            
        }
        $router->render('dieta/actualizar', [
            'dieta' => $dieta,
            'errores' => $errores
        ]);
    }
    public static function eliminar() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['idCalorias'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
            if($id) {
                $tipo = $_POST['tipo'];
                if(validarTipoContenido($tipo)) {
                    $dietas = Dieta::find($id);
                    $dietas->eliminar();
                }
            }
        }
    }
    
}