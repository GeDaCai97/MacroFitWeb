<h2>Calculadora de Macros</h2>
<?php foreach($errores as $error):  ?>
    <div class="alerta error">
        <?php echo $error;  ?>
    </div>
<?php endforeach;  ?>

<div class="form-div">
    <div>
        <form action="/contenido/calcular" method="POST" class="formulario" id="calculadora">
            <fieldset>
                <legend>Calcula tus cantidades</legend>

                <label for="peso">Peso:</label>  
                <input type="number" id="peso" name="nutricion[peso]" placeholder="Peso" value="<?php echo s($nutricion->peso); ?>" >

                <label for="altura">Altura:</label> 
                <input type="number" id="altura" name="nutricion[altura]" placeholder="Altura" value="<?php echo s($nutricion->altura); ?>" >

                <label for="edad">Edad:</label> 
                <input type="number" id="edad" name="nutricion[edad]" placeholder="Edad" value="<?php echo s($nutricion->edad); ?>" >
                
                <label for="sexo">Sexo:</label> 
                <select id="sexo" name="nutricion[sexo]">
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="hombre" <?php echo $nutricion->sexo === 'hombre' ? 'selected' : ''; ?> >Hombre</option>
                <option value="mujer" <?php echo $nutricion->sexo === 'mujer' ? 'selected' : ''; ?>>Mujer</option>
                </select>

                <label for="actividad">Nivel de actividad:</label> 
                <select id="actividad" name="nutricion[actividad]">
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="1.2" <?php echo $nutricion->actividad === '1.2' ? 'selected' : ''; ?> >Sedentario (poco o ningún ejercicio)</option>
                <option value="1.375" <?php echo $nutricion->actividad === '1.375' ? 'selected' : ''; ?> >Ligero (ejercicio ligero/deportes 1-3 días/semana)</option>
                <option value="1.55" <?php echo $nutricion->actividad === '1.55' ? 'selected' : ''; ?> >Moderado (ejercicio moderado/deportes 3-5 días/semana)</option>
                <option value="1.725" <?php echo $nutricion->actividad === '1.725' ? 'selected' : ''; ?> >Activo (ejercicio duro/deportes 6-7 días a la semana)</option>
                <option value="1.9" <?php echo $nutricion->actividad === '1.9' ? 'selected' : ''; ?> >Muy activo (ejercicio muy duro/físico y trabajo físico)</option>
                </select>

                <label for="objetivo">Objetivo:</label> 
                <select id="objetivo" name="nutricion[objetivo]">
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="mantener" <?php echo $nutricion->objetivo === 'mantener' ? 'selected' : ''; ?> >Mantener peso</option>
                <option value="perder" <?php echo $nutricion->objetivo === 'perder' ? 'selected' : ''; ?> >Perder peso</option>
                <option value="ganar" <?php echo $nutricion->objetivo === 'ganar' ? 'selected' : ''; ?> >Ganar masa muscular</option>
                <option value="grasa" <?php echo $nutricion->objetivo === 'grasa' ? 'selected' : ''; ?> >Perder grasa</option>
                </select>

                <label for="distribucion">Distribución de macronutrientes:</label> 
                <select id="distribucion" name="nutricion[distribucion]">
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="0.5" <?php echo $nutricion->distribucion === '0.5' ? 'selected' : ''; ?> >50% Carbohidratos, 25% Proteínas, 25% Grasas</option>
                <option value="0.4" <?php echo $nutricion->distribucion === '0.4' ? 'selected' : ''; ?> >40% Carbohidratos, 30% Proteínas, 30% Grasas</option>
                <option value="0.3" <?php echo $nutricion->distribucion === '0.3' ? 'selected' : ''; ?> >30% Carbohidratos, 40% Proteínas, 30% Grasas</option>
                </select>

            </fieldset>
            <input type="submit" class="boton-calcular boton-form" value="Calcular">
        </form>

        <!-- Calculadora de macros  -->
    </div>
    <div class="form-info">
        <h3>Herramienta Calculadora</h3>
        <p>
            Ante todo, es importante que sepas que nuestro objetivo con esta herramienta es que puedas calcular tu IMC (Índice de masa corporal) actual y el consumo calórico diario que permitirá lograr tu objetivo: Ganar masa muscular, mantenimiento o Definición muscular.
        </p>
        <p>
        Nuestra calculadora de calorías utiliza las fórmulas más precisas que existen hoy en día para poder darte resultados confiables.
        La ciencia hoy nos permite, a través de la calculadora de calorías y la calculadora de IMC, determinar el consumo calórico diario sin tener que llevar a cabo un examen clínico.
        Para calcular tu IMC y las calorías según tu objetivo vamos a necesitar datos como el género, edad, altura, peso y nivel de actividad física actual.
        Esta calculadora te permitirá conocer la clasificación según tu Índice de masa corporal, tu peso ideal, El máximo potencial muscular (En el caso de los hombres), entre otros.
        Pero es importante tener en cuenta que sólo es capaz de predecir un promedio de tu gasto calórico diario basándose en los factores antes mencionados (género, peso, altura, etc) y el nivel de actividad física diaria.
        Nuestra herramienta no toma en cuenta factores de igual importancia como el descanso, el estrés, la calidad de las calorías, el balance calórico, etc.
        Por lo tanto debes tomar en cuenta que una predicción basada solo en las calorías que gastas y consumes no es suficiente para determinar tu estado de salud actual.
        </p>
            
        
    </div>

