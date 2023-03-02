<?php

/*
    echo "<pre>";
    print_r($_POST);
    print_r($_SERVER['REQUEST_METHOD']);
    echo "</pre>";
*/ 
 

if($_SERVER['REQUEST_METHOD']=='POST')
{

    $cal_codigo = filter_input(INPUT_POST,'cal_codigo', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $cal_descricao = filter_input(INPUT_POST,'cal_descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $cal_flag = filter_input(INPUT_POST,'cal_flag', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $cal_motivo = filter_input(INPUT_POST,'cal_motivo', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    

    require_once("../_conexao/conexao.php");

    echo "<pre>"; 
    echo($cal_codigo."<br>");
    echo($cal_descricao."<br>");
    echo($cal_flag."<br>");
    echo($cal_motivo."<br>");
    echo "<pre>";
    
    try{
        $comandoSQL = $conexao->prepare(
                "INSERT INTO `calendario`(`Cale_d_data`, `Cale_i_descricao`,
                             `Cale_a_ativo`, `Cale_a_motivo`) 
            VALUES (:cal_codigo, :cal_descricao, :cal_flag, :cal_motivo)");
    
    $comandoSQL->execute(array(
        ':cal_codigo'           => $cal_codigo,
        ':cal_descricao'        => $cal_descricao,
        ':cal_flag'             => $cal_flag,
        ':cal_motivo'           => $cal_motivo
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