<?php
/*
  echo "<pre>";
    print_r($_POST);
    print_r($_SERVER['REQUEST_METHOD']);
  echo "</pre>";
*/

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $codigo_pes= filter_input(INPUT_POST,'codigo_pes', FILTER_SANITIZE_NUMBER_INT);
    $prof = filter_input(INPUT_POST,'prof', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $login = filter_input(INPUT_POST,'login', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST,'senha1', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    require_once("../_conexao/conexao.php");

    echo "<pre>";
    echo($codigo_pes."<br>");
    echo($prof."<br>");
    echo($login."<br>");
    echo($senha."<br>");

    try{
        $comandoSQL = $conexao->prepare(
            "INSERT INTO `funcionario`(`Pess_i_cod`, `Func_a_prof`, `Func_a_login`, `Func_a_senha`) 
        VALUES (:codigo_pes, :prof, :login, :senha)");

        $comandoSQL->execute(array(
           'codigo_pes'   =>  $codigo_pes,
           'prof'         =>  $prof,
           'login'        =>  password_hash($login,PASSWORD_DEFAULT),
           'senha'        =>  $senha
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