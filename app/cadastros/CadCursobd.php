<?php

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $curs_duracao = filter_input(INPUT_POST,'curs_duracao', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 

        require_once("../_conexao/conexao.php");


        try{
            $comandoSQL = $conexao->prepare(
                "INSERT INTO especializacao(Espc_a_descricao)     
                    VALUES (:esp_descricao)");         

            $comandoSQL->execute(array(
                ':esp_descricao' => $esp_descricao
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
