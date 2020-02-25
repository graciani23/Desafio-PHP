<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confSenha = $_POST['confsenha'];

    if(empty($nome)) {
        echo "Favor informar seu nome!";
    }

    if(empty($email)) {
        echo "Favor informar seu email!";
    }

    if(strlen($senha) < 6) {
        echo "A senha deve conter no mínimo 6 dígitos!";
        exit();
    }

    if($senha != $confSenha) {
        echo "As senha e confirmar senha estão divergentes.";
        exit();
    }
?>