<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $form_cod = filter_input(INPUT_POST,'id', FILTER_SANITIZE_NUMBER_INT);
        $form_descricao = filter_input(INPUT_POST,'form_descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $espc_cod = filter_input(INPUT_POST,'espc_cod', FILTER_SANITIZE_NUMBER_INT);  

        require_once("../../_conexao/conexao.php");        
        
        $comandoSQL = $conexao->prepare("UPDATE formacao SET Form_i_descricao = :form_descricao, Espc_i_cod = :espc_cod WHERE Form_i_cod = :form_cod");

        $comandoSQL->execute(array(
            ':form_cod'        => $form_cod,
            ':form_descricao'  => $form_descricao, 
            ':espc_cod'        => $espc_cod        
        ));

        if($comandoSQL->rowCount() > 0){

             header("location:../view/ViewFormacao.php"); 
            exit();
        }
        else{
            echo("ERRO NA ATUALIZACAO");       
        }

    }
    else{
        header("location:../view/ViewFormacao.php");
        exit();        



    }