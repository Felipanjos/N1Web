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
	</head>

<header id="headerResponsavel"></header>

<body>
	<div class="wrapper">
		<div class="container" style="margin-bottom: 40px;">

    <div id="formControleAlterarAluno">
      <form action="updateAluno" method="POST">
        <br>
        <h2 style="margin-top: 15px;">Alterar dados</h2>
        <div class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="novoLoginAluno">Usuario:</label>
                <div class="col-sm-10">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="usuario" class="form-control" id="novoLoginAluno" placeholder="Novo login" name="login" value="<?php echo $login; ?>" required>
                </div>
            </div>
        </div>

        <div class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="novoEmailAluno">E-mail:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="novoEmailAluno" placeholder="Novo email" name="email" value="<?php echo $email; ?>" required>
                    <small id="emailTexto" class="form-text text-muted">O email não será compartilhado.</small>
                </div>
            </div>
        </div>

        <div class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="novoTelefoneAluno">Telefone:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="novoTelefoneAluno" placeholder="Ex.: (71) 00000-0000" name="telefone" value="<?php echo $telefone; ?>" required>
                </div>
            </div>
        </div>

        <div class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="novaSenhaAluno">Nova senha:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="novaSenhaAluno" placeholder="**********" name="senha" value="<?php echo $senha; ?>" required>
                    <small class="form-text text-muted">Lembre-se de não compartilhar sua senha!</small>
                </div>
            </div>
        </div>

        <div class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="confNovaSenhaAluno">Confirme a senha:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="confNovaSenhaAluno" placeholder="**********" name="confSenha" value="<?php echo $senha; ?>" required>
                </div>
            </div>
        </div>

        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default addItem" id="confirmarAlterarDadosAluno"><i class="fa fa-check"></i> Confirmar</button>
            </div>
        </div>
      </form>
    </div>
  </div>

		<div class="push"></div>
	</div>

		<footer id="footer"></footer>
</body>
	<script type="text/javascript" src="js/header.js"></script>
	<script type="text/javascript" src="js/footer.js"></script>
	<script type="text/javascript" src="js/controleCategoria.js"></script>
	<script type="text/javascript" src="js/validaCadastroResp.js"></script>
</html