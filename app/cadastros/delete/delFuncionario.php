<?php

  /*   echo "<pre>";
    print_r($_GET);
    print_r($_SERVER['REQUEST_METHOD']);
    echo "</pre>"; */

    if($_SERVER["REQUEST_METHOD"] == "GET"){

        $func_cod = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);        

        /* echo "<pre>";
        echo($pess_cod."<br>");
        echo "</pre>"; */
        
        require_once("../../_conexao/conexao.php");        
        
        $comandoSQL = $conexao->prepare("DELETE FROM funcionario WHERE Func_i_cod = :func_cod");

        $comandoSQL->execute(array(
            ':func_cod'        => $func_cod

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
        header("location:./ViewFuncionario.php");
        exit();         
    }
