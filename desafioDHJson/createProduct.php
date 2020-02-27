<?php
    session_start();
    $produto = $_POST;

    // verificar se o formulário foi enviado
    if(isset($_POST['cadastro-produto'])) {  
        include 'valida-produto.php';
        $produtos = file_get_contents('produtos.json');
        if ($produtos === false) {
            file_put_contents('produtos.json', "[]");
        } 
        $produtodec = json_decode($produtos);

        // inclusão id
            $ultimaPosicao = count($produtodec) + 1;
            $id = ["id" => 1];
            if (count($produtodec) == 0) {
                $result = array_merge($id, $produto);
            } else {
                $id = ["id" => $ultimaPosicao];
                $result = array_merge($id, $produto);
            }
        $produtodec[] = $result;

        $inserir = json_encode($produtodec);

        file_put_contents('produtos.json', $inserir);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Criar Produto</title>
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
            <div class="config">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input name="nome" id="nomeProduto" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Preço</label>
                    <input type="number" name="preco" id="preco" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao" rows="3"></textarea>
            </div>

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
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/style.css">
</body>
</html>