<?php
    echo "<pre>";
    print_r($_POST);
    print_r($_SERVER['REQUEST_METHOD']);
    echo "</pre>"; 

   
     
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $form_cod = filter_input(INPUT_POST,'form_cod', FILTER_SANITIZE_NUMBER_INT); 
        $form_descricao = filter_input(INPUT_POST,'form_descricao', FILTER_SANITIZE_NUMBER_INT); 
        $form_especial = filter_input(INPUT_POST,'form_especial', FILTER_SANITIZE_SPECIAL_CHARS); 
        

        require_once("../../_conexao/conexao.php");

        try{
            $comandoSQL = $conexao->prepare(
                "INSERT INTO `formacao`(`Form_i_descricao`, `Form_a_especial`) 
                    VALUES (:form_descricao, :form_especial)");         

            $comandoSQL->execute(array(
                ':form_descricao'   => $form_descricao,
                ':form_especial'  => $form_especial)           
            );

            if($comandoSQL->rowCount() > 0){
                echo("REGISTRO SALVO COM SUCESSO");
                header("location:../view/ViewFuncionario.php"); 
                exit();
            }
            else{
                echo("ERRO: NO CADASTRO.");
            }

        }catch(PDOException $erro)
        {
            echo("ERRO3:".$erro->getCode()."<br>");
            echo("MENSAGEM2: ".$erro->getMessage());
        }

    }else{
        echo("Erro no envio: POST");  
    }
