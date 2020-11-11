<?php
function list_tipus_estudis($connection) {
    try{
        $check_tipus_estudis = $connection->prepare("SELECT * FROM tipus_estudis");
        $check_tipus_estudis->execute();
        $result_tipus_estudis = $check_tipus_estudis->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    return($result_tipus_estudis);
}
