<?php

  /*   echo "<pre>";
    print_r($_GET);
    print_r($_SERVER['REQUEST_METHOD']);
    echo "</pre>"; */

    if($_SERVER["REQUEST_METHOD"] == "GET"){

        $pess_cod = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);        

        echo "<pre>";
        echo($pess_cod."<br>");
        echo "</pre>";
        
        require_once("../../_conexao/conexao.php");        
        
        $comandoSQL = $conexao->prepare("DELETE FROM pessoa WHERE Pess_i_cod = :pess_cod");

        $comandoSQL->execute(array(
            ':pess_cod'        => $pess_cod

        ));

        if($comandoSQL->rowCount() > 0){

            header("location:../view/ViewPessoa.php"); 
            exit();
        }
        else{
            echo("ERRO NA ATUALIZACAO");       
        }

    }
    else{
        header("location:./viewPessoa.php");
        exit();         
    }
