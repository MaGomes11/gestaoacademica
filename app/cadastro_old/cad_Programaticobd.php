<?php

/*
    echo "<pre>";
    print_r($_POST);
    print_r($_SERVER['REQUEST_METHOD']);
    echo "</pre>";
*/ 
 

if($_SERVER['REQUEST_METHOD']=='POST')
{

    $prog_codigo = filter_input(INPUT_POST,'prog_codigo', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $prog_descricao = filter_input(INPUT_POST,'prog_descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $prog_conteudo = filter_input(INPUT_POST,'prog_conteudo', FILTER_SANITIZE_FULL_SPECIAL_CHARS);     
    $prog_coddiscp = filter_input(INPUT_POST,'prog_coddiscp', FILTER_SANITIZE_FULL_SPECIAL_CHARS);     
    $prog_codsemest = filter_input(INPUT_POST,'prog_codsemest', FILTER_SANITIZE_FULL_SPECIAL_CHARS);     

    require_once("../_conexao/conexao.php");

   /* echo "<pre>"; 
    echo($cal_codigo."<br>");
    echo($cal_descricao."<br>");
    echo($cal_flag."<br>");
    echo($cal_motivo."<br>");
    echo "<pre>";*/
    
    try{
        $comandoSQL = $conexao->prepare(
                "INSERT INTO `conteudoprogramtico`(`Prog_i_cod`, `Prog_a_descricao`, `Prog_a_conteudo`, `Disc_i_cod`, `Seme_i_cod`) 
            VALUES (:prog_codigo, :prog_descricao, :prog_conteudo, :prog_coddiscp, :prog_codsemest)");
    
    $comandoSQL->execute(array(
        ':prog_codigo'           => $prog_codigo,
        ':prog_descricao'        => $prog_descricao,
        ':prog_conteudo'         => $prog_conteudo,
        ':prog_coddiscp'         => $prog_coddiscp,
        ':prog_codsemest'        => $prog_codsemest
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