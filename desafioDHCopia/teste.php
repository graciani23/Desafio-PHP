<?php


    $nome = $_FILES["foto"]["name"];
    $nomeTemp = $_FILES["foto"]["tmp_name"];
    $diretorio = dirname( assets );
    $nomeDaPasta = "/img/";
    $caminhoCompleto = $diretorio.$nomeDaPasta.$nome;
    move_uploaded_file($nomeTemp, $caminhoCompleto);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
            <?php include 'assets/includes/navbar.php'; ?>
        </div>
    </header>
    <main class="container">
        <h1>Adicionar Produto</h1>
        <form action="" method="post" enctype="multpart/form-data">
            
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="form-control" name="foto" id="foto">
                    <label class="custom-file-label" for="foto">Selecione a foto</label>
                </div>
                
            </div>
            <br>
            <div class="input-group">
                <button name="cadastro-produto" class="btn btn-primary">Adicionar</button>
            </div>
        </form>
        <?php 
        
        ?>
    </main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/style.css">
</body>
</html>