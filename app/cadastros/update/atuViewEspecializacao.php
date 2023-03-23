<?php
    require_once("../../_conexao/conexao.php");

    try{

        $comandoSQL = "SELECT `Espc_i_cod`, `Espc_a_descricao` FROM `especializacao` WHERE Espc_i_cod = ".$espc_cod;

        $selecao = $conexao->query($comandoSQL);

        $dados = $selecao->fetchAll(PDO::FETCH_ASSOC);

        $total = $selecao->rowCount();
        
    }catch(PDOException $erro)
    {
        echo("ERRO:".$erro->getCode()."<br>");
        echo("MENSAGEM: ".$erro->getMessage());
    }
