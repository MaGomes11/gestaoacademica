<?php
/*
  echo "<pre>";
    print_r($_POST);
    print_r($_SERVER['REQUEST_METHOD']);
  echo "</pre>";
*/

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $Confh_codigo= filter_input(INPUT_POST,'Confh_codigo', FILTER_SANITIZE_NUMBER_INT);
    $Confh_hori = filter_input(INPUT_POST,'Confh_hori', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Confh_horf = filter_input(INPUT_POST,'Confh_horf', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Confh_diasem = filter_input(INPUT_POST,'Confh_diasem', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    require_once("../_conexao/conexao.php");

    try{
        $comandoSQL = $conexao->prepare(
            "INSERT INTO `horario_confi`(`Confh_i_codigo`, `Confh_t_horini`, `Confh_t_horfin`, `Confh_i_diasem`) 
        VALUES (:Confh_codigo, :Confh_hori, :Confh_horf, :Confh_diasem)");

        $comandoSQL->execute(array(
           'Confh_codigo'   =>  $Confh_codigo,
           'Confh_hori'     =>  $Confh_hori,
           'Confh_horf'     =>  $Confh_horf,
           'Confh_diasem'   =>  $Confh_diasem
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