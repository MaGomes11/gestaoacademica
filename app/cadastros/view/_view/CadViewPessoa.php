<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Vizualização de Pessoas</title>

    <link href="../../../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../checkout.css" rel="stylesheet">
  </head>
  <body class="bg-dark-subtle">
    
<div class="container-sm">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../../../../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Vizualizar Pessoa</h2>
    </div>
    <div>
    <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../../insert/CadPessoa.php">Cadastrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../../../home.php">Home</a>
            </li>          
        </ul> 
    </div>
    <?php 
      require_once("CadViewPessoabd.php");
      if($total > 0){
    ?>
    <table class="table table-hover table-light">
      <thead class="table table-hover table-secondary">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Descrição Pessoas</th>
          <th scope="col">Data de Nascimento</th>
          <th scope="col">CPF</th>
          <th scope="col">RG</th>
          <th scope="col">Celular</th>
          <th width="60">ATU</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($dados as $linha)
          {
        ?>
        <tr>
          <th scope="row"><?=$linha["Pess_i_cod"];?></th>
          <td><?=$linha["Pess_a_nome"];?></td>
          <td><?=$linha["Pess_d_nasc"];?></td> 
          <td><?=$linha["Pess_a_cpf"];?></td> 
          <td><?=$linha["Pess_a_rg"];?></td> 
          <td><?=$linha["Pess_a_celular"];?></td> 
          <td><a href="../../insert/CadFuncionario.php?id=<?=$linha['Pess_i_cod'];?>"><img src="../_img/editar2.png" width="32" alt="Atu"></a></td>
        </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
    <?php
      }
      else {
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


    <script src="../../../../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="checkout.js"></script>
  </body>
</html>
