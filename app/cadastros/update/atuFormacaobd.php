<?php
    echo "<pre>";
    print_r($_POST);
    print_r($_SERVER['REQUEST_METHOD']);
    echo "</pre>";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $form_cod = filter_input(INPUT_POST,'id', FILTER_SANITIZE_NUMBER_INT);
        $form_descricao = filter_input(INPUT_POST,'form_descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $form_especial = filter_input(INPUT_POST,'form_especial', FILTER_SANITIZE_FULL_SPECIAL_CHARS);  

        require_once("../../_conexao/conexao.php");        
        
        $comandoSQL = $conexao->prepare("UPDATE formacao SET Form_i_descricao = :form_descricao, Form_a_especial = :form_especial WHERE Form_i_cod = :form_cod");

        $comandoSQL->execute(array(
            ':form_cod'        => $form_cod,
            ':form_descricao'  => $form_descricao, 
            ':form_especial'   => $form_especial        
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