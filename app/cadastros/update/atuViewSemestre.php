<?php
    require_once("../../_conexao/conexao.php");

    try{
        
        $comandoSQL = "SELECT Seme_i_cod, Seme_i_sequencia, Seme_i_ano, Seme_a_descricao FROM semestre WHERE Seme_i_cod = ".$seme_cod;

        $selecao = $conexao->query($comandoSQL);

        $dados = $selecao->fetchAll(PDO::FETCH_ASSOC);

        $total = $selecao->rowCount();
        
    }catch(PDOException $erro)
    {
        echo("ERRO:".$erro->getCode()."<br>");
        echo("MENSAGEM: ".$erro->getMessage());
    }
