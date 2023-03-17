<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $foto = filter_input(INPUT_POST, 'fotobd', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        //--------------------------------------------------
        $fotobd = filter_input(INPUT_POST, 'fotobd', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        //--------------------------------------------------
        
        if (!empty($_FILES['foto']['name'])) {        
            
            // diretório que será armazenado todas as imagens enviadas pelos usuários
            $dir_imagens = "./imagens/"; 
    
            // pegando o nome do arquivo e se houver espaço em branco substituir por underline
            $nome_original = 
            str_replace(" ", "_", basename($_FILES["foto"]["name"]));
           
            // criar um token/chave exclusivo e para finalizar faz a 
            // criptografia usando o MD5
            // que gera uma sequência de 32 caracteres.
            $token = md5(uniqid(rand(), true));    
    
            // nome_final é a junção das váriáveis de 
            //diretório+token+nome_original
            //--------------------------------------------------
            $nome_final = $dir_imagens.$token."_".$nome_original;
            //--------------------------------------------------
            
            // A variável Flag é usada para sinalizar que está 
            // tudo ok quando valer 1
            $flag = 1;
    
            //verifica o tamanho do arquivo temporário e se for 
            // maior que 0 está ok
            if(!getimagesize($_FILES["foto"]["tmp_name"])){
                $flag = 0;
            }
            
            if($_FILES["foto"]["size"] > 2000000){
                $flag = 0;
            }  
    
            // strtolower converte todos os caracteres 
            // de um texto/variável para minúsculo
            // pathinfo retorna a extensão do arquivo
            $extensao = strtolower(pathinfo($nome_final, PATHINFO_EXTENSION)); 
    
            // teste para validar a extensão do arquivo.
            if(($extensao != "jpg") && ($extensao != "png") && 
               ($extensao != "jpeg") && ($extensao != "gif")){
                $flag = 0;
            }
    
            if($flag == 1){        
                // a variável foto terá seu conteúdo gravado no 
                // BD com o token+nome_original
                //--------------------------------------------------
                $foto = $token."_".$nome_original;  
                //--------------------------------------------------
            }
            else
            {
                $foto = "sem-foto.jpg";
            }
    
        }
        else{
            $flag = 0;       
        }

        $id = filter_input(INPUT_POST,"id",FILTER_SANITIZE_NUMBER_INT);

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $endereco = filter_input(INPUT_POST,'endereco', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $telefone = filter_input(INPUT_POST,'telefone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST,'senha1', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $nivel = filter_input(INPUT_POST,'nivel', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $status = filter_input(INPUT_POST,'status', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        require_once("../_conexao/conexao.php");

        if($senha != "********"){
            $comandoSQL = $conexao->prepare("UPDATE `login` SET 
                `nomeLogin`=:nome, `enderecoLogin`=:endereco,
                `telefoneLogin`=:telefone, `emailLogin`=:email,
                `senhaLogin`=:senha, `nivelLogin`=:nivel, `statusLogin`=:status,
                `fotoLogin`=:foto WHERE `idLogin`=:id
            ");

            $comandoSQL->execute(array(
                ':id'        => $id,
                ':nome'      => $nome,
                ':endereco'  => $endereco,
                ':telefone'  => $telefone,
                ':email'     => $email,
                ':senha'     => password_hash($senha, PASSWORD_DEFAULT),
                ':nivel'     => $nivel,
                ':status'    => $status,
                ':foto'      => $foto
            ));
        }
        else{
            $comandoSQL = $conexao->prepare("UPDATE `login` SET 
                `nomeLogin`=:nome, `enderecoLogin`=:endereco,
                `telefoneLogin`=:telefone, `emailLogin`=:email,
                `nivelLogin`=:nivel, `statusLogin`=:status,
                `fotoLogin`=:foto WHERE `idLogin`=:id
            ");

            $comandoSQL->execute(array(
                ':id'        => $id,
                ':nome'      => $nome,
                ':endereco'  => $endereco,
                ':telefone'  => $telefone,
                ':email'     => $email,
                ':nivel'     => $nivel,
                ':status'    => $status,
                ':foto'      => $foto
            ));
        }

        if($comandoSQL->rowCount() > 0){

            if($flag == 1){                 
                //o move_uploaded_file pega o nome do arquivo 
                // temporário e grava na pasta do servidor
                move_uploaded_file($_FILES["foto"]["tmp_name"], $nome_final);
                //--------------------------------------------------
                // unlink é o comando para excluir um arquivo
                unlink($dir_imagens.$fotobd);
                //--------------------------------------------------
            }

            // echo("SUCESSO NA ATUALIZACAO");
            header("location:./view_login.php");
            exit();
        }
        else{
            echo("ERRO NA ATUALIZACAO");
        }

    }
    else{
        header("location:./view_login.php");
        exit();
    }