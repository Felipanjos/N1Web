<!DOCTYPE html>
<html lang="pt-br">
	<head>
	  <title>Controle de produtos</title>
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

		<script>
			function confirmarDelete() {
				return confirm("Confirmar exclusão?");
			}
		</script>
	</head>

<header id="headerFuncionario"></header>

<body>
	<div class="wrapper">
		<div class="container" style="margin-bottom: 40px;">
			<div class="container-fluid bg-3 text-center" style="margin-top: 50px; margin-bottom: 50px;">
				<div class="container">
					<br><br>

					<!-- <form id="formPesquisaProduto" class="form-group" name="formPesquisaProduto">						
						<div class="col-sm-12" style="padding-bottom: 20px;">
							<div class="input-group">
								<input id="readInfo" name="nome" type="search" class="form-control rounded" placeholder="Digite um produto" aria-label="Search" aria-describedby="search-addon">
								<button type="submit" class="btn btn-default" style="margin-left: 10px; background-color: lightblue;"><i class="fas fa-search"></i> Procurar</button>
							</div>
						</div>
					</form> -->

					<table class="table table-striped">
						<thead>
							<tr>
								<th>Código</th>
								<th>Nome</th>
								<th>Preço</th>
								<th>Categoria</th>
								<th>Tipo</th>
								<th>Fornecedor</th>
								<th>Ingredientes</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($retorno as $elemento) { ?>
								<tr>
									<td><?php echo $elemento->getCodigo(); ?></td>
									<td><?php echo $elemento->getNome(); ?></td>
									<td><?php echo $elemento->getPreco(); ?></td>
									<td><?php echo $elemento->getCategoria(); ?></td>
									<td><?php echo $elemento->getTipo(); ?></td>
									<td><?php echo $elemento->getFornecedor(); ?></td>
									<td><?php echo $elemento->getIngredientes(); ?></td>
									<td>
										<form action="updateProduto" method="POST">
											<input type="hidden" name="id" value= "<?php echo $elemento->getCodigo(); ?>"> 
											<button type="submit" class="btn btn-default btn-lg changeItem" value=""></button>
										</form>
									</td>
									<td>
										<form action="deleteProduto" method="POST" onsubmit="return confirmarDelete();">
											<input type="hidden" name="id" value= "<?php echo $elemento->getCodigo(); ?>"> 
											<button type="submit" class="btn btn-default btn-lg removeItem" value=""></button>
										</form>
									</td>
								</tr>
								<?php }; ?>
						</tbody>
					</table>
	
					<div id="menuProdutos">
						<div class="btn-group" style="margin-bottom: 30px;">
							<button type="button" id="btnlanches" class="btn btn-primary">Lanches</button>
							<button type="button" id="btnbebidas" class="btn btn-primary">Bebidas</button>
							<button type="button" id="btndoces" class="btn btn-primary">Doces</button>
							<button type="button" id="btnalmoco" class="btn btn-primary">Almoço</button>
						</div>
				
						<div id="lanches" class="formulario">
							<div class="container-fluid bg-3 text-center">
								<h1>Lanches</h1><br>
								<div class="row">
									
									<div class="col-sm-4 item">
										<h3>R$ 4,00</h3>
										<!-- <img src="img/coxinha.jpg" height="300" width="300"> -->
										<h4>Coxinha de Frango</h4>
									</div>
				
									<div class="col-sm-4 item">
										<h3>R$ 3,29</h3>
										<!-- <img src="img/oreo.jpg" height="300" width="250"> -->
										<h4>Biscoito Oreo</h4>
									</div>
				
									<div class="col-sm-4 item">
										<h3>R$ 3,50</h3>
										<!-- <img src="img/saladedefruta.jpg" height="300" width="250"> -->
										<h4>Salada de frutas</h4>
									</div>
								</div>
				
								<hr class="separador">
				
								<div class="row">
				
									<div class="col-sm-4 item">
										<h3>R$ 1,49</h3>
										<!-- <img src="img/maça.jpg" height="300" width="300"> -->
										<h4>Maçã</h4>
									</div>
				
									<div class="col-sm-4 item">
										<h3>R$ 4,00</h3>
										<!-- <img src="img/pasteldeforno.jpg" height="300" width="250"> -->
										<h4>Pastel de forno</h4>
									</div>
				
									<div class="col-sm-4 item">
										<h3>R$ 1,30</h3>
										<!-- <img src="img/misto quente.jfif" height="300" width="250"> -->
										<h4>Misto quente</h4>
									</div>
								</div>
							</div>
						</div>
				
				
						<div id="bebidas" class="formulario">
							<div class="container-fluid bg-3 text-center">
								<h1>Bebidas</h1><br>
								<div class="row">
									<div class="col-sm-4 item" id="teste">
										<h3>R$ 4,00</h3>
										<!-- <img src="img/sucomaracuja.jpg" height="300" width="250"> -->
										<h4>Suco de Maracuja 330ml</h4>
									</div>
				
									<div class="col-sm-4 item">
										<h3>R$ 4,00</h3>
										<!-- <img src="img/sucodeuva.jfif" height="300" width="250"> -->
										<h4>Suco de uva 330ml</h4>
									</div>
				
									<div class="col-sm-4 item">
										<h3>R$ 2,50</h3>
										<!-- <img src="img/nescau.webp" height="300" width="250"> -->
										<h4>Nescau 200ml</h4>
									</div>
								</div>
				
								<hr class="separador">
				
								<div class="row">
									<div class="col-sm-4 item">
										<h3>R$ 2,00</h3>
										<!-- <img src="img/agua.jpg" height="300" width="300"> -->
										<h4>Água mineral 500ml</h4>
									</div>
				
									<div class="col-sm-4 item">
										<h3>R$ 3,50</h3>
										<!-- <img src="img/coca cola lata.jpg" height="300" width="250"> -->
										<h4>Coca Cola 350ml</h4>
									</div>
				
									<div class="col-sm-4 item">
										<h3>R$ 3,50</h3>
										<!-- <img src="img/guarana.jpg" height="300" width="250"> -->
										<h4>Guaraná Antartica 350ml</h4>
									</div>
								</div>
							</div>
						</div>
				
						
						<div id="doces" class="formulario">
							<div class="container-fluid bg-3 text-center">
								<h1>Doces</h1><br>
								<div class="row">
									<div class="col-sm-4 item">
						
										<h3>R$ 2,50</h3>
										<!-- <img src="img/doce1.jpg" height="300" width="300"> -->
										<h4>Snickers barrinha</h4>
									</div>
				
									<div class="col-sm-4 item">
										
										<h3>R$ 2,00</h3>
										<!-- <img src="img/doce2.jpg" height="300" width="250"> -->
										<h4>Trident</h4>
									</div>
				
									<div class="col-sm-4 item">
										<h3>R$ 0,10</h3>
										<!-- <img src="img/bala.jpg" height="300" width="250"> -->
										<h4>Bala de maçã</h4>
									</div>
								</div>
				
								<hr class="separador">
				
								<div class="row">
									<div class="col-sm-4 item">
								
										<h3>R$ 1,50</h3>
										<!-- <img src="img/doce3.jpg" height="300" width="300"> -->
										<h4>Stars chocolate</h4>
									</div>
				
									<div class="col-sm-4 item">
										<h3>R$ 1,00</h3>
										<!-- <img src="img/doce4.jpg" height="300" width="250"> -->
										<h4>Halls</h4>
									</div>
				
									<div class="col-sm-4 itemBloqueado">
										<h3>R$ 0,50</h3>
										<!-- <img src="img/pirulito.jpg" height="300" width="250"> -->
										<h4>Pirulito Pop</h4>

										<button type="button" class="btn btn-default btn-lg changeItem2" style="margin: 5px">
											<span class="glyphicon glyphicon-plus"></span><i class="fa fa-cog"></i> Editar
										</button>
									</div>
								</div>
							</div>
						</div>
				
						<div id="almoco" class="formulario">
							<div class="container-fluid bg-3 text-center">
								<h1>Almoços</h1><br>
								<div class="row">
									<div class="col-sm-4 item">
										<h3>R$ 10</h3>
										<!-- <img src="img/prato1.jpg" height="300" width="300"> -->
										<h4>Arroz + Feijão + Carne ou Frango</h4>
									</div>
				
									<div class="col-sm-4 item">
										<h3>R$ 8,00</h3>
										<!-- <img src="img/prato2.jpg" height="300" width="250"> -->
										<h4>Arroz + Strogonoff de frango</h4>
									</div>
									
									<div class="col-sm-4 item">
										<h3>R$ 8</h3>
										<!-- <img src="img/prato3.jpg" height="300" width="250"> -->
										<h4>Macarrão + Carne moída</h4>
									</div>
									
									<hr class="separador">

									<div class="col-sm-4 item">
										<h3>R$ 15</h3>
										<!-- <img src="img/lasanha.jpg" height="300" width="250"> -->
										<h4>Lasanha</h4>
									</div>
								</div>			
							</div>    
						</div>
					</div>
				</div>
			</div>    
		</div>

		<div class="push"></div>
	</div>

		<footer id="footer"></footer>
</body>

	<script src="js/footer.js"></script>
	<script src="js/header.js"></script>
	<script src="js/formProdutos.js"></script>
	<script src="js/controleProdutos.js"></script>
</html>