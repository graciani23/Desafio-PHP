<?php
    if ($_POST['nome'] == "") {
        echo "Informe seu nome";
        exit;
    }

    if ($_POST['email'] == "") {
        echo "Informe seu email";
        exit;

    }

    if (strlen($_POST['senha']) < 6) {
        echo "A senha deve ter no mínimo caracteres";
        exit;


    }

    if ($_POST['senha'] != $_POST['confsenha']) {
        echo "Senha e confirma senha estão divergentes";
        exit;

    }
?>