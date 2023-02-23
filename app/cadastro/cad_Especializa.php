<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Especialização</title>
</head>
<body>
    <div class="titulo">
        <h1>Cadastro de Especialização</h1>
    </div> 
    <form action="cad_Especializabd.php" method="POST"> 
        <fieldset>
            <div class="campo">
                <div class="subcampo">
                    <label for="esp_codigo" class="label">Código :</label>
                    <input type="text" id="esp_codigo" name="esp_codigo">
                </div>
                <div class="subcampo">
                    <label for="esp_descricao" class="label">Descrição :</label>
                    <input type="text" id="esp_descricao" name="esp_descricao">
                </div>
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