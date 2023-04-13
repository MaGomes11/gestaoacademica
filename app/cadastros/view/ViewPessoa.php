<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    
    <title>Vizualização de Pessoas</title>

    <link href="../../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../checkout.css" rel="stylesheet">
    <link href="../../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../checkout.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  </head>
  <body class="bg-dark-subtle">
    
<div class="container-sm">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../../../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Vizualização de Pessoas</h2>
    </div>
    <div>
    <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../insert/CadPessoa.php">Cadastrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../../home.php">Home</a>
            </li>          
        </ul> 
    </div>
    <?php 
      require_once("ViewPessoabd.php");
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
          <th width="60">EXC</th>
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
          <td><a class="fas fa-edit fa-lg text-info" href="../update/atuPessoa.php?id=<?=$linha['Pess_i_cod'];?>"></a></td>
          <td><a class="fas fa-trash-alt fa-lg text-danger" href="../delete/delPessoa.php?id=<?=$linha['Pess_i_cod'];?>"></a></td>
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
