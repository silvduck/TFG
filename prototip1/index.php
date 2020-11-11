<?php
$action = $_GET['action'] ?? null;
switch ($action) {
    case 'importar':
        require __DIR__.'/controllers/importar.php';
        break;
    case 'inici':
        require __DIR__.'/controllers/inici.php';
        break;
    case 'enquestes':
        require __DIR__.'/controllers/enquestes.php';
        break;
    case 'resultats':
        require __DIR__.'/controllers/resultats.php';
        break;
    default:
        require __DIR__ .'/controllers/cover.php';
        break;
}
