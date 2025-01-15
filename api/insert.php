<?php 
    //------------------------ INSERT ---------------------------
    require_once 'config/database.php';
    
    // 1. Forma de usar o PDO:
    // Preparando a requisição do banco:
    $res = $pdo->prepare("INSERT INTO person(name, phone, email) VALUES (:name, :phone, :email)");

    // Inserindo os valores:
    $res->bindValue(":name", "Samuel");
    $res->bindValue(":phone", "00000000");
    $res->bindValue(":email", "teste@gmail.com");

    // Executando:
    $res->execute();

    // 2. Forma de usar o PDO:
    // Preparando a requisição do banco:
    //$pdo->query("INSERT INTO person(name, phone, email) VALUES ('Samuel Nunes', '0000000', 'testequery@gmail.com')");
?>