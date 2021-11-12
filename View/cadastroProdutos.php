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

			<form id="formCadastroProduto" class="form-group" name="formCadastroProduto" method="POST" action="createProduto">
				<br><h2>Cadastramento de produtos</h2><br>
				<div class="form-group">
					<label for="codigo">Código</label>
					<input type="text" class="form-control" id="codigo" placeholder="Insira o código" name="codigo" required>
				</div>
				
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" id="nome" placeholder="Insira o nome" name="nome" required>
				</div>

				<div class="form-group">
					<label for="categoria">Categoria</label><br>

					<input type="radio" class="btn-check categoria" name="categoria" id="lanche" autocomplete="off" value="lanche" checked>
					<label class="btn btn-secondary" for="lanche">Lanche</label>

					<input type="radio" class="btn-check categoria" name="categoria" id="bebida" value="bebida" autocomplete="off">
					<label class="btn btn-secondary" for="bebida">Bebida</label>

					<input type="radio" class="btn-check categoria" name="categoria" id="doce" value="doce" autocomplete="off">
					<label class="btn btn-secondary" for="doce">Doce</label>

					<input type="radio" class="btn-check categoria" name="categoria" id="almoco" value="almoco" autocomplete="off">
					<label class="btn btn-secondary" for="almoco">Almoço</label>
					
				</div>
		
				<div class="form-group">
					<label for="preco">Preço</label>
					<input type="number" class="form-control" id="preco" placeholder="Insira o preço" name="preco" required>
				</div>

				<div class="form-group" id="divFornecedor">
					<label for="fornecedor">Fornecedor</label>
					<input type="text" class="form-control" id="fornecedor" placeholder="Insira o fornecedor" name="fornecedor">
				</div>

				<div class="form-group" id="divIngredientes">
					<label for="ingredientes">Ingredientes</label>
					<input type="text" class="form-control" id="ingredientes" placeholder="Insira os ingredientes" name="ingredientes">
				</div>

				<!-- <div class="form-group">
					<label for="foto">Foto</label>
					<input type="file" class="form-control" style="padding-bottom: 40px; padding-top: 10px;" id="foto" name="foto" required>
				</div> -->

				<button type="submit" class="btn btn-default btn-lg pull-right changeItem"><i class="fa fa-plus"></i> Cadastrar</button>
			</form>
		</div>

		<div class="push"></div>
	</div>

		<footer id="footer"></footer>
</body>
	<script type="text/javascript" src="js/header.js"></script>
	<script type="text/javascript" src="js/footer.js"></script>
	<script type="text/javascript" src="js/controleCategoria.js"></script>
</html