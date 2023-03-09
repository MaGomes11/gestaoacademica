<?php
    $_dns = "mysql:host=localhost;dbname=tcc_escola";
    $_usuario = "root";
    $_senha = "";

    try{
        $conexao = new PDO($_dns, $_usuario, $_senha);

    
        /* echo "conectado!"; */
        
      /*  $stmt = $conexao->query("SELECT * FROM especializacao");
        while($linha = $stmt->fetch()){
            echo $linha['nomeLogin']."<br>";
        } */
    
    }catch(PDOException $erro){
        echo "ERRO1: ".$erro->getCode()."<br>"."<br>";
        echo "Mensagem1: ". $erro->getMessage();

        echo "Procure o Administrador do Sistema.";

    }

