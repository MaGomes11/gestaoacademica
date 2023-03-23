<?php
    require_once("../../_conexao/conexao.php");

    try{

        $comandoSQL = "SELECT funcionario.Func_i_cod, funcionario.Pess_i_cod, pessoa.Pess_a_nome, funcionario.Func_a_prof, funcionario.Func_a_login FROM `funcionario` inner join `pessoa` on pessoa.Pess_i_cod = funcionario.Pess_i_cod WHERE Func_i_cod =".$func_cod;

        $selecao = $conexao->query($comandoSQL);

        $dados = $selecao->fetchAll(PDO::FETCH_ASSOC);

        $total = $selecao->rowCount();     

    }catch(PDOException $erro)
    {
        echo("ERRO:".$erro->getCode()."<br>");
        echo("MENSAGEM: ".$erro->getMessage());
    }
