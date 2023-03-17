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

    $aul_codigo = filter_input(INPUT_POST,'aul_codigo', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $aul_descricao = filter_input(INPUT_POST,'aul_descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $aul_turmcodigo = filter_input(INPUT_POST,'aul_turmcodigo', FILTER_SANITIZE_FULL_SPECIAL_CHARS);     
    $aul_profcodigo = filter_input(INPUT_POST,'aul_profcodigo', FILTER_SANITIZE_FULL_SPECIAL_CHARS);     
    $aul_discodigo = filter_input(INPUT_POST,'aul_discodigo', FILTER_SANITIZE_FULL_SPECIAL_CHARS);     

    require_once("../_conexao/conexao.php");

   /* echo "<pre>"; 
    echo($cal_codigo."<br>");
    echo($cal_descricao."<br>");
    echo($cal_flag."<br>");
    echo($cal_motivo."<br>");
    echo "<pre>";*/
    
    try{
        $comandoSQL = $conexao->prepare(
                "INSERT INTO `aula`(`Aula_i_cod`, `Turm_i_cod`, `Aula_a_descricao`, `Func_i_cod`, `Disc_i_cod`) 
            VALUES (:aul_codigo, :aul_turmcodigo,:aul_descricao, :aul_profcodigo, :aul_discodigo)");
    
    $comandoSQL->execute(array(
        ':aul_codigo'           => $aul_codigo,
        ':aul_descricao'        => $aul_descricao,
        ':aul_turmcodigo'       => $aul_turmcodigo,
        ':aul_profcodigo'       => $aul_profcodigo,
        ':aul_discodigo'       => $aul_discodigo
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