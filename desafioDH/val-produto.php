<?php
    $produto = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $foto = $_FILES['foto']['name'];

    if(empty($produto)) {
        echo "Favor informar o nome do produto!";
    }

    if(empty($foto)) {
        echo "Favor anexar a imagem do produto!";
    }
?>