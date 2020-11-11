<form class="text-center border border-light p-5" action="#" name="formulari" onsubmit="return validacio();">
    <p class="h4 mb-4">Importa el resultat d'una enquesta</p>
    <br>
    <label>Tipus d'enquesta</label>
    <br>
    <select name="tipus_enquesta" id="tipus_enquesta" class="browser-default custom-select mb-4">
        <?php foreach ($result_tipus_enquesta as $tipus_enquesta): ?>
            <option value="tipus_enquesta_name-<?php echo $tipus_enquesta['codi'];?>"><?php echo htmlentities($tipus_enquesta['nom']);?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <label>Tipus d'estudis</label>
    <br>
    <select name="tipus_estudis" id="tipus_estudis" class="browser-default custom-select mb-4">
        <?php foreach ($result_tipus_estudis as $tipus_estudis): ?>
            <option value="tipus_estudis_name-<?php echo $tipus_estudis['codi'];?>"><?php echo htmlentities($tipus_estudis['nom']);?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <label>Pla d'estudis</label>
    <br>
    <select name="pla_estudis" id="pla_estudis" class="browser-default custom-select mb-4">
        <?php foreach ($result_pla_estudis as $pla_estudis): ?>
            <option value="pla_estudis_name-<?php echo $pla_estudis['codi'];?>"><?php echo htmlentities($pla_estudis['nom']);?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <label>Assignatura / mòdul / altres</label>
    <br>
    <select name="assignatura" id="assignatura" class="browser-default custom-select mb-4">
        <?php foreach ($result_assignatura as $assignatura): ?>
            <option value="assignatura_name-<?php echo $assignatura['codi'];?>"><?php echo htmlentities($assignatura['nom']);?></option>
        <?php endforeach; ?>
    </select>
    <br><br>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
        <label class="custom-file-label" for="customFileLang">Ajuntar fitxer Excel</label>
    </div>

    <br><br><br>
    <input class="btn btn-info btn-block" type="button" value="Eviar" onclick="return change(this);" />

</form>
