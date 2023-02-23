<?php

/*
    echo "<pre>";
    print_r($_POST);
    print_r($_SERVER['REQUEST_METHOD']);
    echo "</pre>";
*/ 
 

if($_SERVER['REQUEST_METHOD']=='POST')
{

    $car_descricao = filter_input(INPUT_POST,'car_descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $car_flag = filter_input(INPUT_POST,'car_flag', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    

    require_once("../_conexao/conexao.php");

    echo "<pre>"; 
    echo($car_descricao."<br>");
    echo($car_flag."<br>");
    echo "<pre>";
    
    try{
        $comandoSQL = $conexao->prepare(
                "INSERT INTO `cargo`(`Cargo_a_descricao`,`Cargo_a_Ativo`)
            VALUES (:car_descricao, :car_flag)");
    
    $comandoSQL->execute(array(
        ':car_descricao'        => $car_descricao,
        ':car_flag'             => $car_flag
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