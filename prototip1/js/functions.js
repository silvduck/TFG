function show_tipus_enquesta() {
    $(document).ready(function(){
        $('#importar').click(function(){
            $('#dynamic_block').load('index.php?action=importar', function () {
                console.log('ok');
            });
        });
    });
}

function change() {
    alert("Enquesta importada correctament!");
}

function inici() {
    $(document).ready(function(){
        $('#inici').click(function(){
            $('#dynamic_block').load('index.php?action=inici', function () {
                console.log('ok');
            });
        });
    });
}

function show_enquestes() {
    $(document).ready(function(){
        $('#visualitzar').click(function(){
            $('#dynamic_block').load('index.php?action=enquestes', function () {
                console.log('ok');
            });
        });
    });
}

function resultats() {
    $(document).ready(function(){
        $('#dynamic_block').load('index.php?action=resultats', function () {
            console.log('ok');
        });
    });
}