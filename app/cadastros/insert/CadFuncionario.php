<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro de Funcionário</title>

    <link href="../../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet">
  </head>
  <body class="bg-dark-subtle">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../../../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Cadastro de Funcionário</h2>
    </div>

    <div class="row g-5">     
      <div class="col-md-7 col-lg-8">

        <h4 class="mb-3">Dados Pessoais</h4>

        <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../view/ViewCurso.php">Visualizar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../../home.php">Home</a>
            </li>          
          </ul> 

        <hr class="my-4">
                    

        <form action="cadFuncionariobd.php" method="POST" class="needs-validation" novalidate> 
          <div class="row g-3">

          <div class="col-sm-12">  
            <div class="col-sm-4">
                <label for="codigo" class="form-label">Código</label>
                <input type="text" class="form-control" id="codigo" name ="codigo" value="" disabled>
              </div>
            </div>
  
            <div class="col-sm-4">
              <label for="codigo_pes" class="form-label">Código Pessoa</label>
              <input type="text" class="form-control" id="codigo_pes" name ="codigo_pes" value="">
            </div>

            <div class="col-sm-8">
              <label for="nome_pes" class="form-label">Nome Pessoa</label>
              <input type="text" class="form-control" id="nome_pes" name ="nome_pes" value="">
            </div>            

            <div class="form-check">
            <input type="checkbox" class="form-check-input" id="prof">
            <label class="form-check-label" for="save-info">Professor</label>
          </div>

            <div class="col-sm-6">
              <label for="login" class="form-label">Login</label>
              <input type="text" class="form-control" id="login" name="login" value="">
            </div>

            <div class="col-sm-6">
              <label for="senha" class="form-label">Senha</label>
              <input type="text" class="form-control" id="senha" name="senha" value="" required>     
            </div>                            

          <hr class="my-4">

          <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-primary col-sm-4" type="submit">Salvar</button>
            <button class="btn btn-primary col-sm-4" type="reset">Limpar</button>
          </div>

        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
  <p class="mb-1">&copy; 2022–2023 Company Gestor Acadêmico</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="checkout.js"></script>
  </body>
</html>
