<section class="contenedor seccion">
    <a href="/admin" class="boton boton-verde">Volver</a>
    <h2>Crear Alimento</h2>
    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form method="POST" class="formulario">
    <fieldset>
        <legend>Crea nuevo Alimento</legend>
    <?php include __DIR__ . '/formulario.php' ?>
    <input type="submit" class="boton-calcular boton-form" value="Crear Alimento">
    </form> 
</section>
