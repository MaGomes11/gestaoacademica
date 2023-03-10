<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    
    <title>Cadastro de Curso</title>

    <link href="../../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../checkout.css" rel="stylesheet">
  </head>
  <body class="bg-dark-subtle">
    
<div class="container-sm">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../../../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Cadastro de Curso</h2>
    </div>
    <?php 
      require_once("ViewCursobd.php");
      if($total > 0){
    ?>
    <table class="table table-hover table-light">
      <thead class="table table-hover table-secondary">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Descrição do Curso</th>
          <!-- <th width="60">STS</th> -->
          <th width="60">ATU</th>
          <th width="60">EXC</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($dados as $linha)
          {
        ?>
        <tr>
          <th scope="row"><?=$linha["Curs_i_cod"];?></th>
          <td><?=$linha["Curs_a_descricao"];?></td>
          <!-- <td><?=$linha["Curs_a_descricao"];?></td> -->
          <td><a href="atu_login.php?id=<?=$linha['Curs_i_cod'];?>"><img src="_img/editar2.png" width="32" alt="Atu"></a></td>
          <td><a href="exc_login.php?id=<?=$linha['Curs_i_cod'];?>"><img src="_img/excluir2.png" width="32" alt="Exc"></a></td>
        </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
    <?php
      }
      else
      {
      echo "<h1 class='titulo'>Não há usuários cadastrados!</h1>";
      }
    ?>

  
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

      <script src="checkout.js"></script>
  </body>
</html>
