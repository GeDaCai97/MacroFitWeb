<h1>Resultados</h1>
<section class="seccion-resultados">
    <div class="resultados">
        <h3>Tus Datos</h3>
        <div class="result">
            <p>Peso: <?php echo $nutricion->peso; ?></p>
            <p>Altura: <?php echo $nutricion->altura; ?></p>
            <p>Edad: <?php echo $nutricion->edad; ?></p>
            <p>Sexo: <?php echo $nutricion->sexo; ?></p>
        </div>
    </div>
    <div class="resultados">
        <h3>Tus calculos son:</h3>
        <div id="result" class="result">
            <p>Calorías: <?php echo number_format($objmacroNutri->calorias, 1); ?></p>
            <p>Carbohidratos: <?php echo number_format($objmacroNutri->carbohidratos, 1); ?></p>
            <p>Proteinas: <?php echo number_format($objmacroNutri->proteinas, 1); ?></p>
            <p>Grasas: <?php echo number_format($objmacroNutri->grasas, 1); ?></p>
        </div>
    </div>
    <div class="resultados">
        <h3>Tu Nivel de Actividad</h3>
        <div class="result">
            <p>
            <?php 
            switch($nutricion->actividad) {
                case '1.2':
                    echo "Sedentario (poco o ningún ejercicio)";
                    break;
                case '1.375':
                    echo "Ligero (ejercicio ligero/deportes 1-3 días/semana)";
                    break;
                case '1.55':
                    echo "Moderado (ejercicio moderado/deportes 3-5 días/semana)";
                    break;
                case '1.725':
                    echo "Activo (ejercicio duro/deportes 6-7 días a la semana)";
                    break;
                case '1.9':
                    echo "Muy activo (ejercicio muy duro/físico y trabajo físico)";
                    break;
                default:
                    echo "undefined";
                    break;
            }
            ?>
            </p>
        </div>
        <h3>Objetivo</h3>
        <div class="result">
            <p>
            <?php 
            switch($nutricion->objetivo) {
                case 'mantener':
                    echo "Mantener Peso";
                    break;
                case 'perder':
                    echo "Perder Peso";
                    break;
                case 'ganar':
                    echo "Ganar Masa Muscular";
                    break;
                case 'grasa':
                    echo "Perder Grasa";
                    break;
                default:
                    echo "undefined";
                    break;
            }
            ?>
            </p>
        </div>

    </div>
    
</section>
<section class="seccion-dieta">
<h2>Dieta sugerida en base a sus datos</h2>
    <div class="dieta">
        <?php if($dieta) { ?>
        <div class="resultados">
            <h3>Desayuno</h3>
            <div class="result">
                <p>
                <?php echo $dieta->desayuno; ?>
                </p>
            </div>
        </div>
        <div class="resultados">
            <h3>Primera Colación</h3>
            <div class="result">
                <p>
                <?php echo $dieta->colacion1; ?>
                </p>
            </div>
        </div>
        <div class="resultados">
            <h3>Comida</h3>
            <div class="result">
                <p>
                <?php echo $dieta->comida; ?>
                </p>
            </div>
        </div>
        <div class="resultados">
            <h3>Segunda Colación</h3>
            <div class="result">
                <p>
                <?php echo $dieta->colacion2; ?>
                </p>
            </div>
        </div>
        <div class="resultados">
            <h3>Cena</h3>
            <div class="result">
                <p>
                <?php echo $dieta->cena; ?>
                </p>
            </div>
        </div>
        <div class="resultados">
            <h3>Total de Calorías</h3>
            <div class="result">
                <p>
                <?php echo $dieta->totalCalorias . " calorías";?>
                </p>
            </div>
        </div>
        <?php } else {?>
        <div class="resultados re-error">
            <h3>Favor de consultar un nutriologo</h3>
            <div class="result">
                <p>
                No se pudo obtener una dieta sugerida en base a sus cálculos y datos.
                </p>
            </div>
        </div>
        <?php } ?>
    </div>
    
</section>

<section class="contenedor-articulos">
    <div class="articulos">
        <span class="etiqueta">Sobre los resultados</span>
        <p>
            Acerca de los resultados anteriores, es posible que haya información en la que es posible que no le parezca o no sea del todo de su agrado,
            debido a eso, anexamos un apartado donde pueda consultar información sobre los alimentos y sus características nutricionales que haya registro.
        </p>

        <div class ="mas-informacion">
            <a href="/otrainfo" class="boton-verde">Otra información</a>
        </div>

    </div>
</section>