<?php

/*
    echo "<pre>";
    print_r($_POST);
    print_r($_SERVER['REQUEST_METHOD']);
    echo "</pre>";
*/ 
 

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $cpf = filter_input(INPUT_POST,'cpf', FILTER_SANITIZE_NUMBER_FLOAT);  
    $rg = filter_input(INPUT_POST,'rg', FILTER_SANITIZE_NUMBER_FLOAT);  
    $nascimento = filter_input(INPUT_POST,'nascimento', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $telefone = filter_input(INPUT_POST,'telefone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $celular = filter_input(INPUT_POST,'celular', FILTER_SANITIZE_NUMBER_FLOAT);
    $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL); 
    $genero = filter_input(INPUT_POST,'genero', FILTER_SANITIZE_FULL_SPECIAL_CHARS);  
    $logradouro = filter_input(INPUT_POST,'logradouro', FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $lognum = filter_input(INPUT_POST,'lognum', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $bairro = filter_input(INPUT_POST,'bairro', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $municipio = filter_input(INPUT_POST,'municipio', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $estado = filter_input(INPUT_POST,'estado', FILTER_SANITIZE_FULL_SPECIAL_CHARS);  
    $pais = filter_input(INPUT_POST,'pais', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   
    
    require_once("../_conexao/conexao.php");
/*
    echo "<pre>";
    echo($nome."<br>");           
    echo($logradouro."<br>");
    echo($lognum."<br>");
    echo($bairro."<br>");
    echo($municipio."<br>");
    echo($estado."<br>");
    echo($pais."<br>");
    echo($cpf."<br>");
    echo($rg."<br>");
    echo($nascimento."<br>");
    echo($telefone."<br>");
    echo($celular."<br>");
    echo($email."<br>");
    echo($genero."<br>");
    echo "</pre>";
*/

                
    try{
        $comandoSQL = $conexao->prepare(
            "INSERT INTO `pessoa`(`Pess_a_nome`,`Pess_a_logra`, `Pess_i_lognum`
                                 ,`Pess_a_bairro`,`Pess_a_municipio`, `Pess_a_estado`, `Pess_a_pais`, `Pess_a_cpf`, `Pess_a_rg`,`Pess_d_nasc`, `Pess_a_telefone`, `Pess_a_celular`, `Pess_a_email`,`Pess_a_genero`)
         VALUES (:nome, :logradouro, :lognum
               , :bairro, :municipio, :estado
               , :pais, :cpf, :rg, :nascimento
               , :telefone, :celular, :email, :genero)");

        $comandoSQL->execute(array(
            ':nome'        => $nome,            
            ':logradouro'  => $logradouro,
            ':lognum'      => $lognum,
            ':bairro'      => $bairro,
            ':municipio'   => $municipio,
            ':estado'      => $estado,
            ':pais'        => $pais,
            ':cpf'         => $cpf,
            ':rg'          => $rg,
            ':nascimento'  => $nascimento,
            ':telefone'    => $telefone,
            ':celular'     => $celular,
            ':email'       => $email,
            ':genero'      => $genero
            
        ));        
        
        if($comandoSQL->rowCount() > 0)
        {
            echo("REGISTRO SALVO COM SUCESSO");
        }
        else
        {
            echo("ERRO: NO CADASTRO.");
        }
    }catch(PDOException $erro)
    {
        echo("ERRO2:".$erro->getCode()."<br>");
        echo("MENSAGEM2: ".$erro->getMessage());
    }
}   
else
{
    echo("Erro no envio: POST");
}


