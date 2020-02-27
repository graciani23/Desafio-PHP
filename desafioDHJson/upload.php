<?php
    $msg = false;

    if(isset($_FILES['arquivo'])){
        $nome_arquivo = $_FILES['arquivo']['name'];
        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
        $novo_nome = md5(time()). $extensao; // gera o nome através de um rash utilizando data e hora
        $diretorio = "upload/";
        // tmp_name - nome temporário definido pelo php
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);//$diretorio.$novo_nome local p onde será enviado o arquivo + o novo nome do arquivo
        var_dump(move_uploaded_file);
    }
?>

<h1>Upload</h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Arquivo: <input type="file" name="arquivo">
    <input type="submit" value="Salvar">

</form>