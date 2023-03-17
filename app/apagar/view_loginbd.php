<?php
    require_once("../_conexao/conexao.php");

    try{
        
        $comandoSQL = "SELECT * FROM login";

        $selecao = $conexao->query($comandoSQL);

        $dados = $selecao->fetchAll();

        $total = $selecao->rowCount();

    }catch(PDOException $erro){
        echo "ERRO: ".$erro->getMessage();
    }