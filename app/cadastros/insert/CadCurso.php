<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    
    <title>Cadastro de Curso</title>

    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="checkout.css" rel="stylesheet">
  </head>
  <body class="bg-dark-subtle">
    
<div class="container-sm">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Cadastro de Curso</h2>
    </div>

    <div class="row g-5">     
      <div class="col-md-7 col-lg-8">

        <h6 class="mb-3">Dados do Curso</h6>
        <hr class="my-4">
                    

        <form action="CadCursobd.php" method="POST" class="needs-validation" novalidate>
          <div class="row g-3">

            <div class="col-sm-3">
              <label for="curs_cod" class="form-label">Código</label>
              <input type="text" class="form-control" id="curs_cod" name ="curs_cod" value="" disabled> 
            </div>
            
            <div class="col-sm-4">
              <label for="curs_duracao" class="form-label">Duração do Curso</label>
              <input type="text" class="form-control" id="curs_duracao" name ="curs_duracao" value="" required>
              <div class="invalid-feedback">
                Favor inserir a Duração do Curso.
              </div>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="T" id="curs_flag" name="curs_flag" checked>
              <label class="form-check-label" for="curs_flag">
                Ativo
              </label>
            </div>

            <div class="col-sm-12">
              <label for="curs_descricao" class="form-label">Descrição do Curso</label>
              <input type="text" class="form-control" id="curs_descricao" name ="curs_descricao" value="" required>
              <div class="invalid-feedback">
                Favor inserir a Descrição do Curso.
              </div>
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
