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

<header id="headerHome"></header>

<body class="body">

	<br>
	
    <div class="wrapper">
		<div class="container">
			<div class="divcad">
				<br><br>
	
				<div id="formAluno">
					<div class="text-center">
						<h4 class="cor">Cadastro de alunos</h4>
						<h5 class="cor"><strong>Informações com "*" são obrigatórias.</strong></h5>
						<br>
					</div>
			
					<form class="form-horizontal" id="formCadastroAluno">
						<div class="form-group">
							<label class="control-label col-sm-2 cor" for="matricula">*Matrícula</label>
							
							<div class="col-sm-10">
								<input type="text" class="form-control" id="matricula" placeholder="Insira seu nome" name="matricula" required>
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-sm-2 cor" for="nomeAluno">*Nome completo</label>
							
							<div class="col-sm-10">
								<input type="text" class="form-control" id="nomeAluno" placeholder="Insira seu nome completo" name="nomeAluno" required>
							</div>
						</div>	
					
						<div class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-4 cor" for="alunoResponsavel">*Nome do responsável</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="alunoResponsavel" placeholder="Insira o nome do seu responsável" name="alunoResponsavel" required>
								</div>
							</div>
						</div>

						<div class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-4 cor" for="turno">*Turno</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="turno" placeholder="Insira o turno" name="turno" required>
								</div>
							</div>
						</div>

						<div class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-4 cor" for="turma">*Turma</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="turma" placeholder="Insira a turma" name="turma" required>
								</div>
							</div>
						</div>
	
						<div class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2 cor" for="numeroAluno">Telefone</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="numeroAluno" placeholder="Ex.: (00) 0000-0000" name="numeroAluno">
								</div>
							</div>
						</div>
			
						<div class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2 cor" for="emailAluno">E-mail:</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="emailAluno" placeholder="Insira seu email" name="emailAluno">
									<small id="emailTexto" class="form-text text-muted">Não compartilharemos seu email com ninguém</small>
								</div>
							</div>
						</div>
			
						<div class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2 cor" for="loginAluno">*Login:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="loginAluno" placeholder="Crie seu login" name="loginAluno" required>
								</div>
							</div>
						</div>
			
						<div class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2 cor" for="senhaAluno">*Senha:</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" id="senhaAluno" placeholder="**********" name="senhaAluno" required>
									<small id="emailTexto" class="form-text text-muted">Lembre-se de não compartilhar sua senha!</small>
			
								</div>
							</div>
						</div>
			
						<div class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2 cor" for="confSenhaAluno">*Confirme sua senha:</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" id="confSenhaAluno" placeholder="**********" name="confSenhaAluno" required>
								</div>
							</div>
						</div>
						
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default" id="cadastrarAluno">Cadastrar</button>
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
	<script src="js/validaCadastroAluno.js"></script>
  	<script src="js/header.js"></script>
	<script src="js/footer.js"></script>
  </html>
</head>