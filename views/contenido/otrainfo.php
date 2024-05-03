<h1>Informacion Nutricional de Alimentos</h1>
<section class="seccion-alimentos">
    <?php foreach($alimentos as $alimento) { ?>
    <div class="resultados">
        <h3><?php echo $alimento->nomAlimento; ?></h3>
        <div class="result">
            <p>
            <?php echo $alimento->gramos . " gramos"; ?> 
            </p>
            <p>
            <?php echo $alimento->proteina . " proteinas"; ?>
            </p>
            <p>
            <?php echo $alimento->calorias . " calorías"; ?>
            </p>
            <p>
            <?php echo $alimento->grasas . " grasas"; ?>
            </p>
        </div>
    </div>
    <?php } ?>
</section>