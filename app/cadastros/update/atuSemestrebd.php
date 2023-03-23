<?php
    /* echo "<pre>";
    print_r($_POST);
    print_r($_SERVER['REQUEST_METHOD']);
    echo "</pre>"; */ 

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $seme_cod = filter_input(INPUT_POST,'id', FILTER_SANITIZE_NUMBER_INT);
        $seme_ano = filter_input(INPUT_POST,'seme_ano', FILTER_SANITIZE_NUMBER_INT);
        $seme_sequencia = filter_input(INPUT_POST,'seme_sequencia', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $seme_descricao = filter_input(INPUT_POST,'seme_descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        require_once("../../_conexao/conexao.php");        
        
        $comandoSQL = $conexao->prepare("UPDATE semestre SET Seme_i_sequencia = :seme_sequencia, Seme_i_ano = :seme_ano, Seme_a_descricao = :seme_descricao WHERE Seme_i_cod = :seme_cod");

        $comandoSQL->execute(array(
            ':seme_cod'          => $seme_cod,
            ':seme_sequencia'    => $seme_sequencia,
            ':seme_ano'          => $seme_ano,     
            ':seme_descricao'    => $seme_descricao     
        ));

        if($comandoSQL->rowCount() > 0){

            header("location:../view/ViewSemestre.php"); 
            exit();
        }
        else{
            echo("ERRO NA ATUALIZACAO");       
        }

    }
    else{
        header("location:../view/ViewSemestre.php");
        exit();        



    }