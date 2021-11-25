<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Carrinho</title>
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
			// function somaProduto1(){
			// 	var preco = parseFloat(document.getElementById("preco1").innerText);
			// 	var qtd = parseFloat(document.getElementById("qtd1").value);
			// 	var total = preco * qtd;

			// 	document.getElementById("total1").innerHTML = String(total);
			// 	valorTotal();
			// }

			// function somaProduto2(){
			// 	var preco = parseFloat(document.getElementById("preco2").innerText);
			// 	var qtd = parseFloat(document.getElementById("qtd2").value);
			// 	var total = preco * qtd;

			// 	document.getElementById("total2").innerHTML = String(total);
			// 	valorTotal();
			// }

			// function somaProduto3(){
			// 	var preco = parseFloat(document.getElementById("preco3").innerText);
			// 	var qtd = parseFloat(document.getElementById("qtd3").value);
			// 	var total = preco * qtd;

			// 	document.getElementById("total3").innerHTML = String(total);
			// 	valorTotal();
			// }

			// function valorTotal(){
			// 	var total1 = parseFloat(document.getElementById("total1").innerText);
			// 	var total2 = parseFloat(document.getElementById("total2").innerText);
			// 	var total3 = parseFloat(document.getElementById("total3").innerText);
			// 	var total = total1 + total2 + total3;

			// 	document.getElementById("h3Total").innerText = "Valor total : " + String(total);
			// 	qtdTotal();
			// }
					
			// function qtdTotal(){
			// 	var total1 = parseInt(document.forms["formID1"]["qtd1"].value);
			// 	var total2 = parseInt(document.forms["formID2"]["qtd2"].value);
			// 	var total3 = parseInt(document.forms["formID3"]["qtd3"].value);
			// 	var total = total1 + total2 + total3;

			// 	document.getElementById("h3QtdTotal").innerText = "Quantidade total : " + String(total);
			// }
		</script>
	</head>

	<header id="headerAluno"></header>

	<body>
		<div class="wrapper">
			<br><br>
			<div class="container">
				<h2>Meu carrinho</h2>
				<br><h2 id="saldo">Saldo: <?php echo number_format($aluno->getSaldo(), 2, ',', '.'); ?></h2><br>
				<table class="table table-striped">
					<thead class="thead-dark">
						<tr>
							<th>Código</th>
							<th>Produto</th>
							<th>Preço unitário</th>
							<th>Quantidade</th>
							<th>Alterar</th>
							<th>Subtotal</th>
							<th>Remover</th>
						</tr>
					</thead>
					<tbody>
						<?php $lista = ''; foreach ($itensCarrinho as $item) { ?>
							<tr>
								<td><?php echo $item->getProduto()->getCodigo(); ?></td>
								<td><?php echo $item->getProduto()->getNome(); ?></td>
								<td>R$ <?php echo number_format($item->getProduto()->getPreco(), 2, ',', '.'); ?></td>
								<td>
									<form action="updateItemCarrinho" method="post">
										<input type="hidden" name="id" value="<?php echo $item->getProduto()->getCodigo(); ?>">
										<input type="number" name="quantidade" class="form-control form-control-sm" value="<?php echo $item->getQuantidade(); ?>" min="1" style="width: 55px;">
										<td><button type="submit" class="btn changeItem"><i class="fa fa-cog"></i></button></td>
									</form>
								</td>
								<td><?php echo number_format($item->getSubTotal(), 2, ',', '.'); ?></td>
								<td>
									<form action="deleteItemCarrinho" method="POST">
										<input type="hidden" name="id" value="<?php echo $item->getProduto()->getCodigo(); ?>">
										<button type="submit" class="btn blockItem"><i class="fas fa-trash"></i></button> 
									</form>
								</td>
							</tr>
							<?php $lista .= '(' . $item->getQuantidade() . ') ' . $item->getProduto()->getNome() . ' '; ?>
						<?php }; ?>
					</tbody>
					<tfoot>
						<form action="pagarCarrinho" id="pagarCarrinho" method="POST">
							<tr>
								<input type="hidden" name="total" value="<?php echo $carrinho->getTotal(); ?>">
								<input type="hidden" name="lista" value="<?php echo $lista; ?>">
								<h4 id="total"><b>Total: </b>R$ <?php echo number_format($carrinho->getTotal(), 2, ',', '.'); ?><button type="submit" class="btn btn-lg btn-default addItem" style="margin-left: 10px;"><i class="fa fa-money-bill"></i> Pagar</button></h4>
							</tr>
						</form>
					</tfoot>
				</table>
			</div>  
			
			<!-- <div class="container">

				<div class="row">
					<div class="col-sm-4">
		
						<h3 id="h3Total">
						<script>
							valorTotal();
						</script>
						</h3>
					</div>
	
					<div class="col-sm-4">
						<h3 id="h3QtdTotal">
						<script>
							qtdTotal();
						</script>
						</h3>
					</div>
	
					<div class="col-sm-4">
						<br>
						<a href="#"> 
							<button class="btn btn-default btn-lg addItem"><i class="fa fa-money-bill"></i> Comprar</button>
						</a>
					</div>
				</div>
	
				<br>
				<br>
				<br>
				<br>
			</div> -->
			
			<div class="push"></div>
		</div>

		<footer id="footer"></footer>
	</body>

	<script>
		var saldo = document.getElementById("saldo").textContent;
		var total = document.getElementById("total").textContent;
		saldo = parseFloat(saldo.substring(7, saldo.length));
		total = parseFloat(total.substring(10, total.length-5));

		document.getElementById("pagarCarrinho").addEventListener("submit", function(event) {
			if (saldo < total) {
				event.preventDefault();
				alert("Você não tem saldo pra essa compra... Diminua a quantidade de itens ou recarregue :D");
			} 
		});
	</script>
	<script src="js/footer.js"></script>
	<script src="js/header.js"></script>
</html>