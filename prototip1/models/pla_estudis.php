<?php
function list_pla_estudis($connection) {
    try{
        $check_pla_estudis = $connection->prepare("SELECT * FROM pla_estudis");
        $check_pla_estudis->execute();
        $result_pla_estudis = $check_pla_estudis->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    return($result_pla_estudis);
}
