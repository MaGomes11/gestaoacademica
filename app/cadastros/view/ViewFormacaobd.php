<?php
    require_once("../../_conexao/conexao.php");

    try{
        
        $comandoSQL = "SELECT formacao.Form_i_cod, formacao.Form_i_descricao, especializacao.Espc_a_descricao FROM `formacao` left JOIN `especializacao` ON especializacao.Espc_i_cod = formacao.Espc_i_cod";

        $selecao = $conexao->query($comandoSQL);

        $dados = $selecao->fetchAll();

        $total = $selecao->rowCount();

    }catch(PDOException $erro){
        echo "ERRO: ".$erro->getMessage();
    }