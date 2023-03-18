<?php


   /* 
    echo "<pre>";
    print_r($_POST);
    print_r($_SERVER['REQUEST_METHOD']);
    echo "</pre>"; 
    exit(); 
   */
     
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $func_cod = filter_input(INPUT_POST,'id', FILTER_SANITIZE_NUMBER_INT); 
        $pess_cod = filter_input(INPUT_POST,'pess_cod', FILTER_SANITIZE_NUMBER_INT); 
        $func_prof = filter_input(INPUT_POST,'func_prof', FILTER_SANITIZE_SPECIAL_CHARS); 
        $func_login = filter_input(INPUT_POST,'func_login', FILTER_SANITIZE_SPECIAL_CHARS); 
        $func_senha = filter_input(INPUT_POST,'func_senha', FILTER_SANITIZE_SPECIAL_CHARS); 
        

        require_once("../../_conexao/conexao.php");

        /* echo "<pre>"; 
        echo($esp_descricao."<br>");
        echo "<pre>"; */  

        try{
            $comandoSQL = $conexao->prepare(
                "INSERT INTO funcionario (Func_i_cod, Pess_i_cod, Func_a_prof, Func_a_login, Func_a_senha)     
                    VALUES (:func_cod, :pess_cod, :func_prof, :func_login, :func_senha)");         

            $comandoSQL->execute(array(
                ':func_cod'   => $func_cod,
                ':pess_cod'   => $pess_cod,
                ':func_prof'  => $func_prof,
                ':func_login' => $func_login,
                ':func_senha' => password_hash($func_senha, PASSWORD_DEFAULT)           
            ));

            if($comandoSQL->rowCount() > 0){
                echo("REGISTRO SALVO COM SUCESSO");
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
