<?php
    require_once("../../_conexao/conexao.php");

    try{

       /*  $comandoSQL = "SELECT * FROM `funcionario` WHERE Func_i_cod =".$func_cod; */

        $comandoSQL = "SELECT funcionario.Func_i_cod, funcionario.Pess_i_cod, pessoa.Pess_a_nome, funcionario.Func_a_prof, funcionario.Func_a_login FROM `funcionario` inner join `pessoa` on pessoa.Pess_i_cod = funcionario.Pess_i_cod WHERE Func_i_cod =".$func_cod;

        $selecao = $conexao->query($comandoSQL);

        $dados = $selecao->fetchAll(PDO::FETCH_ASSOC);

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
