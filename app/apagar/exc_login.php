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
    <title>Excluir : : Login</title>
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/formularios.css">
</head>
<body>
    
    <?php 
        include("_menu.php");
    ?>


    <div class="row centralizar-h">
        <h1 class="titulo">EXCLUSÃO USUÁRIOS</h1>
    </div>

    <?php
        $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
        require_once("exc_view_login.php");
    ?>

    <div class="container">
        <form action="exc_loginbd.php" method="POST">
            <?php
                foreach($dados as $linha)
                {
            ?>
            <input type="hidden" name="id" value="<?=$linha['idLogin'];?>">
            <!-- --------------- -->
            <!-- fotobd é usado para excluir a imagem quando registro é excluido -->
            <input type="hidden" name="fotobd" value="<?=$linha['fotoLogin'];?>">
            <!-- --------------- -->
            <div class="row-flex">
                <div class="row">
                    <label for="nome">NOME</label>
                    <input type="text" name="nome" id="nome" disabled value="<?=$linha['nomeLogin'];?>">
                </div>
            </div>
            
            <div class="row-flex">
                <div class="row">
                    <label for="endereco">ENDEREÇO</label>
                    <input type="text" name="endereco" id="endereco"disabled value="<?=$linha['enderecoLogin'];?>">
                </div>
            </div>
            <div class="row-flex">
                <div class="row">                
                    <label for="telefone">TELEFONE</label>
                    <input type="text" name="telefone" id="telefone" disabled value="<?=$linha['telefoneLogin'];?>">
                </div>

                <div class="row">
                    <label for="email">EMAIL</label>
                    <input type="email" name="email" id="email" disabled value="<?=$linha['emailLogin'];?>">
                </div>
            </div>

            <div class="row-flex">
                <div class="row">                
                    <label for="senha1">SENHA</label>
                    <input type="password" name="senha1" id="senha1" disabled value="<?='********';?>">
                </div>

                <div class="row">
                    <label for="senha2">CONFIRMAR SENHA</label>
                    <input type="password" name="senha2" id="senha2" disabled value="<?='********';?>">
                </div>
                
            </div>

            <div class="row-flex">
                <div class="row">                
                    <label for="nivel">NIVEL</label>
                    <select name="nivel" id="nivel" disabled>
                        <option value="0" selected>Não Autorizado</option>
                        <option value="1">Administrador</option>
                        <option value="2">Usuário</option>
                    </select>
                </div>

                <div class="row">
                    <label for="status">STATUS</label>
                    <select name="status" id="status" disabled>
                        <option value="0" selected>Bloqueado</option>
                        <option value="1">Ativo</option>
                    </select>
                </div>
            </div>
            <?php
                }  // fechando o FOREACH
            ?>
            <div class="row-flex centralizar-h">
                <input type="reset" value="Voltar">
                <div class="espaco-h"></div>
                <input type="submit" value="E X C L U I R" style="background-color: red;">
            </div>
        </form>
    </div>
</body>
</html>