<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Mensão</title>
</head>
<body>
    <div class="titulo">
        <h1>Cadastro de Mensão</h1>
    </div>   
    <form action="cad_Mensaobd.php" method="POST">
        <fieldset>
            <div class="campo">
                <label for="men_codigo" class="label">Codigo :</label>
                <input type="text" id="men_codigo" name="men_codigo">
            </div>
            <div class="campo">
                <label for="men_aluno" class="label">Aluno :</label>
                <input type="text" id="men_aluno" name="men_aluno">
                <input type="text" id="men_al_des" name="men_al_des">
            </div>
            <div class="campo">
                <label for="men_aula" class="label">Aluno :</label>
                <input type="text" id="men_aula" name="men_aula">
                <input type="text" id="men_au_des" name="men_au_des">
            </div>
            <div class="campo">
                <label for="men_descricao" class="label">Descrição :</label>
                <input type="text" id="men_descricao" name="men_descricao">
            </div>
            <div class="campo" id="option">
                <label for="men_flag" class="label">Tipo  :</label>
                <select id="men_flag" id="men_flag" name="men_flag" required>
                    <option selected disabled value="">Selecione</option>
                    <option value="P">Prova</option>
                    <option value="T">Tabalho</option>
                    <option value="O">Outro</option>
                </select>
            </div>
            <div class="campo">
                <label for="men_nota" class="label">Nota :</label>
                <input type="text" id="men_nota" name="men_nota">
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