<?php
    require_once("../../_conexao/conexao.php");

    try{

        $comandoSQL = "SELECT Form_i_cod, Form_i_descricao, Form_a_especial
                            FROM `formacao`  
                       WHERE Form_i_cod = ".$form_cod;

        $selecao = $conexao->query($comandoSQL);

        $dados = $selecao->fetchAll(PDO::FETCH_ASSOC);

        $total = $selecao->rowCount();
        
    }catch(PDOException $erro)
    {
        echo("ERRO:".$erro->getCode()."<br>");
        echo("MENSAGEM: ".$erro->getMessage());
    }
