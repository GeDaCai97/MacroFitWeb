<?php
namespace Model;


class Nutricion extends ActiveRecord {
    public $peso;
    public $altura;
    public $edad;
    public $sexo;
    public $actividad;
    public $objetivo;
    public $distribucion;

    public function __construct($args = [])
    {
        $this->peso = $args['peso'] ?? '';
        $this->altura = $args['altura'] ?? '';
        $this->edad = $args['edad'] ?? '';
        $this->sexo = $args['sexo'] ?? '';
        $this->actividad = $args['actividad'] ?? '';
        $this->objetivo = $args['objetivo'] ?? '';
        $this->distribucion = $args['distribucion'] ?? '';
    }
    public function validar() {
        if(!$this->peso) {
            self::$errores[] = "El peso es obligatorio";
        }
        if(!$this->altura) {
            self::$errores[] = "La altura es obligatoria";
        }
        if(!$this->edad) {
            self::$errores[] = "La edad es obligatoria";
        }
        if(!$this->sexo) {
            self::$errores[] = "El Sexo es obligatorio";
        }
        if(!$this->actividad) {
            self::$errores[] = "La actividad es obligatoria";
        }
        if(!$this->objetivo) {
            self::$errores[] = "El objetivo es obligatorio";
        }
        if(!$this->distribucion) {
            self::$errores[] = "La distribucion es obligatorio";
        }
        return self::$errores;
    }
    public function calcularMacroNutri() {
        if($this->sexo == 'hombre') {
            $tmb = 88.362 + (13.397 * $this->peso) + (4.799 * $this->altura) - (5.677 * $this->edad);
        } else {
            $tmb = 447.593 + (9.247 * $this->peso) + (3.098 * $this->altura) - (4.330 * $this->edad);
        }
        
        $calorias = $tmb * $this->actividad;

        switch($this->objetivo) {
            case 'mantener':
                $calorias *= 1;
                break;
            case 'perder':
                $calorias *= 0.85;
                break;
            case 'ganar':
                $calorias *= 1.15;
                break;
            case 'grasa':
                $calorias *= 0.75;
                break;
            default:
                echo "valores erroneos";
        }
        // 0.5,0.25,0.25
        // 0.4,0.3,0.3
        // 0.3,0.4,0.3
        switch($this->distribucion) {
            case 0.5:
                $newdistribucion = [
                    'Carbohidratos' => 0.5,
                    'Proteinas' => 0.25,
                    'Grasas' => 0.25
                ];
                break;
            case 0.4:
                $newdistribucion = [
                    'Carbohidratos' => 0.4,
                    'Proteinas' => 0.3,
                    'Grasas' => 0.3
                ];
                break;
            case 0.3:
                $newdistribucion = [
                    'Carbohidratos' => 0.3,
                    'Proteinas' => 0.4,
                    'Grasas' => 0.3
                ];
                break;
            default:
                echo "Ninguno";
                break;
        }
        $carbohidratos = $calorias * $newdistribucion['Carbohidratos'] / 4;
        $proteinas = $calorias * $newdistribucion['Proteinas'] / 4;
        $grasas = $calorias * $newdistribucion['Grasas'] / 9;

        //Crear arreglo a objeto
        $macroNutri = [
            'calorias' => $calorias,
            'carbohidratos' => $carbohidratos,
            'proteinas' => $proteinas,
            'grasas' => $grasas
        ];
        return $macroNutri;
    }
}