</div>




<div class="section-principal">
    <h2 id="articulos">Ultimos Articulos</h2>
    <h3 class="parrafos-titulo">Lea lo ultimo del mundo fitness</h3>
    <section class="contenedor-articulos">
        <!--1-->
        <div class="articulos">
            <span class="etiqueta">¿Qué son los macros?</span>
            <p>
            Para las personas nuevas en este ámbito, “macros” es la abreviatura de “macronutrientes”, que son los nutrientes de los alimentos presentes en grandes cantidades que nos proporcionan energía. Los tres macronutrientes principales son proteínas, carbohidratos y grasas. No hay que confundirlos con los micronutrientes, que son las vitaminas y minerales presentes en los alimentos en pequeñas cantidades.
            </p>

            <div class ="mas-informacion">
                <a href="/informacion#macronutrientes" class="boton-amarillo">Leer más</a>
                <span class="span-lectura">4 minutos de lectura</span>
            </div>

        </div>
        <!--2-->
        <div class="articulos">
            <span class="etiqueta">Calcular calorías de mantenimiento</span>
            <p>
            Da igual cuál sea tu objetivo principal; calcular tus calorías de mantenimiento te ayudará a saber cuál debe ser tu ingesta calórica diaria para mantener tu peso. Cada persona cuenta con una cantidad diferente de calorías de mantenimiento, ya que esto puede variar con la edad, el sexo, el nivel de actividad física y otros factores.
            </p>

            <div class ="mas-informacion">
                <a href="/informacion#rutinas" class="boton-amarillo">Leer más</a>
                <span class="span-lectura">4 minutos de lectura</span>
            </div>

        </div>
        <!--3-->
        <div class="articulos">
            <span class="etiqueta">Dietas</span>
            <p>
            El ayuno intermitente es una estrategia nutricional que consiste en alternar períodos de ayuno con períodos de alimentación. 
            Algunos estudios sugieren que el ayuno intermitente puede tener beneficios para la salud, como la pérdida de peso, la mejora 
            de la sensibilidad a la insulina y la reducción del riesgo de enfermedades crónicas.
            </p>

            <div class ="mas-informacion">
                <a href="/informacion#tiposdietas" class="boton-amarillo">Leer más</a>
                <span class="span-lectura">4 minutos de lectura</span>
            </div>

    </section>
</div>