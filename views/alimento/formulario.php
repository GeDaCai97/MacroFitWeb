            <label for="nomAlimento">Nombre de Alimento:</label>  
            <textarea id="nomAlimento" name="alimento[nomAlimento]"><?php echo s($alimento->nomAlimento); ?></textarea>

            <label for="gramos">Gramos:</label> 
            <input type="number" id="gramos" name="alimento[gramos]" placeholder="gramos" value="<?php echo s($alimento->gramos); ?>">

            <label for="proteina">Proteínas</label> 
            <input type="number" id="proteina" name="alimento[proteina]" placeholder="proteina" value="<?php echo s($alimento->proteina); ?>">

            <label for="calorias">Calorías:</label> 
            <input type="number" id="calorias" name="alimento[calorias]" placeholder="calorias" value="<?php echo s($alimento->calorias); ?>">

            <label for="grasas">Grasas:</label> 
            <input type="number" id="grasas" name="alimento[grasas]" placeholder="grasas" value="<?php echo s($alimento->grasas); ?>">
            
        </fieldset>