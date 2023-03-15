<?php


    /* echo "<pre>";
    print_r($_POST);
    print_r($_SERVER['REQUEST_METHOD']);
    echo "</pre>"; */
     
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $esp_descricao = filter_input(INPUT_POST,'esp_descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 

        require_once("../_conexao/conexao.php");

        /* echo "<pre>"; 
        echo($esp_descricao."<br>");
        echo "<pre>"; */  

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
