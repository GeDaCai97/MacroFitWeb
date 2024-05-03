<?php
namespace Controllers;

use Model\Alimento;
use Model\Dieta;
use Model\Nutricion;
use Model\MacroNutrientes;
use MVC\Router;

class PaginasController {
    public static function index(Router $router) {
        $inicio = true;
        $errores = Nutricion::getErrores();
        $router->render('contenido/contenido', [
            'inicio' => $inicio,
            'errores' => $errores
        ]);
    }
    public static function calcular(Router $router) {
        $inicio = true;
        $nutricion = new Nutricion;
        $errores = Nutricion::getErrores();
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nutricion = new Nutricion($_POST['nutricion']);
            
            $errores = $nutricion->validar();
            
            if(empty($errores)) {
                $macroNutri = $nutricion->calcularMacroNutri();
    
                $objmacroNutri = new MacroNutrientes($macroNutri);
                
                $caloriasfilt = $objmacroNutri->validarDieta($objmacroNutri->calorias);
                
                if($caloriasfilt) {
                    $dieta = Dieta::find($caloriasfilt);
                } else {
                    $dieta = null;
                }
                
                

                $router->render('contenido/masinfo', [
                    'nutricion' => $nutricion,
                    'objmacroNutri' => $objmacroNutri,
                    'dieta' => $dieta
                ]);


            } else {
                $router->render('contenido/contenido', [
                    'nutricion' =>$nutricion,
                    'inicio' => $inicio,
                    'errores' => $errores
                ]);
            }
            
            
            
  
        }
        // $router->render('contenido/masinfo', [
        //     'nutricion' => $nutricion,
        //     'objmacroNutri' => $objmacroNutri
        // ]);
    }
    public static function informacion(Router $router) {
        $router->render('contenido/informacion', [

        ]);
    }
    public static function otrainfo(Router $router) {
        $alimentos = Alimento::all();
        $router->render('contenido/otrainfo', [
            'alimentos' => $alimentos
        ]);
    }
}