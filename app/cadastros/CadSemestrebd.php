<?php
  
  if($_SERVER['REQUEST_METHOD']=='POST'){

    $seme_ano = filter_input(INPUT_POST,'seme_ano', FILTER_SANITIZE_NUMBER_INT);
    $seme_sequencia = filter_input(INPUT_POST,'seme_sequencia', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $seme_descricao = filter_input(INPUT_POST,'seme_descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    require_once("../_conexao/conexao.php");

    try{
        $comandoSQL = $conexao->prepare(
            "INSERT INTO semestre(Seme_i_sequencia, Seme_i_ano, Seme_a_descricao) 
            VALUES (:seme_sequencia, :seme_ano, :seme_descricao)");

        $comandoSQL->execute(array(
            ':seme_sequencia'  => $seme_sequencia, 
            ':seme_ano'        => $seme_ano, 
            ':seme_descricao'  => $seme_descricao, 
        )); 
        
        if($comandoSQL->rowCount() > 0){
            echo("REGISTRO SALVO COM SUCESSO");
        }
        else{
            echo("ERRO: NO CADASTRO.");
        }

    }catch(PDOException $erro)
    {
        echo("ERRO2:".$erro->getCode()."<br>");
        echo("MENSAGEM2: ".$erro->getMessage());
    }

}else{
    echo("Erro no envio: POST");  
}

