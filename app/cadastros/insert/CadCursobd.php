<?php

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $curs_duracao = filter_input(INPUT_POST,'curs_duracao', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
        $curs_flag = filter_input(INPUT_POST,'curs_flag', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
        $curs_descricao = filter_input(INPUT_POST,'curs_descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 

        require_once("../_conexao/conexao.php");

        if ($curs_flag == null){
            $curs_flag = 'F';
        }
        try{
            $comandoSQL = $conexao->prepare(
                "INSERT INTO curso (Curs_a_descricao, Curs_i_duracao, Curs_a_flag)    
                    VALUES (:curs_descricao, :curs_duracao, :curs_flag)");         

            $comandoSQL->execute(array(
                ':curs_duracao'   => $curs_duracao,
                ':curs_flag'      => $curs_flag,
                'curs_descricao'  => $curs_descricao

            ));

            if($comandoSQL->rowCount() > 0){
                $msg = 'Cadastro realizado com sucesso';
                header("Location: ../../home.php?msg=$msg");
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
