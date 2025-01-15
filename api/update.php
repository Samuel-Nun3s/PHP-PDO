<?php 
    //------------------------ UPDATE ---------------------------
    require_once 'config/database.php';

    $email = "samuel@gmail.com";
    $id = 1;

    $res = $pdo->prepare("UPDATE person SET email = :email WHERE id = :id");
    $res->bindParam(":email", $email);
    $res->bindParam(":id", $id);
    $res->execute();
?>