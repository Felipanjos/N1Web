<?php require_once "Model/Formatador.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Aba do Responsável</title>
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

			<script>
				function confirmarDelete() {
					return confirm("Confirmar exclusão?");
				}
			</script>
    <header id="headerResponsavel"></header>

    <body>
    <div class="wrapper">

        <div class="container" id="opcoesResponsavel">
            <div class="container-fluid bg-3 text-center" style="margin-top: 50px; margin-bottom: 50px;">
                <div class="btn-group">
                    <button type="button" id="btnAlunos" class="btn btn-primary">Alunos</button>
                    <button type="button" id="btnPagamentos" class="btn btn-primary">Pagamentos</button>
                    <button type="button" id="btnConfig" class="btn btn-primary">Configurações</button>
                </div>
            </div>  

            <div id="alunos" class="formulario">
                <div class="childBar text-center">
                <h2>Saldo atual: <?php echo Formatador::formataValor($saldo); ?></h2><br>
								<a href="cadastroAluno.php" target="_blank" class="btn btn-default addItem" id="responsavelAdicionarAluno" style="margin-bottom: 8px; color: white;"><i class="fa fa-plus"></i> Adicionar</a>
							</div>
							
							<div id="aluno">
								<br><h2>Dados</h2>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Matrícula</th>
											<th>Turma</th>
											<th>Turno</th>
											<th>Nome</th>
											<th>Telefone</th>
											<th>Email</th>
											<th>Login</th>
											<th></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($filhos as $filho) { ?>
										<tr>
											<td><?php echo $filho->getMatricula(); ?></td>
											<td><?php echo $filho->getTurma(); ?></td>
											<td><?php echo $filho->getTurno(); ?></td>
											<td><?php echo $filho->getNome(); ?></td>
											<td><?php echo $filho->getTelefone(); ?></td>
											<td><?php echo $filho->getEmail(); ?></td>
											<td><?php echo $filho->getLogin(); ?></td>
											<td>
												<form action="formUpdateAluno" method="POST">
													<input type="hidden" name="login" value="<?php echo $filho->getLogin(); ?>">
													<button type="submit" class="btn btn-default changeItem" id="alterarDadosAluno"><i class="fas fa-cog"></i></button>
												</form>
											</td>
											<td>
												<form action="deleteAluno" method="POST">
													<input type="hidden" name="login" value="<?php echo $filho->getLogin(); ?>" onsubmit="return confirmarDelete();">
													<button type="submit" class="btn btn-default blockItem"><i class="fa fa-trash"></i></button>
												</form>
											</td>
										</tr>
										<?php }; ?>
									</tbody>
								</table>
										<!-- <div class="historicoDeConsumo">
											<br><br><h2>Histórico de alimentação</h2>

											<table class="table table-hover">
												<thead>
													<tr>
														<th>Item</th>
														<th>Valor</th>
														<th>Quantidade</th>
														<th>Data</th>
														<th>Total</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Pastel de forno</td>
														<td>4,00</td>
														<td>1</td>
														<td>10/09/2021</td>
														<td>4,00</td>
													</tr>
													<tr>
															<td>Suco de maracujá</td>
															<td>4,00</td>
															<td>1</td>
															<td>10/09/2021</td>
															<td>4,00</td>
													</tr>
												</tbody>
											</table>
											<br>
										</div> -->
                </div>

            </div>

            <div id="pagamentos" class="formulario">
							<div class="bar">
								<h2>Saldo atual: <?php echo Formatador::formataValor($saldo); ?></h2><br>
						
								<h2>Forma de pagamento</h2><br>
						
								<input type="radio" class="btn-check" name="options" id="btnPix" autocomplete="off">
								<label class="btn btn-secondary" for="btnPix"><img src="img/pix.jpg" alt="" style="width: 80px;"></label>
								<br>
								<input type="radio" class="btn-check" name="options" id="btnCartao" autocomplete="off">
								<label class="btn btn-secondary" for="btnCartao">Cartão de crédito/débito</label>
							</div>

							<div id="pix">
								<br>
								<form action="depositaAluno" method="POST">
									<div class="form-group row">
										<div class="col-sm-2">
											<div class="form-group">
												<label for="valor">Valor</label>
												<input class="form-control" id="valorPix" name="valor" type="text" placeholder="Ex.: 50,00" required>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="valor">CPF</label>
												<input class="form-control" id="cpf" type="text" placeholder="Ex.: 000.000.000-00">
											</div>
										</div>
									</div>
									<div class="form-group">        
											<div class="col-sm-offset-2 col-sm-10">
												<input type="hidden" name="metodo" value="PIX">
												<button type="submit" class="btn addItem" id="cadastrar"><i class="fas fa-money-bill"></i> Gerar pagamento</button>
											</div>
									</div>
								</form>
							</div>

							<div id="cartao">
									<br>
									<form action="depositaAluno" method="POST">
										<div class="form-group row">
												<div class="col-sm-2">
														<div class="form-group">
																<label for="valor">Valor</label>
																<input class="form-control" id="valorCartao" name="valor" type="text" placeholder="Ex.: 50,00" required>
														</div>
												</div>
												<div class="col-sm-6">
														<div class="form-group'">
																<label for="valor">Número do cartão</label>
																<input class="form-control" id="numCartao" type="text" placeholder="Ex.: 0000 0000 0000 0000">
														</div>
												</div>
												<div class="col-sm-6">
														<div class="form-group'">
																<label for="valor">Nome como no cartão</label>
																<input class="form-control" id="nomeCartao" type="text" placeholder="Ex.: Jorge Machado de Souza">
														</div>
												</div>
												<div class="col-sm-2">
														<div class="form-group'">
																<label for="valor">Código de segurança</label>
																<input class="form-control" id="cvvCartao" type="text" placeholder="Ex.: 000">
														</div>
												</div>
												<div class="col-sm-2">
														<div class="form-group'">
																<label for="valor">Data de expiração</label>
																<input class="form-control" id="dataCartao" type="date">
														</div>
												</div>
										</div>
										<div class="form-group">        
												<div class="col-sm-offset-2 col-sm-10">
												<input type="hidden" name="metodo" value="cartao">
												<button type="submit" class="btn addItem" id="cadastrar"><i class="fas fa-money-bill"></i> Pagar</button>
												</div>
										</div>
									</form>
							</div>

							<div id="historico" class="formulario">
							<br><h2>Histórico de transações</h2>
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Método de pagamento</th>
											<th>Valor</th>
											<th>Data</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($depositos as $deposito) { ?>
											<tr>
												<td><?php echo $deposito->getMetodo(); ?></td>
												<td><?php echo Formatador::formataValor($deposito->getValor()); ?></td>
												<td><?php echo $deposito->getData(); ?></td>
											</tr>
										<?php }; ?>
									</tbody>
								</table>
								<br>
							</div>
            </div>

            <div id="config" class="formulario">

                <h2>Dados atuais</h2>
                <p>Para simples conferência.</p>            
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>CPF</th>
                      <th>Email</th>
                      <th>Celular</th>
                      <th>Login</th>
											<th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo $retorno->getNome(); ?></td>
                      <td><?php echo $retorno->getCpf(); ?></td>
                      <td><?php echo $retorno->getEmail(); ?></td>
                      <td><?php echo $retorno->getTelefone(); ?></td>
                      <td><?php echo $retorno->getLogin(); ?></td>
											<td>
												<form action="formUpdateResponsavel" method="POST">
													<input type="hidden" name="id" value="<?php echo $retorno->getId(); ?>">	
													<button type="submit" class="btn changeItem" id=""><i class="fa fa-cog"></i> Alterar</button>
												</form>
											</td>
                    </tr>
                  </tbody>
                </table>

            </div>
        </div>

            <div class="push"></div>
    </div>

    <footer id="footer"></footer>

    </body>

    <script src="js/header.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/pagamento.js"></script>
    <script src="js/formProdutos.js"></script>
    <script src="js/formResponsavel.js"></script>
</html>