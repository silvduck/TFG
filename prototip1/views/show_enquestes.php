<label>Llistat d'enquestes</label>
<br>
<select name="tipus_enquesta" id="tipus_enquesta" class="browser-default custom-select mb-4">
    <?php foreach ($result_enquestes as $enquesta): ?>
        <option value="tipus_enquesta_name-<?php echo $enquesta['codi'];?>"><?php echo htmlentities($enquesta['nom']);?></option>
    <?php endforeach; ?>
</select>

<br><br><br>
<button onclick="return resultats();">Visualitzar</button>