<?php
    require_once("../../_conexao/conexao.php");

    try{

        $comandoSQL = "SELECT `Disc_i_cod`, `Disc_a_descricao`, `Disc_a_ativo` FROM `disciplina`WHERE Disc_i_cod = ".$disc_cod;

        $selecao = $conexao->query($comandoSQL);

        $dados = $selecao->fetchAll(PDO::FETCH_ASSOC);

        $total = $selecao->rowCount();
        
    }catch(PDOException $erro)
    {
        echo("ERRO:".$erro->getCode()."<br>");
        echo("MENSAGEM: ".$erro->getMessage());
    }
