<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Configuração de horarios</title>
</head>
<body>
    <div>
        <h1>Cadastro de Configuração de horarios</h1>
    </div> 
    <form action="cad_Horarioconfibd.php" method="POST">
        <fieldset>
            <div class="campo">
                <label for="Confh_codigo" class="label">Código :</label>
                <input type="text" id="Confh_codigo" name="Confh_codigo">
            </div>
            <div class="campo">
                <label for="Confh_hori" class="label">Horario Inicial :</label>
                <input type="time" id="Confh_hori" name="Confh_hori">
            </div>
            <div class="campo">
                <label for="Confh_horf" class="label">Horario Final :</label>
                <input type="time" id="Confh_horf" name="Confh_horf">
            </div>
            <div class="combo">
                <label for="Confh_diasem" class="label">Dia da Semana :</label>
                <select id="Confh_diasem" name="Confh_diasem" required>
                    <option selected disabled value="">Selecione</option>
                    <option value="2">Segunda-Feira</option>
                    <option value="3">Terça-Feira</option>
                    <option value="4">Quarta-Feira</option>
                    <option value="5">Quinta-Feira</option>
                    <option value="6">Sexta-Feira</option>
                    <option value="7">Sabado</option>
                    <option value="1">Domingo</option>
                </select>
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