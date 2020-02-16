<?php
    if ($_POST['nome'] == "") {
        echo "Informe seu nome";
        die();
    }

    if ($_POST['email'] == "") {
        echo "Informe seu email";
        die();

    }

    if (strlen($_POST['senha']) < 6) {
        echo "A senha deve ter no mínimo caracteres";
        die();


    }

    if ($_POST['senha'] != $_POST['confsenha']) {
        echo "Senha e confirma senha estão divergentes";
        die();

    }
?>