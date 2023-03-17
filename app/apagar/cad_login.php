<?php
    session_start();

    if((!isset($_SESSION["nome"]))or
       (!isset($_SESSION["nivel"]))or
       (isset($_SESSION["tempoSessao"])== false)or
       ($_SESSION["tempoSessao"]< time())
      ){
        //sem login volta para o index
        session_unset();//feche a sessão
        session_destroy();
        header("location:../../index.php");
        exit();

      }else{
        //logado aumentar o tempo de sessão
        $_SESSION["tempoSessao"] = time()+60;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro : : Login</title>
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/formularios.css">
</head>
<body>
    
    <?php 
        include("_menu.php");
    ?>

    <div class="row centralizar-h">
        <h1 class="titulo">CADASTRO DE USUÁRIOS</h1>
    </div>
    <div class="container">
        <form action="cad_loginbd.php" method="POST" enctype="multipart/form-data">
            <div class="row-flex">
                <div class="row">
                    <label for="foto">FOTO</label>
                    <input type="file" name="foto" id="foto">
                </div>
            </div>

            <div class="row-flex">
                <div class="row">
                    <label for="nome">NOME</label>
                    <input type="text" name="nome" id="nome">
                </div>
            </div>
            <div class="row-flex">
                <div class="row">
                    <label for="endereco">ENDEREÇO</label>
                    <input type="text" name="endereco" id="endereco">
                </div>
            </div>
            <div class="row-flex">
                <div class="row">                
                    <label for="telefone">TELEFONE</label>
                    <input type="text" name="telefone" id="telefone">
                </div>

                <div class="row">
                    <label for="email">EMAIL</label>
                    <input type="email" name="email" id="email">
                </div>
            </div>

            <div class="row-flex">
                <div class="row">                
                    <label for="senha1">SENHA</label>
                    <input type="password" name="senha1" id="senha1">
                </div>

                <div class="row">
                    <label for="senha2">CONFIRMAR SENHA</label>
                    <input type="password" name="senha2" id="senha2">

                    <p class="mens-erro" style="display: none; color:red;" >
                        Senhas divergentes ou tamanho inferior ao mínimo.
                    </p>

                </div>
                
            </div>

            <div class="row-flex">
                <div class="row">                
                    <label for="nivel">NIVEL</label>
                    <select name="nivel" id="nivel">
                        <option value="0">Não Autorizado</option>
                        <option value="1">Administrador</option>
                        <option value="2">Usuário</option>
                    </select>
                </div>

                <div class="row">
                    <label for="status">STATUS</label>
                    <select name="status" id="status">
                        <option value="0">Bloqueado</option>
                        <option value="1">Ativo</option>
                    </select>
                </div>
            </div>
            
            <div class="row-flex centralizar-h">
                <input type="reset" value="Limpar">
                <div class="espaco-h"></div>
                <input type="submit" name="btn-salvar" value="C A D A S T R A R">
            </div>
        </form>
    </div>

    <script type="text/javascript"> 
    
        let campoSenha = document.querySelector('input[name="senha1"]');
        let campoConfirmarSenha = document.querySelector('input[name="senha2"]');
        let botao = document.querySelector('input[name="btn-salvar"]');
        let errr = document.querySelector('.mens-erro');

        campoSenha.addEventListener('input', function(){
            verificaCampos();
        });

        campoConfirmarSenha.addEventListener('input', function(){
             verificaCampos();
        });

        function verificaCampos() {
            if(campoSenha.value == campoConfirmarSenha.value 
                && campoSenha.value.length >= 2)
             {
                botao.disabled = false; // habilita o boão de salvar dados
                errr.style.display = 'none'; // esconde a mensagem
                errr.style.color = 'green'; // coloca a cor da mensagem em verde
             }
             else
             {
                botao.disabled = true; // desabilita o botão
                errr.style.display = 'block'; // mostra a mensagem
                errr.style.color = 'red'; // coloca a cor da mensagem em vermelho
             }  

        }
    </script> 
</body>
</html>





