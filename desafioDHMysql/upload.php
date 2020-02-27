<?php
    require_once 'conexao.php';

    if(isset($_FILES['foto'])) {
        $extensao = strtolower(substr($_FILES['foto']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "imagens/";

        move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novo_nome);
        var_dump($novo_nome);
        var_dump($extensao);
    }

?>

<h1>Upload de Arquivos</h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Arquivo: <input type="file" name="foto"><br>
    <input type="submit" value="Salvar">
</form>