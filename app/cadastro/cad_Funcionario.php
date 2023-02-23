<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Cadastro de Pessoa</h1>
    </div> 
    <form action="cad_Funcionariobd.php" method="POST">
        <fieldset>
            <div class="campo">
                <label for="codigo" class="label">Código :</label>
                <input type="text" id="codigo" name="codigo">
            </div>
            <div class="campo">
                <label for="codigo_pes" class="label">Pessoa :</label>
                <input type="text" id="codigo_pes" name="codigo_pes">
                <input type="text" id="nome_pes" name="nome_pes">
            </div>
            <div class="prof">
                <label for="prof" class="label">Professor :</label>
                <select id="prof" name="prof" required>
                    <option selected disabled value="">Selecione</option>
                    <option>Sim</option>
                    <option>Nao</option>
                </select>
            </div> 
            <div class="campo">
                <div class="subcampo">
                    <label for="login" class="label">Login :</label>
                    <input type="text" id="login" name="login">
                </div>
                <div class="subcampo">
                    <label for="senha" class="label">Senha :</label>   
                    <input type="text" id="senha" name="senha">
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