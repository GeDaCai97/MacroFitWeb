<section class="contenedor seccion">
    <a href="/admin" class="boton boton-verde">Volver</a>
    <h2>Actualizar Alimento</h2>
    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form method="POST" class="formulario">
    <fieldset>
        <legend>Actualizar Alimento</legend>
    <?php include __DIR__ . '/formulario.php' ?>
    <input type="submit" class="boton-calcular boton-form" value="Actualizar Alimento">
    </form> 
</section>