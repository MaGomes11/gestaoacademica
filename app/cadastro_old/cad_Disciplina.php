<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Disciplina</title>
</head>
<body>
    <div class="titulo">
        <h1>Cadastro de Disciplina</h1>
    </div>
    <form action="cad_Disciplinabd.php" method="POST">
        <fieldset>
            <div class="campo">
                <label for="dis_codigo" class="label">Código :</label> 
                <input type="text" id="dis_codigo" name="dis_codigo">  
            </div>
            <div class="campo">
                <label for="dis_descricao" class="label">Descrição :</label> 
                <input type="text" id="dis_descricao" name="dis_descricao">  
            </div>
            <div class="campo" id="option">
                <label for="dis_ativo" class="label">Situação  :</label>
                <select id="dis_ativo" id="dis_ativo" name="dis_ativo" required>
                    <option selected disabled value="">Selecione</option>
                    <option value="T">Ativo</option>
                    <option value="F">Inativo</option>
                </select>
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