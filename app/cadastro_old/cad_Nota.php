<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Nota</title>
</head>
<body>
    <div class="titulo">
        <h1>Cadastro de Nota</h1>
    </div>
    <form action="cad_Notabd.php" method="POST">
        <fieldset>
            <div class="campo">
                <label for="not_codigo" class="label">Código :</label> 
                <input type="text" id="not_codigo" name="not_codigo">  
            </div>
            <div class="campo">
                <label for="not_descricao" class="label">Descrição :</label> 
                <input type="text" id="not_descricao" name="not_descricao">  
            </div>
            <div class="campo">
                <label for="tur_curscodigo" class="label">Código Curso :</label> 
                <input type="text" id="tur_curscodigo" name="tur_curscodigo">  
            </div>
            <div class="campo">
                <label for="not_peso" class="label">Peso :</label> 
                <input type="text" id="not_peso" name="not_peso">                  
            </div>
            <div class="radio">                 
                <input type="radio" id="not_aprovado" name="not_aprovado">
                <label for="not_aprov" class="label">Aprovado</label> 
                <input type="radio" id="not_reprov" name="not_aprovado">
                <label for="not_reprov" class="label">Reprovado</label> 
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