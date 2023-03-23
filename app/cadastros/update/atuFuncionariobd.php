<?php

/*     echo "<pre>";
    print_r($_POST);
    print_r($_SERVER['REQUEST_METHOD']);
    echo "</pre>";  */

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $func_cod = filter_input(INPUT_POST,'id', FILTER_SANITIZE_NUMBER_INT);
        $pess_cod = filter_input(INPUT_POST,'pess_cod', FILTER_SANITIZE_NUMBER_INT);
        $func_prof = filter_input(INPUT_POST,'func_prof', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $func_login = filter_input(INPUT_POST,'func_login', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $func_senha = filter_input(INPUT_POST,'func_senha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);  

        require_once("../../_conexao/conexao.php");        
        
        $comandoSQL = $conexao->prepare("UPDATE funcionario SET Pess_i_cod = :pess_cod, Func_a_prof = :func_prof, Func_a_login = :func_login, Func_a_senha = :func_senha WHERE Func_i_cod = :func_cod");

        $comandoSQL->execute(array(
            ':func_cod'        => $func_cod,
            ':pess_cod'        => $pess_cod, 
            ':func_prof'       => $func_prof, 
            ':func_login'      => $func_login,
            ':func_senha'      => $func_senha

        ));

        if($comandoSQL->rowCount() > 0){

             header("location:../view/ViewFuncionario.php"); 
            exit();
        }
        else{
            echo("ERRO NA ATUALIZACAO");       
        }

    }
    else{
        header("location:../view/ViewFuncionario.php");
        exit();        



    }