<?php
    /*  echo "<pre>";
        print_r($_POST);
        print_r($_SERVER['REQUEST_METHOD']);
        echo "</pre>"; 
    */
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $disc_cod = filter_input(INPUT_POST,'id', FILTER_SANITIZE_NUMBER_INT);
        $disc_descricao = filter_input(INPUT_POST,'disc_descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $disc_ativo = filter_input(INPUT_POST,'disc_ativo', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 

        require_once("../../_conexao/conexao.php");        
        
        $comandoSQL = $conexao->prepare("UPDATE disciplina SET Disc_a_descricao = :disc_descricao, Disc_a_ativo = :disc_ativo WHERE Disc_i_cod = :disc_cod");

        if ($disc_ativo == null){
            $disc_ativo = 'F';
        }

        $comandoSQL->execute(array(
            ':disc_cod'              => $disc_cod,
            ':disc_descricao'        => $disc_descricao,
            ':disc_ativo'            => $disc_ativo     
        ));

        if($comandoSQL->rowCount() > 0){

             header("location:../view/ViewDisciplina.php"); 
            exit();
        }
        else{
            echo("ERRO NA ATUALIZACAO");       
        }

    }
    else{
        header("location:../view/ViewDisciplina.php");
        exit();        



    }