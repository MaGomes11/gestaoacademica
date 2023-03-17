<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $id = filter_input(INPUT_POST,"id",FILTER_SANITIZE_NUMBER_INT);
        //--------------------------------------------------
        // diretório que será armazenado todas as imagens enviadas pelos usuários
        $dir_imagens = "./imagens/"; 
        
        $fotobd = filter_input(INPUT_POST, 'fotobd', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        //--------------------------------------------------

        require_once("../_conexao/conexao.php");

        $comandoSQL = $conexao->prepare(
            "DELETE FROM `login` WHERE `idLogin`=:id
        ");

        $comandoSQL->execute(array(
            ':id'        => $id
        ));

        if($comandoSQL->rowCount() > 0){

            //--------------------------------------------------
            // usado para excluir a imagem do servidor 
            unlink($dir_imagens.$fotobd);
            //--------------------------------------------------
            
            echo("SUCESSO NA EXCLUSÃO");
        }
        else{
            echo("ERRO NA EXCLUSÃO");
        }

    }
    else{
        header("location:./view_login.php");
    }