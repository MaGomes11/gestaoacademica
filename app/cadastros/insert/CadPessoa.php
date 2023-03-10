<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Cadastro de Pessoa</title>

    <link href="../../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../checkout.css" rel="stylesheet">

  </head>
  <body class="bg-dark-subtle">
    
<div class="container-xl">
  <main>
    <div class="py-3 text-center">
      <img class="d-block mx-auto mb-4" src="../../../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Cadastro de Pessoas</h2>
    </div>

    <div class="row g-5">     
      <div class="col-md-7 col-lg-8">

        <h4 class="mb-1 py-3">Dados Pessoais</h4>
        <hr class="my-1">
                    

        <form action="CadPessoabd.php" method="POST" class="needs-validation" novalidate> 
          <div class="row g-3">

          <div class="col-sm-3">
              <label for="codigo" class="form-label ">Código</label>
              <input type="text" class="form-control" id="codigo" name ="codigo" value="" disabled>
            </div>
            
            <div class="col-sm-12">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" class="form-control" id="pess_nome" name ="pess_nome" value="" required>
              <div class="invalid-feedback">
                Favor inserir o nome.
              </div>
            </div>

            <div class="col-sm-4">
              <label for="cpf" class="form-label">CPF</label>
              <input type="text" class="form-control" id="pess_cpf" name="pess_cpf" placeholder="" value="" required>
              <div class="invalid-feedback">
                Favor inserir o cpf.
              </div>
            </div>

            <div class="col-sm-4">
              <label for="rg" class="form-label">RG</label>
              <input type="text" class="form-control" id="pess_rg" name="pess_rg" value="" required>
              <div class="invalid-feedback">
                Favor inserir o rg.
              </div>
            </div>

            <div class="col-sm-4">
              <label for="nascimento" class="form-label">Data de Nascimento</label>
              <input type="date" class="form-control" id="pess_nasc" name="pess_nasc" value="" required>
              <div class="invalid-feedback">
                Favor inserir a data de nascimento.
              </div>
            </div>

            <div class="col-sm-4">
              <label for="genero" class="form-label">Sexo</label>
              <select class="form-select" id="pess_genero" name="pess_genero" aria-label="Default select example">
                <option selected>Selecione</option>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
                <option value="O">Outros</option>
              </select>  
            </div>

            <div class="col-sm-4">
              <label for="telefone" class="form-label">Telefone</label>
              <input type="tel" class="form-control" id="pess_telefone" name="pess_telefone" value="">
            </div>

            <div class="col-sm-4">
              <label for="celular" class="form-label">Celular</label>
              <input type="tel" class="form-control" id="pess_celular" name="pess_celular" value="" required>
              <div class="invalid-feedback">
              Favor inserir a celular.
              </div>
            </div>

            <div class="col-6">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="pess_email" name="pess_email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Insira um endereço de e-mail válido.
              </div>
            </div>

            <h4 class="mb-1 py-3">Endereço</h4>
            <hr class="my-1">

            <div class="col-12">
              <label for="logradouro" class="form-label">Logradouro</label>
              <input type="text" class="form-control" id="pess_logra" name="pess_logra" required>
              <div class="invalid-feedback">
                Favor inserir o endereço.
              </div>
            </div>            

            <div class="col-3">
              <label for="lognum" class="form-label">Número</label>
              <input type="text" class="form-control" id="pess_lognum" name="pess_lognum" required>
              <div class="invalid-feedback">
                Favor inserir o número residencial.
              </div>
            </div>

            <div class="col-9">
              <label for="bairro" class="form-label">Bairro</label>
              <input type="text" class="form-control" id="pess_bairro" name="pess_bairro"required>
              <div class="invalid-feedback">
                Favor inserir o bairro.
              </div>
            </div>

            <div class="col-4">
              <label for="cep" class="form-label">Cep</label>
              <input type="text" class="form-control" id="pess_cep" name="pess_cep" required>
              <div class="invalid-feedback">
                Favor inserir o bairro.
              </div>
            </div>
            
            <div class="col-8">
              <label for="municipio" class="form-label">Município</label>
              <input type="text" class="form-control" id="pess_municipio" name="pess_municipio" required>
              <div class="invalid-feedback">
                Favor inserir o município.
              </div>
            </div>

            <div class="col-4">
              <label for="estado" class="form-label">Estado</label>
              <select class="form-select" id="pess_estado" name="pess_estado" required>
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
              <input type="text" class="form-control" id="pess_pais" name="pess_pais" required>
              <div class="invalid-feedback">
                Favor inserir o país.
              </div>
            </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-pess_ativo" name="pess_ativo" value="1" checked>
            <label class="form-check-label" for="same-address">Ativo</label>
          </div>

          <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div>  -->         

          <hr class="my-5">

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
