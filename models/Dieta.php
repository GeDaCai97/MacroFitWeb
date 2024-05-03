<?php
namespace Model;

class Dieta extends ActiveRecord {
    protected static $columnasDB = ['idCalorias', 'desayuno', 'colacion1', 'comida', 'colacion2', 'cena', 'totalCalorias'];
    protected static $tabla = 'dietas';

    public $idCalorias;
    public $desayuno;
    public $colacion1;
    public $comida;
    public $colacion2;
    public $cena;
    public $totalCalorias;


    public function __construct($args = [])
    {
        $this->idCalorias = $args['idCalorias'] ?? null;
        $this->desayuno = $args['desayuno'] ?? '';
        $this->colacion1 = $args['colacion1'] ?? '';
        $this->comida = $args['comida'] ?? '';
        $this->colacion2 = $args['colacion2'] ?? '';
        $this->cena = $args['cena'] ?? '';
        $this->totalCalorias = $args['totalCalorias'] ?? '';
    }
    public function validar() {
        if(!$this->idCalorias) {
            self::$errores[] = "Debes añadir un idCalorias";
        }
        if(!$this->desayuno) {
            self::$errores[] = "El desayuno es obligatorio";
        }
        if(!$this->colacion1) {
            self::$errores[] = "La Primera Colación es obligatoria";
        }
        if(!$this->comida) {
            self::$errores[] = "La Comida es Obligatoria";
        }
        if(!$this->colacion2) {
            self::$errores[] = "La segunda colacion es obligatoria";
        }
        if(!$this->cena) {
            self::$errores[] = "La cena es obligatoria";
        }
        if(!$this->totalCalorias) {
            self::$errores[] = "El total de Calorias es obligatorio";
        }
        return self::$errores;
    }
    public static function find($id) {
        $query = "SELECT * FROM " . static::$tabla . " WHERE idCalorias = $id";
        $resultado = self::consultarSQL($query);
        return array_shift($resultado);
    }
    public function actualizar() {
        $atributos = $this->sanitizarAtributos();

        $valores =  [];
        foreach($atributos as $key =>$value) {
            $valores[] = "{$key}='{$value}'";
        }
        $query = "UPDATE " . static::$tabla . " SET ";
        $query .=  join(', ', $valores);
        $query .= " WHERE idCalorias = '" . self::$db->escape_string($this->idCalorias) . "' ";
        $query .= " LIMIT 1 ";

        $resultado = self::$db->query($query);
        if($resultado) {
            header("Location: /admin?resultado=2");
        }
    }
    public function eliminar() {
        $query = "DELETE FROM " . static::$tabla ." WHERE idCalorias = " . self::$db->escape_string($this->idCalorias) . " LIMIT 1";
        $resultado = self::$db->query($query);
        if($resultado) {
            $this->borrarImagen();
            header("Location: /admin?resultado=3");
        }
    }

}