<?php
require_once("models/connection.php");

require_once("models/enquestes.php");
$result_enquestes = list_enquestes(connection());

require("views/show_enquestes.php");
