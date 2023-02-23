<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
</head>
<body>
    <div class="titulo">
        <h1>Cadastro de Pessoa</h1>
    </div> 
    <form action="cad_Pessoabd.php" method="POST">
        <fieldset>
            <div class="campo">
                <label for="nome" class="label">Nome :</label>
                <input type="text" id="nome" name="nome">
            </div>
            <div class="campo">
                <div class="subcampo">
                    <label for="cpf" class="label">Cpf :</label>
                    <input type="number" id="cpf" name="cpf">
                    <label for="rg" class="label">Rg :</label>
                    <input type="number" id="rg" name="rg">
                </div>
                <div class="subcampo">
                    <label for="nascimento" class="label">Data de Nascimento :</label>
                    <input type="date" id="nascimento" name="nascimento">
                </div>                
            </div>
            <div class="campo">
                <div class="subcampo">
                    <label for="telefone" class="label">Telefone :</label>
                    <input type="number" id="telefone" name="telefone">
                    <label for="celular" class="label">Celular :</label>
                    <input type="number" id="celular" name="celular">
                </div>               
            </div>
            <div class="campo">
                <label for="email" class="label">Email :</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="campo">
            <label for="genero" class="label">Sexo :</label>
                <select id="genero" name="genero" required>
                <option selected disabled value="">Selecione</option>
                <option>Masculino</option>
                <option>Feminino</option>
                </select>
            </div>
        </fieldset>
        <fieldset>
            <div class="campo">
                <label for="logradouro" class="label">Logadouro :</label>
                <input type="text" id="logradouro" name="logradouro">    
            </div>
            <div class="campo">
                <label for="lognum" class="label">Número :</label>
                <input type="text" id="lognum" name="lognum">    
            </div>
            <div class="campo">
                <label for="bairro" class="label">Bairro :</label>
                <input type="text" id="bairro" name="bairro">    
            </div>
            <div class="campo">
                <div class="subcampo">
                    <label for="municipio" class="label">Municipio :</label>
                    <input type="text" id="municipio" name="municipio"> 
                </div> 
                <div class="subcampo">
                    <label for="estado" class="label">Estado :</label>
                    <input type="text" id="estado" name="estado"> 
                </div>
                <div class="subcampo">
                    <label for="pais" class="label">Pais :</label>
                    <input type="text" id="pais" name="pais"> 
                </div>                   
            </div>
        </fieldset>
        <fieldset>
            <div class="botao">
                <input type="submit" value="C A D A S T R A R">
                <input type="reset" value="Limpar">
            </div>
        </fieldset>
    </form>  
</body>
</html>