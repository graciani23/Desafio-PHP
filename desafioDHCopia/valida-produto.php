<?php 
    

    if($_POST['nome'] == "") {
        echo "Informe seu nome";
    } 
       
    $preco = $_POST['preco'];
    function isNumber($preco) {
        if (isNumber($preco)) {
            return true;
        }
    }


    // if($_POST['preco'] == "") {

    // }

    if($_POST['foto'] == "") {
        echo "Insira uma foto";
    }
?>