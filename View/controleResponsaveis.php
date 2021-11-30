<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <title>Controle de responsáveis</title>
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

							<form class="form-group" action="">						
								<div class="col-sm-12" style="padding-bottom: 20px;">
									<div class="input-group">
										<input id="readInfo" name="nome" type="search" class="form-control rounded" placeholder="Nome do responsável" aria-label="Search" aria-describedby="search-addon">
										<button type="submit" class="btn btn-default" style="margin-left: 10px; background-color: lightblue;"><i class="fas fa-search"></i> </button>
									</div>
								</div>
							</form>

							<h2 style="margin-top: 40px;">Responsáveis cadastrados</h2><br>
							<table class="table table-bordered">
								<thead class="thead-dark">
									<tr>
										<th>Nome</th>
										<th>CPF</th>
										<th>Email</th>
										<th>Telefone</th>
										<th>Login</th>
										<th></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($retorno as $elemento) { ?>
										<tr>
											<td><?php echo $elemento->getNome(); ?></td>
											<td><?php echo $elemento->getCpf(); ?></td>
											<td><?php echo $elemento->getEmail(); ?></td>
											<td><?php echo $elemento->getTelefone(); ?></td>
											<td><?php echo $elemento->getLogin(); ?></td>
											<td>
												<form action="formUpdateResponsavelAdmin" method="POST">
													<input type="hidden" name="id" value="<?php echo $elemento->getId(); ?>">
													<button type="submit" class="btn btn-default btn-lg changeItem"></button>
												</form>
											</td>
											<td>
												<form action="deleteResponsavel" method="POST" onsubmit="return confirmarDelete();">
													<input type="hidden" name="id" value="<?php echo $elemento->getId(); ?>">
													<button type="submit" class="btn btn-default btn-lg removeItem"></button>
												</form>
											</td>
										</tr>
									<?php }; ?>
								</tbody>
							</table>
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