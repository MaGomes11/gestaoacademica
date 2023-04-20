<?php
    require_once("../../_conexao/conexao.php");

    try{
        
        $comandoSQL = "SELECT `Form_i_cod`, `Form_i_descricao`, `Form_a_especial` FROM `formacao` WHERE 1";

        $selecao = $conexao->query($comandoSQL);

        $dados = $selecao->fetchAll();

        $total = $selecao->rowCount();

    }catch(PDOException $erro){
        echo "ERRO: ".$erro->getMessage();
    }