<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Curso</title>
</head>
<body>
    <div class="titulo">
        <h1>Cadastro de Curso</h1>
    </div>
    <form action="cad_Cursobd.php" method="POST">
        <fieldset>
            <div class="campo">
                <label for="cur_codigo" class="label">Código :</label> 
                <input type="text" id="cur_codigo" name="cur_codigo">  
            </div>
            <div class="campo">
                <label for="cur_descricao" class="label">Descrição :</label> 
                <input type="text" id="cur_descricao" name="cur_descricao">  
            </div>
            <div class="campo">
                <label for="cur_duracao" class="label">Duracao :</label> 
                <input type="number" id="cur_duracao" name="cur_duracao">  
            </div>
            <div class="campo" id="option">
                <label for="cur_flag" class="label">Situação  :</label>
                <select id="cur_flag" id="cur_flag" name="cur_flag" required>
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

