<?php
    require_once("../_conexao/conexao.php");

    try{

        $comandoSQL = "SELECT * FROM `login` WHERE idLogin =".$id;

        $selecao = $conexao->query($comandoSQL);

        $dados = $selecao->fetchAll(PDO::FETCH_ASSOC);

        $total = $selecao->rowCount();
        
        
        /*
        $comandoSQL = $conexao->prepare("SELECT * FROM login WHERE idLogin = :id");
        $comandoSQL->bindValue(":id", $id, PDO::PARAM_INT);
		$comandoSQL->execute();
		$dados = $comandoSQL->fetch(PDO::FETCH_ASSOC);
        */

    }catch(PDOException $erro)
    {
        echo("ERRO:".$erro->getCode()."<br>");
        echo("MENSAGEM: ".$erro->getMessage());
    }

  