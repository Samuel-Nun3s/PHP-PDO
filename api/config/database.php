<?php
    //------------------------ CONECTION ---------------------------
    // Ordem a ser usada no pdo
    // 1. Banco de dados a ser usado. Ex: MySQL
    // 2. Nome do banco de dados
    // 3. Host a ser usado
    // 4. Usuario
    // 5. Senha
    
    try {
        $pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost", "root", "");
    } catch (PDOException $e) {
        echo "Erro com o banco de dados: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Erro genérico: " . $e->getMessage();
    }
    
?>