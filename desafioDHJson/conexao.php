<?php
    $dsn = "mysql:host=localhost;dbname=produtosdesafio;charset=utf8mb4;port=3306";
    $username = "root";
    $password = "";
    
    try {
        $conexaoDB = new PDO($dsn, $username, $password);
        //echo "<h1>Deu certo!</h1>";
    } catch(PDOException $e){
        //echo "<h1>Houve um problema!</h1>".$e->getMessage();
    };
?>