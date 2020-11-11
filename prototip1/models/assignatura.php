<?php
function list_assignatura($connection) {
    try{
        $check_assignatura = $connection->prepare("SELECT * FROM assignatura");
        $check_assignatura->execute();
        $result_assignatura = $check_assignatura->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    return($result_assignatura);
}
