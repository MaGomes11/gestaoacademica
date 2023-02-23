<!DOCTYPE html>
<html lang="pt-br">
    <?php include_once '../templates/head.php' ?>
<body>
    <div class="titulo">
        <h1>Cadastro de Aula </h1>
    </div>
    <form action="cad_Aulabd.php" method="POST">
        <fieldset>
            <div class="campo">
                <label for="aul_codigo" class="label">Código :</label> 
                <input type="text" id="aul_codigo" name="aul_codigo">  
            </div>
            <div class="campo">
                <label for="aul_descricao" class="label">Descrição :</label> 
                <input type="text" id="aul_descricao" name="aul_descricao">  
            </div>
            <div class="campo">
                <label for="aul_turmcodigo" class="label">Codigo da Turma :</label> 
                <input type="text" id="aul_turmcodigo" name="aul_turmcodigo" class="Codigo">  
                <input type="text" id="aul_turmdesc" name="aul_turmdesc" class="descricao">  
            </div>
            <div class="campo">
                <label for="aul_profcodigo" class="label">Codigo do Professor :</label> 
                <input type="text" id="aul_profcodigo" name="aul_profcodigo" class="Codigo">  
                <input type="text" id="aul_profdesc" name="aul_profdesc" class="descricao">  
            </div>
            <div class="campo">
                <label for="aul_discodigo" class="label">Codigo da Disciplina :</label> 
                <input type="text" id="aul_discodigo" name="aul_discodigo" class="Codigo">  
                <input type="text" id="aul_disdescr" name="aul_disdescr" class="descricao">  
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

