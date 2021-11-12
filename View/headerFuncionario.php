<style>
  .nav-button {
    border-color: #56e852; 
    color:#56e852;
  }
</style>

<header>
    <nav class="navbar navbar-expand-sm navbar-light " style="background-color: white;">
      <div class="container">
        
        <a href="home.php" class="navbar-brand">
          <img src="img/Logo Fast2.png" width="142">
        </a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-principal">
          <ul class="navbar-nav ml-auto"> 
            <li class="nav-item">
                <a href="cadastroProdutos.php" class="btn btn-outline-primary ml-4 nav-button">Cadastramento</a>
              </li>
            <li class="nav-item">
                <a href="readProduto" class="btn btn-outline-primary ml-4 nav-button">Controle de produtos</a>
            </li>
            <li class="nav-item">
              <a href="controleResponsaveis.php" class="btn btn-outline-primary ml-4 nav-button nav-button">Controle de responsáveis</a>
            </li>
            <li class="nav-item">
              <a href="controleAlunos.php" class="btn btn-outline-primary ml-4 nav-button">Consultar alunos</a>
            </li>
            <li class="nav-item">
              <a href="cadastro.php" class="btn btn-outline-primary ml-4 nav-button">Cadastro</a>
            </li>
            <li class="nav-item">
              <a href="#" class="btn btn-outline-primary ml-4 nav-button">admin</a>
            </li>
            <li class="nav-item">
                <a href="home.php" class="btn btn-outline-primary ml-4 nav-button">Sair</a>
              </li>
          </ul>
        </div>

      </div>
    </nav>
  </header>