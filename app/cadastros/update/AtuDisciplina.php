<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Atualização de Disciplina</title>

    <link href="../../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="checkout.css" rel="stylesheet">
  </head>
  <body class="bg-dark-subtle">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../../../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Atualização de Disciplina</h2>
    </div>
    
    <?php
      $disc_cod = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
          require_once("atuViewDisciplina.php");
    ?>  

    <div class="row g-5">     
      <div class="col-md-7 col-lg-8">

        <h4 class="mb-3">Dados da Disciplina</h4>

        <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../view/ViewDisciplina.php">Visualizar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../../home.php">Home</a>
            </li>          
          </ul> 

        <hr class="my-4">
        
                        

        <form action="AtuDisciplinabd.php" method="POST" class="needs-validation" novalidate> 
          <div class="row g-3">

          <input type="hidden" name="id"  value="<?=$disc_cod;?>" >
                  
          <?php
            foreach($dados as $linha)
              {
          ?>

           <div class="col-sm-3">
              <label for="codigo" class="form-label">Código</label>
              <input type="text" class="form-control" id="disc_cod" name ="disc_cod" value="<?=$linha['Disc_i_cod'];?>" disabled>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="T" id="disc_ativo" name="disc_ativo" checked>
              <label class="form-check-label" for="disc_ativo">
                Ativo
              </label>
            </div>
            
            <div class="col-sm-9">
              <label for="descForm" class="form-label">Descrição da Disciplina</label>
              <input type="text" class="form-control" id="disc_descricao" name ="disc_descricao" value="<?=$linha['Disc_a_descricao'];?>" required>
              <div class="invalid-feedback">
                Favor inserir a Descrição da Disciplina.
              </div>
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
