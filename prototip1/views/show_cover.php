<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>Visor d’enquestes UAB</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/offcanvas.css" rel="stylesheet">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- JavaScript -->
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/functions.js"></script>
</head>

<body class="bg-light">
        <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
            <a class="navbar-brand" style="color: white">Importació, gestió i visualització d'enquestes</a>
        </nav>

        <div class="nav-scroller bg-white box-shadow">
            <nav class="nav nav-underline">
                <a id="inici" class="nav-link active" href="#">Inici</a>
                <a id="importar" class="nav-link active" href="#">Importar</a>
                <a id="visualitzar" class="nav-link active" href="#">Visualitzar</a>
            </nav>
        </div>

        <div id="dynamic_block" class="container" style="height: 50%;">
            <h1 class="mt-5">Benvingut!</h1>
            <p class="lead">A l'aplicació de gestió, importació i visualització d'enquestes</p>
            <p>de la Universitat Autònoma de Barcelona</p>

            <script>
                inici();
                show_tipus_enquesta();
                show_enquestes();
            </script>
        </div>

        <footer class="footer">
            <div class="container">
                <span class="text-muted">2020 Universitat Autònoma de Barcelona</span>
            </div>
        </footer>
</body>
</html>
