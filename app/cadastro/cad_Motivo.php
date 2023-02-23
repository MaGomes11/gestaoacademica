<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Motivo</title>
</head>
<body>
    <div class="titulo">
        <h1>Cadastro de Motivo</h1>
    </div> 
    <form action="cad_Motivobd.php" method="POST">
        <fieldset>
            <div class="campo">
                <div class="subcampo">
                    <label for="mot_codigo" class="label">Código :</label>
                    <input type="text" id="mot_codigo" name="mot_codigo">
                </div>
                <div class="subcampo">
                    <label for="mot_descricao" class="label">Descrição :</label>
                    <input type="text" id="mot_descricao" name="mot_descricao">
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