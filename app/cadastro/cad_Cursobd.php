<?php

/*
    echo "<pre>";
    print_r($_POST);
    print_r($_SERVER['REQUEST_METHOD']);
    echo "</pre>";
*/ 
 /*	Curs_i_duracao*/

if($_SERVER['REQUEST_METHOD']=='POST')
{

    $cur_codigo = filter_input(INPUT_POST,'cur_codigo', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $cur_descricao = filter_input(INPUT_POST,'cur_descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $cur_flag = filter_input(INPUT_POST,'cur_flag', FILTER_SANITIZE_FULL_SPECIAL_CHARS);     
    $cur_duracao = filter_input(INPUT_POST,'cur_duracao', FILTER_SANITIZE_FULL_SPECIAL_CHARS);     

    require_once("../_conexao/conexao.php");

   /* echo "<pre>"; 
    echo($cal_codigo."<br>");
    echo($cal_descricao."<br>");
    echo($cal_flag."<br>");
    echo($cal_motivo."<br>");
    echo "<pre>";*/
    
    try{
        $comandoSQL = $conexao->prepare(
                "INSERT INTO `curso`(`Curs_i_cod`, `Curs_a_descricao`, `Curs_i_duracao`, `Curs_a_flag`) 
            VALUES (:cur_codigo, :cur_descricao, :cur_duracao, :cur_flag)");
    
    $comandoSQL->execute(array(
        ':cur_codigo'           => $cur_codigo,
        ':cur_descricao'        => $cur_descricao,
        ':cur_flag'             => $cur_flag,
        ':cur_duracao'          => $cur_duracao
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