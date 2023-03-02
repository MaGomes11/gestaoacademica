<?php

/*
    echo "<pre>";
    print_r($_POST);
    print_r($_SERVER['REQUEST_METHOD']);
    echo "</pre>";
*/ 
 

if($_SERVER['REQUEST_METHOD']=='POST')
{

    $dis_codigo = filter_input(INPUT_POST,'dis_codigo', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $dis_descricao = filter_input(INPUT_POST,'dis_descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $dis_ativo = filter_input(INPUT_POST,'dis_ativo', FILTER_SANITIZE_FULL_SPECIAL_CHARS);     

    require_once("../_conexao/conexao.php");

   /* echo "<pre>"; 
    echo($cal_codigo."<br>");
    echo($cal_descricao."<br>");
    echo($cal_flag."<br>");
    echo($cal_motivo."<br>");
    echo "<pre>";*/
    
    try{
        $comandoSQL = $conexao->prepare(
                "INSERT INTO `disciplina`(`Disc_i_cod`, `Disc_a_descricao`, `Disc_a_ativo`)
            VALUES (:dis_codigo, :dis_descricao, :dis_ativo)");
    
    $comandoSQL->execute(array(
        ':dis_codigo'           => $dis_codigo,
        ':dis_descricao'        => $dis_descricao,
        ':dis_ativo'            => $dis_ativo
    ));
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