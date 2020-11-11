<?php
function list_enquestes($connection) {
    try{
        $check_enquestes = $connection->prepare("SELECT * FROM enquesta");
        $check_enquestes->execute();
        $result_enquestes = $check_enquestes->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    return($result_enquestes);
}
