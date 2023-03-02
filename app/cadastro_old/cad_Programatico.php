<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Conteúdo Programático</title>
</head>
<body>
    <div class="titulo">
        <h1>Cadastro de Conteúdo Programático</h1>
    </div>
    <form action="cad_Programaticobd.php" method="POST">
        <fieldset>
            <div class="campo">
                <label for="prog_codigo" class="label">Código :</label> 
                <input type="text" id="prog_codigo" name="prog_codigo">  
            </div>
            <div class="campo">
                <label for="prog_descricao" class="label">Descrição :</label> 
                <input type="text" id="prog_descricao" name="prog_descricao">  
            </div>
            <div class="campo">
                <label for="prog_conteudo" class="label">Conteúdo :</label> 
                <textarea id="prog_conteudo" name="prog_conteudo" rows="4" cols="50"></textarea>"  
            </div>
            <div class="campo">
                <label for="prog_coddiscp" class="label">Descrição :</label> 
                <input type="text" id="prog_coddiscp" name="prog_coddiscp" class="codigo">  
                <input type="text" id="prog_desdiscp" name="prog_desdiscp" class="descricao">  
            </div>
            <div class="campo">
                <label for="prog_codsemest" class="label">Descrição :</label> 
                <input type="text" id="prog_codsemest" name="prog_codsemest" class="codigo">  
                <input type="text" id="prog_descsemest" name="prog_descsemest" class="descricao">  
            </div>
        </fieldset>
        <fieldset>
            <div class="botao">
                <input type="submit" value="Cadastrar">
                <input type="reset" value="Limpar">
            </div>
        </fieldset>
    </form>   
</body>
</html>