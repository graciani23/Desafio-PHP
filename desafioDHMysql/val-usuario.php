<?php
echo "_POST";
var_dump($_POST);

    // $nome = $_POST['nome'];
    // $email = $_POST['email'];
    // $senha = $_POST['senha'];
    // $confSenha = $_POST['confsenha'];

    if(empty($_POST['nome'])) {
        echo "Favor informar seu nome!";
    }

    if(empty($_POST['email'])) {
        echo "Favor informar seu email!";
    }

    if(strlen($_POST['senha']) < 6) {
        echo "A senha deve conter no mínimo 6 dígitos!";
        exit();
    }

    if($senha != $_POST['confsenha']) {
        echo "As senha e confirmar senha estão divergentes.";
        exit();
    }
?>