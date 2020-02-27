<?php
    require_once 'conexao.php';

    $consulta = $conexaoDB-> prepare('SELECT * FROM produtos');

    $resultado = $consulta-> execute();
    $produtos = $consulta->fetchAll(PDO::FETCH_ASSOC);

    // trazendo dados do produto
    $produtoConsulta = $conexaoDB-> prepare('SELECT * FROM produtos where id = :id');
    $produtoExecuta = $produtoConsulta-> execute([
        ":id" => $_GET['id']
    ]);

    $produto = $produtoConsulta->fetch(PDO::FETCH_ASSOC);

   // var_dump($produto);


    // verificar se o formulário foi enviado
    if(isset($_POST['excluir-produto'])) {
        // verificar campos preenchidos
        if($_POST['nome'] != "" && $_POST['descricao'] != "" && $_POST['preco'] != "") {
            // prepara a query
            $query = $conexaoDB->prepare('DELETE FROM produtos WHERE id = :id');
            var_dump($query);

            $resultado = $query->execute([
                ":id" => $_GET['id'],
            ]);
            var_dump($resultado);

            // se tudo der certo, redireciona para a lista de produtos
            header('location: indexProduct.php');
        }
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Ver Produto</title>
</head>
<body>
    <header>
        <div class="container">
        <?php include 'assets/includes/navbar.php'; ?>
        </div>
    </header>
    <main class="container">
        <h1>Produto</h1>
        <form action="" method="post">
            <?php foreach ($produtos as $produto) :
            if($produto['id'] == $_GET['id']){
            ?>
            <div class="config">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input name="nome" id="nomeProduto" type="text" class="form-control" required value="<?php echo $produto['produto']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Preço</label>
                    <input type="number" name="preco" id="preco" class="form-control" value="<?php echo $produto['preco']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao" rows="3"><?php echo $produto['descricao']; ?></textarea>
            </div>
            <div class="form-group">
            
            </div>

            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="form-control" name="foto" id="foto" value="<?php echo $produto['foto'] ?>">
                    <label class="custom-file-label" for="foto">Selecione a foto</label>
                </div>
                
            </div>
            <br>
            <div class="input-group">
                <button name="excluir-produto" class="btn btn-primary">Excluir</button>
            </div>
            <?php }
            endforeach;
            ?>
        </form>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/style.css">
</body>
</html>