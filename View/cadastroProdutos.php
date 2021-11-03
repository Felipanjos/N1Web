<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <title>Cadastrar produto</title>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!-- Estilo customizado -->
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link rel="icon" href="img/icon.png">
    </head>

<header id="headerFuncionario"></header>

<body>
    <div class="wrapper">
        <div class="container" style="margin-bottom: 40px;">

            <form id="formCadastroProduto" class="form-group" name="nameFormulario" action="">
            <br><h2>Cadastramento de produtos</h2><br>
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="text" class="form-control" id="codigo" placeholder="Insira o código do produto" name="codigo" required>
            </div>
            
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Insira o nome do produto" name="nome" required>
            </div>

            <div class="form-group">
                <label for="nome">Categoria</label><br>

                <input type="radio" class="btn-check" name="options" id="radioLanche" autocomplete="off" checked>
                <label class="btn btn-secondary" for="radioLanche">Lanche</label>

                <input type="radio" class="btn-check" name="options" id="radioBebida" autocomplete="off">
                <label class="btn btn-secondary" for="radioBebida">Bebida</label>

                <input type="radio" class="btn-check" name="options" id="radioDoce" autocomplete="off">
                <label class="btn btn-secondary" for="radioDoce">Doce</label>

                <input type="radio" class="btn-check" name="options" id="radioAlmoco" autocomplete="off">
                <label class="btn btn-secondary" for="radioAlmoco">Almoço</label>
                
            </div>
    
            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="number" class="form-control" id="preco" placeholder="Insira o preço do produto" name="preco" required>
            </div>

            <div class="form-group">
                <label for="fornecedor">Fornecedor</label>
                <input type="number" class="form-control" id="fornecedor" placeholder="Insira o fornecedor do produto" name="fornecedor" required>
            </div>

            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" class="form-control" id="foto" name="preco" required>
            </div>

            <button type="submit" class="btn btn-default btn-lg pull-right changeItem"><i class="fa fa-plus"></i> Cadastrar</button>
            </form>
        </div>

        <div class="push"></div>
    </div>

        <footer id="footer"></footer>
</body>


    <script src="js/footer.js"></script>
    <script src="js/header.js"></script>
</html>