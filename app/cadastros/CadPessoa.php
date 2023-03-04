<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Cadastro de Pessoa</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
      <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Cadastro de Pessoas</h2>
    </div>

    <div class="row g-5">     
      <div class="col-md-7 col-lg-8">

        <h4 class="mb-3">Dados Pessoais</h4>
        <hr class="my-4">
                    

        <form action="cad_Pessoabd.php" method="POST" class="needs-validation" novalidate> <!-- action="cad_Pessoabd.php" method="POST -->
          <div class="row g-3">

          <div class="col-sm-4">
              <label for="codigo" class="form-label ">Código</label>
              <input type="text" class="form-control" id="codigo" name ="codigo" value="" disabled>
            </div>
            
            <div class="col-sm-12">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome" name ="nome" value="" required>
              <div class="invalid-feedback">
                Favor inserir o nome.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="cpf" class="form-label">CPF</label>
              <input type="text" class="form-control" id="cpf" name="cpf" placeholder="" value="" required>
              <div class="invalid-feedback">
                Favor inserir o cpf.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="rg" class="form-label">RG</label>
              <input type="text" class="form-control" id="rg" name="rg" value="" required>
              <div class="invalid-feedback">
                Favor inserir o rg.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="nascimento" class="form-label">Data de Nascimento</label>
              <input type="date" class="form-control" id="nascimento" name="nascimento" value="" required>
              <div class="invalid-feedback">
                Favor inserir a data de nascimento.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="genero" class="form-label">Sexo</label>
              <select class="form-select" id="genero" name="genero" aria-label="Default select example">
                <option selected>Selecione</option>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
                <option value="O">Outros</option>
              </select>  
            </div>

            <div class="col-sm-6">
              <label for="telefone" class="form-label">Telefone</label>
              <input type="tel" class="form-control" id="telefone" name="telefone" value="">
            </div>

            <div class="col-sm-6">
              <label for="celular" class="form-label">Celular</label>
              <input type="tel" class="form-control" id="celular" name="celular" value="" required>
              <div class="invalid-feedback">
              Favor inserir a celular.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Insira um endereço de e-mail válido.
              </div>
            </div>

            <h4 class="mb-3">Endereço</h4>
            <hr class="my-4">

            <div class="col-12">
              <label for="logradouro" class="form-label">Logradouro</label>
              <input type="text" class="form-control" id="logradouro" name="logradouro" required>
              <div class="invalid-feedback">
                Favor inserir o endereço.
              </div>
            </div>            

            <div class="col-3">
              <label for="lognum" class="form-label">Número</label>
              <input type="text" class="form-control" id="lognum" name="lognum" required>
              <div class="invalid-feedback">
                Favor inserir o número residencial.
              </div>
            </div>

            <div class="col-9">
              <label for="bairro" class="form-label">Bairro</label>
              <input type="text" class="form-control" id="bairro" name="bairro"required>
              <div class="invalid-feedback">
                Favor inserir o bairro.
              </div>
            </div>

            <div class="col-4">
              <label for="cep" class="form-label">Cep</label>
              <input type="text" class="form-control" id="cep" name="cep"required>
              <div class="invalid-feedback">
                Favor inserir o bairro.
              </div>
            </div>
            
            <div class="col-8">
              <label for="municipio" class="form-label">Município</label>
              <input type="text" class="form-control" id="municipio" name="municipio" required>
              <div class="invalid-feedback">
                Favor inserir o município.
              </div>
            </div>

            <div class="col-4">
              <label for="estado" class="form-label">Estado</label>
              <select class="form-select" id="estado" name="estado" required>
               <option selected>Selecione</option>
                <option value="SP">São Paulo</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>                
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
              </select>            
            </div>

            <div class="col-8">
              <label for="pais" class="form-label">Pais</label>
              <input type="text" class="form-control" id="pais" name="pais" required>
              <div class="invalid-feedback">
                Favor inserir o país.
              </div>
            </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
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
