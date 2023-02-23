<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Turma</title>
</head>
<body>
    <div class="titulo">
        <h1>Cadastro de Turma</h1>
    </div>
    <form action="cad_Turmabd.php" method="POST">
        <fieldset>
            <div class="campo">
                <label for="tur_codigo" class="label">Código :</label> 
                <input type="text" id="tur_codigo" name="tur_codigo">  
            </div>
            <div class="campo">
                <label for="tur_descricao" class="label">Descrição :</label> 
                <input type="text" id="tur_descricao" name="tur_descricao">  
            </div>
            <div class="campo">
                <label for="tur_curscodigo" class="label">Código Curso :</label> 
                <input type="text" id="tur_curscodigo" name="tur_curscodigo">  
            </div>
            <div class="campo">
                <label for="tur_cursdesc" class="label">Descrição :</label> 
                <input type="text" id="tur_cursdesc" name="tur_cursdesc">  
            </div>
            <div class="campo">
                <label for="tur_registro" class="label">Descrição :</label> 
                <input type="text" id="tur_registro" name="tur_registro">  
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