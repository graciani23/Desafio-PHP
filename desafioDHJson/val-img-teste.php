<?php 

    var_dump($_FILES);

function getFoto($aquivo) {
        $msg = false;
        if(isset($_FILES['arquivo'])){
            $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensão do arquivo
            $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
            $diretorio = "upload/"; //define o diretório para onde enviaremos o arquivo

            move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload            
        }
        echo $novo_nome;
        return $novo_nome;
    }
?>