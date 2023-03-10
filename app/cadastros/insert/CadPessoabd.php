<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    $pess_nome = filter_input(INPUT_POST,'pess_nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pess_cpf = filter_input(INPUT_POST,'pess_cpf', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pess_rg = filter_input(INPUT_POST,'pess_rg', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pess_nasc = filter_input(INPUT_POST,'pess_nasc', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pess_genero = filter_input(INPUT_POST,'pess_genero', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pess_telefone = filter_input(INPUT_POST,'pess_telefone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pess_celular = filter_input(INPUT_POST,'pess_celular', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pess_email = filter_input(INPUT_POST,'pess_email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pess_logra = filter_input(INPUT_POST,'pess_logra', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pess_lognum = filter_input(INPUT_POST,'pess_lognum', FILTER_SANITIZE_NUMBER_INT);
    $pess_bairro = filter_input(INPUT_POST,'pess_bairro', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pess_cep = filter_input(INPUT_POST,'pess_cep', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pess_municipio = filter_input(INPUT_POST,'pess_municipio', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pess_estado = filter_input(INPUT_POST,'pess_estado', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pess_pais = filter_input(INPUT_POST,'pess_pais', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pess_ativo = filter_input(INPUT_POST,'pess_ativo', FILTER_SANITIZE_NUMBER_INT);

    if($pess_ativo == null){
        $pess_ativo = 0;
    }

    require_once("../_conexao/conexao.php");

    try{
        $comandoSQL = $conexao->prepare(
            "INSERT INTO pessoa(Pess_a_nome, Pess_a_logra, Pess_i_lognum, Pess_a_bairro, Pess_a_municipio, Pess_a_estado, Pess_a_pais, Pess_a_cpf, Pess_a_rg, Pess_d_nasc, Pess_a_telefone, Pess_a_celular, Pess_a_email, Pess_a_genero, Pess_a_cep, Pess_i_ativo) 
            VALUES (:pess_nome, :pess_logra, :pess_lognum, :pess_bairro, :pess_municipio, :pess_estado, :pess_pais, :pess_cpf, :pess_rg , :pess_nasc, :pess_telefone, :pess_celular, :pess_email, :pess_genero, :pess_cep, :pess_ativo)");

        $comandoSQL->execute(array(
            ':pess_nome'       => $pess_nome, 
            ':pess_logra'      => $pess_logra, 
            ':pess_lognum'     => $pess_lognum, 
            ':pess_bairro'     => $pess_bairro, 
            ':pess_municipio'  => $pess_municipio, 
            ':pess_estado'     => $pess_estado,
            ':pess_pais'       => $pess_pais,
            ':pess_cpf'        => $pess_cpf,
            ':pess_rg'         => $pess_rg, 
            ':pess_nasc'       => $pess_nasc, 
            ':pess_telefone'   => $pess_telefone,
            ':pess_celular'    => $pess_celular,
            ':pess_email'      => $pess_email,
            ':pess_genero'     => $pess_genero, 
            ':pess_cep'        => $pess_cep,
            ':pess_ativo'      => $pess_ativo
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