<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Cadastro</title>
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

		  <style>
				h2 {
				color: rgb(0, 0, 0) ;
				text-align: center;
				}
				button{
					background-color: rgb(11, 179, 62);
					border: none;
					padding: 15px;
					width: 100%;
					border-radius: 10px;
					color: white;
					font-size: 15px;
					
				}
				button:hover{
					background-color: rgb(88, 248, 82);
					cursor: pointer;
				}
  			</style>
      </head>

<header id="headerFuncionario"></header>

<body class="body">

	<br>
	
    <div class="wrapper">
		<div class="container">
			<div class="divcad">
				<br><br>
	  
				<div id="formResp">
					<div class="text-center">

						<h4 class="cor">Cadastro de mães, pais e responsáveis</h4>
				
						<h5 class="cor"><strong>Todas as informações são obrigatórias.</strong></h5>
						<br>
					</div>
			
					<form class="form-horizontal" action="createResponsavel" id="formCadastro" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2 cor" for="nomeResp">Nome:</label>
							
							<div class="col-sm-10">
								<input type="text" class="form-control" id="nomeResp" placeholder="Insira seu nome" name="nome" required>
							</div>
						</div>	
						<div class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2 cor" for="sobrenomeResp">Sobrenome:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="sobrenomeResp" placeholder="Insira seu sobrenome" name="sobrenome" required>
								</div>
							</div>
						</div>
			
						<div class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2 cor" for="cpfResp">CPF:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="cpfResp" placeholder="Ex.: 000.000.000-00" name="cpf" required>
								</div>
							</div>
						</div>
					
						<div class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2 cor" for="numeroResp">Número de celular:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="numeroResp" placeholder="Ex.: (00) 0000-0000" name="telefone" required>
								</div>
							</div>
						</div>
			
						<div class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2 cor" for="emailResp">E-mail:</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="emailResp" placeholder="Insira seu email" name="email" required>
									<small id="emailTexto" class="form-text text-muted">Não compartilharemos seu email com ninguém</small>
								</div>
							</div>
						</div>
			
						<div class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2 cor" for="loginResp">Login:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control cor" id="loginResp" placeholder="Crie seu login" name="login" required>
								</div>
							</div>
						</div>
			
						<div class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2 cor" for="senhaResp">Senha:</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" id="senhaResp" placeholder="**********" name="senha" required>
									<small id="emailTexto" class="form-text text-muted">Lembre-se de não compartilhar sua senha!</small>
			
								</div>
							</div>
						</div>
			
						<div class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2 cor" for="confSenhaResp">Confirme sua senha:</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" id="confSenhaResp" placeholder="**********" name="confSenha" required>
								</div>
							</div>
						</div>
						
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default" id="cadastrar">Cadastrar</button>
							</div>
						</div>
					</form>
				
				</div>
			</div>
		</div>

		<div class="push"></div>
    </div>

    <footer id="footer"></footer>

  </body>
  
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!-- <script src="js/validaCadastroResp.js"></script> -->
	<script src="js/formCadastro.js"></script>
  	<script src="js/header.js"></script>
	<script src="js/footer.js"></script>
  </html>
</head>