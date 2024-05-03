            

            <label for="idCalorias">idCalorias:</label> 
            <select id="idCalorias" name="dieta[idCalorias]">
            <option value="" disabled selected>-- Seleccione --</option>
            <option value="1500" <?php echo $dieta->idCalorias === '1500' ? 'selected' : ''; ?> >1500</option>
            <option value="1751" <?php echo $dieta->idCalorias === '1751' ? 'selected' : ''; ?>>1751</option>
            <option value="2001" <?php echo $dieta->idCalorias === '2001' ? 'selected' : ''; ?> >2001</option>
            <option value="2251" <?php echo $dieta->idCalorias === '2251' ? 'selected' : ''; ?> >2251</option>
            <option value="2501" <?php echo $dieta->idCalorias === '2501' ? 'selected' : ''; ?> >2501</option>
            <option value="2751" <?php echo $dieta->idCalorias === '2751' ? 'selected' : ''; ?> >2751</option>
            </select>


            <label for="desayuno">desayuno:</label> 
            <textarea id="desayuno" name="dieta[desayuno]"><?php echo s($dieta->desayuno); ?></textarea>

            <label for="colacion1">Colación 1:</label> 
            <textarea id="colacion1" name="dieta[colacion1]"><?php echo s($dieta->colacion1); ?></textarea>

            <label for="comida">Comida:</label> 
            <textarea id="comida" name="dieta[comida]"><?php echo s($dieta->comida); ?></textarea>

            <label for="colacion2">Colación 2:</label> 
            <textarea id="colacion2" name="dieta[colacion2]"><?php echo s($dieta->colacion2); ?></textarea>

            <label for="cena">Cena:</label> 
            <textarea id="cena" name="dieta[cena]"><?php echo s($dieta->cena); ?></textarea>

            <label for="totalCalorias">Total Calorias:</label>  
            <input type="number" id="totalCalorias" name="dieta[totalCalorias]" placeholder="totalCalorias" value="<?php echo s($dieta->totalCalorias); ?>">
            
        </fieldset>
        
