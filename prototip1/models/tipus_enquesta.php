<?php
function list_tipus_enquesta($connection) {
    try{
        $check_tipus_enquesta = $connection->prepare("SELECT * FROM tipus_enquesta");
        $check_tipus_enquesta->execute();
        $result_tipus_enquesta = $check_tipus_enquesta->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    return($result_tipus_enquesta);
}
