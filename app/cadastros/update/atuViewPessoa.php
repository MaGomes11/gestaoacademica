<?php
    require_once("../../_conexao/conexao.php");

    try{

        $comandoSQL = "SELECT * FROM `pessoa` WHERE Pess_i_cod =".$pess_cod;

        $selecao = $conexao->query($comandoSQL);

        $dados = $selecao->fetch(PDO::FETCH_ASSOC);

        $total = $selecao->rowCount();
        
        
        
       /*  $comandoSQL = $conexao->prepare("SELECT * FROM pessoa WHERE Pess_i_cod = :pess_cod");
        $comandoSQL->bindValue(":pess_cod", $pess_cod, PDO::PARAM_INT);
		$comandoSQL->execute();
		$dados = $comandoSQL->fetch(PDO::FETCH_ASSOC); */  
    

    }catch(PDOException $erro)
    {
        echo("ERRO:".$erro->getCode()."<br>");
        echo("MENSAGEM: ".$erro->getMessage());
    }
