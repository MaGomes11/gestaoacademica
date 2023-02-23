<?php

/*
    echo "<pre>";
    print_r($_POST);
    print_r($_SERVER['REQUEST_METHOD']);
    echo "</pre>";
*/ 
 

if($_SERVER['REQUEST_METHOD']=='POST')
{

    $men_aluno = filter_input(INPUT_POST,'men_aluno', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $men_aula = filter_input(INPUT_POST,'men_aula', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $men_descricao = filter_input(INPUT_POST,'men_descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $men_flag = filter_input(INPUT_POST,'men_flag', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $men_nota = filter_input(INPUT_POST,'men_nota', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 

    require_once("../_conexao/conexao.php");

    echo "<pre>"; 
    echo($men_aluno."<br>");
    echo($men_aula."<br>");
    echo($men_descricao."<br>");
    echo($men_flag."<br>");
    echo($men_nota."<br>");
    echo "<pre>";
    
    try{
        $comandoSQL = $conexao->prepare(
                "INSERT INTO `mensao`(  `Mens_a_descricao`,
                             `Mens_a_flag`, `Alun_i_cod`, `Aula_i_cod`,
                             `Nota_i_cod`)
            VALUES (:men_aluno, :men_descricao, :men_flag
                    :men_aluno, :men_aula, :men_nota)");
    
    $comandoSQL->execute(array(
        ':men_aluno'        => $men_aluno,
        ':men_descricao'    => $men_descricao,
        ':men_flag'         => $men_flag,
        ':men_aluno'        => $men_aluno,
        ':men_aula'         => $men_aula,
        ':men_nota'         => $men_nota
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