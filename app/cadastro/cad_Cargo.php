<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cargo</title>
</head>
<body>
    <div class="titulo">
        <h1>Cadastro de Cargo</h1>
    </div> 
    <form action="cad_Cargobd.php" method="POST">
        <fieldset>
            <div class="campo">
                <div class="subcampo">
                    <label for="car_codigo" class="label">Código :</label>
                    <input type="text" id="car_codigo" name="car_codigo">
                </div>
                <div class="subcampo">
                    <label for="car_descricao" class="label">Descrição :</label>
                    <input type="text" id="car_descricao" name="car_descricao">
                </div>
                <div class="campo" id="option">
                    <label for="car_flag" class="label">Situação  :</label>
                    <select id="car_flag" id="car_flag" name="car_flag" required>
                        <option selected disabled value="">Selecione</option>
                        <option value="T">Ativo</option>
                        <option value="F">Inativo</option>
                    </select>
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