<!DOCTYPE html>
<html lang="pt-br">
	<head>
	  <title>Atualizar dados do responsável</title> 
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
			function confirmaUpdate() {
				return confirm("Confirmar alterações?");
			}
		</script>
	</head>

<header id="headerFuncionario"></header>

<body>
	<div class="wrapper">
		<div class="container" style="margin-bottom: 40px;">

			<form id="formUpdateResponsavel" class="form-group" name="formUpdateResponsavel" method="POST" action="updateResponsavel" onsubmit="return confirmaUpdate()">
				<br><h2>Alterar dados</h2><br>
				<input type="hidden" name="id" value= "<?php echo $_POST['id']; ?>"> 

				<div class="form-group">
					<label for="nome">Nome:</label>
					<input type="text" class="form-control" id="novoNomeResp" placeholder="Maria da Silva Sauro" name="nome" value="<?php echo $nome; ?>" required>
				</div>

				<div class="form-group">
					<label for="cpf">CPF:</label>
					<input type="text" class="form-control" id="novoCpfResp" placeholder="000.000.000-00" name="cpf" value="<?php echo $cpf; ?>" required>
				</div>

				<div class="form-group">
					<label for="email">E-mail:</label>
					<input type="email" class="form-control" id="novoEmailResp" placeholder="Novo email" name="email" value="<?php echo $email; ?>" required>
					<small id="emailTexto" class="form-text text-muted">Seu email não será compartilhado.</small>
				</div>

				<div class="form-group">
					<label for="telefone">Telefone:</label>
					<input type="text" class="form-control" id="novoTelefoneResp" placeholder="Ex.: (71) 00000-0000" name="telefone" value="<?php echo $telefone; ?>" required>
				</div>

				<div class="form-group">
					<label for="login">Login:</label>
					<input type="text" class="form-control" id="novoLogin" placeholder="Seu nome de usuário" name="login" value="<?php echo $login; ?>" required>
				</div>

				<div class="form-group">
					<label for="senha">Nova senha:</label>
					<input type="password" class="form-control" id="novaSenhaResp" placeholder="**********" name="senha" value="<?php echo $senha ?>" required>
					<small class="form-text text-muted">Lembre-se de não compartilhar sua senha!</small>
				</div>

				<div class="form-group">
					<label for="novaSenha">Confirme a senha:</label>
					<input type="password" class="form-control" id="confNovaSenhaResp" placeholder="**********" name="novaSenha" value="<?php echo $senha ?>" required>
				</div>
				
				<button type="submit" formtarget="readResponsavel" class="btn btn-default btn-lg pull-right changeItem"><i class="fas fa-cog"></i> Alterar</button>
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