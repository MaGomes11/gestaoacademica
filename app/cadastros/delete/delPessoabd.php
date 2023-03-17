<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $pess_cod = filter_input(INPUT_POST,'id', FILTER_SANITIZE_NUMBER_INT);        

        require_once("../../_conexao/conexao.php");        
        
        $comandoSQL = $conexao->prepare("DELETE FROM pessoa WHERE Pess_i_cod = :pess_cod");

       /*  $comandoSQL = $conexao->prepare("UPDATE `pessoa` SET `Pess_a_nome`= pess_nome,`Pess_a_logra`= :pess_logra,`Pess_i_lognum`= :pess_lognum,`Pess_a_bairro`= :pess_bairro,`Pess_a_municipio`= :pess_municipio,`Pess_a_estado`= :pess_estado,`Pess_a_pais`= :pess_pais,`Pess_a_cpf`= :pess_cpf,`Pess_a_rg`= :pess_rg,`Pess_d_nasc`= :pess_nasc,`Pess_a_telefone`= :pess_telefone,`Pess_a_celular`= :pess_celular,`Pess_a_email`= :pess_email,`Pess_a_genero`= :pess_genero,`Pess_a_cep`= :pess_cep,`Pess_i_ativo`= :pess_ativo WHERE `Pess_i_cod`= :pess_cod");  */

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