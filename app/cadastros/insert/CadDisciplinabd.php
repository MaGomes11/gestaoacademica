<?php

    if($_SERVER['REQUEST_METHOD']=='POST')
    { 
        $disc_ativo = filter_input(INPUT_POST,'disc_ativo', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
        $disc_descricao = filter_input(INPUT_POST,'curs_descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 

        require_once("../_conexao/conexao.php");

        if ($disc_ativo == null){
            $disc_ativo = 'F';
        }
        try{
            $comandoSQL = $conexao->prepare(
                "INSERT INTO disciplina(Disc_a_descricao, Disc_a_ativo)   
                    VALUES (:disc_descricao, :disc_ativo)");         

            $comandoSQL->execute(array(
                ':disc_ativo'      => $disc_ativo,
                'disc_descricao'  => $disc_descricao

            ));

            if($comandoSQL->rowCount() > 0){
                echo("REGISTRO SALVO COM SUCESSO");
            }
            else{
                echo("ERRO: NO CADASTRO.");
            }

        }catch(PDOException $erro)
        {
            echo("ERRO2:".$erro->getCode()."<br>");
            echo("MENSAGEM2: ".$erro->getMessage());
        }

    }else{
        echo("Erro no envio: POST");  
    }
