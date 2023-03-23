<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro de Funcionário</title>

    <link href="../../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="checkout.css" rel="stylesheet">
  </head>
  <body class="bg-dark-subtle">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../../../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Cadastro de Funcionário</h2>
    </div>
    
    <?php
      $func_cod = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
          require_once("atuViewFuncionario.php");
        ?>  

    <div class="row g-5">     
      <div class="col-md-7 col-lg-8">

        <h4 class="mb-3">Dados Pessoais</h4>

        <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../view/ViewFuncionario.php">Visualizar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../../home.php">Home</a>
            </li>          
          </ul> 

        <hr class="my-4">
        
                        

        <form action="cadFuncionariobd.php" method="POST" class="needs-validation" novalidate> 
          <div class="row g-3">

          <input type="hidden" name="id"  value="<?=$func_cod;?>" >
                  
          <?php
            foreach($dados as $linha)
              {
          ?>

          <div class="col-sm-12">  
            <div class="col-sm-2">
                <label for="codigo" class="form-label">Código Funcionário</label>
                <input type="text" class="form-control" id="func_cod" name ="func_cod" value="<?=$linha['Func_i_cod'];?>" disabled>
              </div>
            </div>
            
            <div class="col-sm-2">
              <label for="codigo_pes" class="form-label">Código</label>
              <input type="text" class="form-control" id="pess_cod" name ="pess_cod" value="<?=$linha['Pess_i_cod'];?>">
            </div>

            <div class="col-sm-6">
              <label for="nome_pes" class="form-label">Nome Pessoa</label>
              <input type="text" class="form-control" id="pess_nome" name ="pess_nome" value="<?=$linha['Pess_a_nome'];?>" disabled>
            </div>              

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="func_prof" name="func_prof" value="T">
              <label class="form-check-label" for="save-info">Professor</label>
            </div>

            <div class="col-sm-6">
              <label for="login" class="form-label">Login</label>
              <input type="text" class="form-control" id="func_login" name="func_login" value="<?=$linha['Func_a_login'];?>">
            </div>

            <div class="col-sm-6">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" class="form-control" id="func_senha" name="senha" value="<?=$linha['Func_a_login'];?>"  disabled>     
            </div>                            
            
          <?php
            } 
          ?>   

          <hr class="my-4">

          <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-primary col-sm-4" type="submit">Atualizar</button>
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

      <script src="../checkout.js"></script>
  </body>
</html>
