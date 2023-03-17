<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário</title>
</head>
<body>
    <div class="titulo">
        <h1>Calendário</h1>
    </div>
    <form action="cad_Calendariobd.php" method="POST">
        <fieldset>
            <div class="campo">
                <label for="cal_codigo" class="label">Data :</label> 
                <input type="date" id="cal_codigo" name="cal_codigo">  
            </div>
            <div class="campo">
                <label for="cal_descricao" class="label">Descrição :</label> 
                <input type="text" id="cal_descricao" name="cal_descricao">  
            </div>
            <div class="campo" id="option">
                <label for="cal_flag" class="label">Situação  :</label>
                <select id="cal_flag" id="cal_flag" name="cal_flag" required>
                    <option selected disabled value="">Selecione</option>
                    <option value="T">Ativo</option>
                    <option value="F">Inativo</option>
                </select>
            </div>
            <div class="campo">
                <label for="cal_motivo" class="label">Motivo :</label> 
                <input type="text" id="cal_motivo" name="cal_motivo">  
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