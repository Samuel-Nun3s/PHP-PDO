<?php 
    //------------------------ DELETE ---------------------------
    require_once 'config/database.php';

    $id = 2;

    $res = $pdo->prepare("DELETE FROM person WHERE id = :id");

    $res->bindParam(":id", $id);
    $res->execute();
?>