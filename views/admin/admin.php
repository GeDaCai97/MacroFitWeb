<section class="contenedor seccion">
    <h1>Panel de Administrador</h1>
    

    <a href="dieta/crear" class="boton boton-verde">Nueva Dieta</a>
    <a href="alimento/crear" class="boton boton-amarillo">Nuevo Alimento</a>
    <?php 
 
            if($resultado) {
                $mensaje = mostrarNotificacion(intval($resultado) );
                if($mensaje) { ?>
                <p class="alerta exito"><?php echo s($mensaje) ?></p>  

        <?php  } 
            }
        ?>
    <h2>Dietas</h2>
    <table class="tabla-admin">
        <thead>
            <tr>
                <th>idCalorias</th>
                <th>Desayuno</th>
                <th>Colación 1</th>
                <th>Comida</th>
                <th>Colación 2</th>
                <th>Cena</th>
                <th>Total Calorías</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($dietas as $dieta): ?>

            <tr>
                <td><?php echo $dieta->idCalorias; ?></td>
                <td><?php echo $dieta->desayuno; ?></td>
                <td><?php echo $dieta->colacion1; ?></td>
                <td><?php echo $dieta->comida; ?></td>
                <td><?php echo $dieta->colacion2; ?></td>
                <td><?php echo $dieta->cena; ?></td>
                <td><?php echo $dieta->totalCalorias; ?></td>
                <td>
                    <form method="POST" class="w-100" action="dieta/eliminar">
                        <input type="hidden" name="idCalorias" value="<?php echo $dieta->idCalorias; ?>">
                        <input type="hidden" name="tipo" value="dieta">
                        <input type="submit" class="boton-rojo-block w-100" value="Eliminar">
                    </form>
                    <a href="dieta/actualizar?id=<?php echo $dieta->idCalorias; ?>" class="boton boton-amarillo-block">Actualizar</a>
                </td>
            </tr>
            <?php endforeach; ?>
            
        </tbody>
    </table>

    <h2>Alimentos</h2>

    <table class="tabla-admin">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Alimento</th>
                <th>Gramos</th>
                <th>Proteína</th>
                <th>Calorías</th>
                <th>Grasas</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
        <?php foreach($alimentos as $alimento): ?>
            <tr>
                <td><?php echo $alimento->id; ?></td>
                <td><?php echo $alimento->nomAlimento; ?></td>
                <td><?php echo $alimento->gramos; ?></td>
                <td><?php echo $alimento->proteina; ?></td>
                <td><?php echo $alimento->calorias; ?></td>
                <td><?php echo $alimento->grasas; ?></td>
                <td>
                    <form method="POST" class="w-100" action="alimento/eliminar">
                        <input type="hidden" name="id" value="<?php echo $alimento->id; ?>">
                        <input type="hidden" name="tipo" value="alimento">
                        <input type="submit" class="boton-rojo-block w-100" value="Eliminar">
                    </form>
                    <a href="alimento/actualizar?id=<?php echo $alimento->id; ?>" class="boton boton-amarillo-block">Actualizar</a>
                </td>
            </tr>
            <?php endforeach; ?>
            
        </tbody>
    </table>
</section>
