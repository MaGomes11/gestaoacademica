<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Cadastro de Formação</title>
    <link href="../../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
    

    
    <!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet">
  </head>
  <body class="bg-dark-subtle">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../../../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Cadastro de Formação</h2>
    </div>

    <div class="row g-5">     
      <div class="col-md-7 col-lg-8">

        <h6 class="mb-3">Dados Formação</h6>        
        
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../view/ViewFormacao.php">Vizualizar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../../home.php">Home</a>
          </li>          
        </ul> 

        <hr class="my-4">

        <form action="cadFormacaobd.php" method="POST" class="needs-validation" novalidate> <!-- action="cad_Pessoabd.php" method="POST -->
          <div class="row g-3">

          <div class="col-sm-3">
              <label for="form_cod" class="form-label">Código</label>
              <input type="text" class="form-control" id="form_cod" name ="form_cod" value="" disabled>
            </div>
            
            <div class="col-sm-9">
              <label for="form_descricao" class="form-label">Descrição da Formação</label>
              <input type="text" class="form-control" id="form_descricao" name ="form_descricao" value="" required>
              <div class="invalid-feedback">
                Favor inserir a Descrição da Formação.
              </div>
            </div>

            <div class="col-sm-9">
              <label for="form_especial" class="form-label">Descrição da Especialização</label>
              <input type="text" class="form-control" id="form_especial" name="form_especial" value="" required>
              <div class="invalid-feedback">
                Favor inserir a Descrição da Especialização.
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
