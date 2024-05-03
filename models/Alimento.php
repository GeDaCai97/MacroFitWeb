<?php
namespace Model;

class Alimento extends ActiveRecord {
    protected static $columnasDB = ['id', 'nomAlimento', 'gramos', 'proteina', 'calorias', 'grasas'];
    protected static $tabla = 'alimentos';

    public $id;
    public $nomAlimento;
    public $gramos;
    public $proteina;
    public $calorias;
    public $grasas;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nomAlimento = $args['nomAlimento'] ?? '';
        $this->gramos = $args['gramos'] ?? '';
        $this->proteina = $args['proteina'] ?? '';
        $this->calorias = $args['calorias'] ?? '';
        $this->grasas = $args['grasas'] ?? '';
    }
    public function validar() {
        if(!$this->nomAlimento) {
            self::$errores[] = "Debes añadir un Nombre Alimento";
        }
        if(!$this->gramos) {
            self::$errores[] = "Los gramos son obligatorios";
        }
        if(!$this->proteina) {
            self::$errores[] = "Las proteinas son obligatorias";
        }
        if(!$this->calorias) {
            self::$errores[] = "Las calorias son obligatorias";
        }
        if(!$this->grasas) {
            self::$errores[] = "Las grasas son obligatorias";
        }
        return self::$errores;
    }
}