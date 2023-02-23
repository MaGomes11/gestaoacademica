<?php

/*
    echo "<pre>";
    print_r($_POST);
    print_r($_SERVER['REQUEST_METHOD']);
    echo "</pre>";
*/ 
 

if($_SERVER['REQUEST_METHOD']=='POST')
{

    $tur_codigo = filter_input(INPUT_POST,'tur_codigo', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $tur_descricao = filter_input(INPUT_POST,'tur_descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $tur_curscodigo = filter_input(INPUT_POST,'tur_curscodigo', FILTER_SANITIZE_FULL_SPECIAL_CHARS);     
    $tur_curscodigo = filter_input(INPUT_POST,'tur_curscodigo', FILTER_SANITIZE_FULL_SPECIAL_CHARS);     

    require_once("../_conexao/conexao.php");

   /* echo "<pre>"; 
    echo($cal_codigo."<br>");
    echo($cal_descricao."<br>");
    echo($cal_flag."<br>");
    echo($cal_motivo."<br>");
    echo "<pre>";*/
    
    try{
        $comandoSQL = $conexao->prepare(
                "INSERT INTO `turma`(`Turm_i_cod`, `Turm_a_descricao`, `Curs_i_cod`)
            VALUES (:tur_codigo, :tur_descricao, :tur_curscodigo)");
    
    $comandoSQL->execute(array(
        ':tur_codigo'           => $tur_codigo,
        ':tur_descricao'        => $tur_descricao,
        ':tur_curscodigo'       => $tur_curscodigo
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