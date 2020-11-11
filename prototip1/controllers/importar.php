<?php
require_once("models/connection.php");

require_once("models/tipus_enquesta.php");
$result_tipus_enquesta = list_tipus_enquesta(connection());

require_once("models/tipus_estudis.php");
$result_tipus_estudis = list_tipus_estudis(connection());

require_once("models/pla_estudis.php");
$result_pla_estudis = list_pla_estudis(connection());

require_once("models/assignatura.php");
$result_assignatura = list_assignatura(connection());

require("views/show_importar.php");