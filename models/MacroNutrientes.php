<?php
namespace Model;


class MacroNutrientes extends ActiveRecord {
    public $calorias;
    public $carbohidratos;
    public $proteinas;
    public $grasas;

    protected static $validarDieta;

    public function __construct($args = [])
    {
        $this->calorias = $args['calorias'] ?? '';
        $this->carbohidratos = $args['carbohidratos'] ?? '';
        $this->proteinas = $args['proteinas'] ?? '';
        $this->grasas = $args['grasas'] ?? '';
    }
    public function validarDieta($calorias) {
        if ($calorias >= 1500.00 && $calorias <= 1750.00) {
            $validarDieta = 1500;
        }
        else if ($calorias >= 1751.00 && $calorias <= 2000.00) {
            $validarDieta = 1751;
        }
        else if ($calorias >= 2001.00 && $calorias <= 2250.00) {
            $validarDieta = 2001;
        }
        else if ($calorias >= 2251.00 && $calorias <= 2500.00) {
            $validarDieta = 2251;
        }
        else if ($calorias >= 2501.00 && $calorias <= 2750.00) {
            $validarDieta = 2501;
        }
        else if ($calorias >= 2751.00 && $calorias <= 3000.00) {
            $validarDieta = 2751;
        } else {
            $validarDieta = false;
        }
        return $validarDieta;
        
    }
}