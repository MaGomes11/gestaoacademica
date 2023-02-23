<?php

/*
    echo "<pre>";
    print_r($_POST);
    print_r($_SERVER['REQUEST_METHOD']);
    echo "</pre>";
*/ 
 

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $mot_codigo = filter_input(INPUT_POST,'mot_codigo', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $mot_descricao = filter_input(INPUT_POST,'mot_descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 

    require_once("../_conexao/conexao.php");

    echo "<pre>";
    echo($mot_codigo."<br>");  
    echo($mot_descricao."<br>");
    echo "<pre>";
    
    try{
        $comandoSQL = $conexao->prepare(
                "INSERT INTO `motivo`(`Motv_i_cod`, `Motv_a_descricao`) 
            VALUES (:mot_codigo, :mot_descricao)");
    
    $comandoSQL->execute(array(
        ':mot_codigo'        => $mot_codigo,
        ':mot_descricao'     => $mot_descricao));
        if($comandoSQL->rowCount() > 0)
        {
            echo("REGISTRO SALVO COM SUCESSO");
        }
        else
        {
            echo("ERRO: NO CADASTRO.");
        }
    }catch(PDOException $erro)
    {
        echo("ERRO2:".$erro->getCode()."<br>");
        echo("MENSAGEM2: ".$erro->getMessage());
    }
}   
else
{
    echo("Erro no envio: POST");
}    