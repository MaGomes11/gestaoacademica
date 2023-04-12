<?php
   /*  echo "<pre>";
    print_r($_POST);
    print_r($_SERVER['REQUEST_METHOD']);
    echo "</pre>";  */

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $espc_cod = filter_input(INPUT_POST,'id', FILTER_SANITIZE_NUMBER_INT);
        $espc_descricao = filter_input(INPUT_POST,'espc_descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        require_once("../../_conexao/conexao.php");        
        
        $comandoSQL = $conexao->prepare("UPDATE especializacao SET Espc_a_descricao = :espc_descricao  WHERE Espc_i_cod = :espc_cod");

        

        $comandoSQL->execute(array(
            ':espc_cod'        => $espc_cod,
            ':espc_descricao'  => $espc_descricao     
        ));

        if($comandoSQL->rowCount() > 0){

             header("location:../view/ViewEspecializacao.php"); 
            exit();
        }
        else{
            echo("ERRO NA ATUALIZACAO");       
        }

    }
    else{
        header("location:../view/ViewEspecializacao.php");
        exit();        



    }