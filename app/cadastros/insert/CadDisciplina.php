<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Cadastro de Disciplina</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
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

  </head>
  <body class="bg-dark-subtle">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../../../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Cadastro de Disciplina</h2>
    </div>

    <div class="row col-sm-8"> 
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="../view/ViewDisciplina.php">Vizualizar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../../home.php">Home</a>
        </li>
      </ul>
    </div>

    <div class="row g-5">     
      <div class="col-md-7 col-lg-8">

        <h6 class="mb-3">Dados da Disciplina</h6>
        <hr class="my-4">
                    

        <form action="CadDisciplinabd.php" method="POST" class="needs-validation" novalidate>
          <div class="row g-3">

            <div class="col-sm-3">
              <label for="disc_cod" class="form-label">Código</label>
              <input type="text" class="form-control" id="disc_cod" name ="disc_cod" value="" disabled> 
            </div>
            

            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="T" id="disc_ativo" name="disc_ativo" checked>
              <label class="form-check-label" for="disc_ativo">
                Ativo
              </label>
            </div>

            <div class="col-sm-12">
              <label for="disc_descricao" class="form-label">Descrição do Disciplina</label>
              <input type="text" class="form-control" id="disc_descricao" name ="disc_descricao" value="" required>
              <div class="invalid-feedback">
                Favor inserir a Descrição do Disciplina.
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


    <script src="../../../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="../checkout.js"></script>
  </body>
</html>
