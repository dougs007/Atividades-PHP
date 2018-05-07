<?php
include_once 'Aluno.php';

$aluno = new Aluno();
$arrAluno = $aluno->recuperarDados();

include_once '../cabecalho.php';
?>
    <script>
        $(document).ready(function () {
            function formater() {

                $("#matricula").val("9999999999");
                $("#telefone").val("(99)99999-9999");
                $("#id_curso").val("9");
                $("#id_responsavel").val("9");
                $("#nota").val("99");
            }
        });
    </script>
    <h1 class="text-center">Novo Aluno</h1>

    <form action="processamento.php" method="post" class="form-horizontal">
        <div class="form-group">
            <label for="matricula" class="col-sm-2 control-label">Matrícula</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="matricula" name="matricula" maxlength="10" required>
            </div>
        </div>
        <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome" maxlength="50" required>
            </div>
        </div>
        <div class="form-group">
            <label for="telefone" class="col-sm-2 control-label">Telefone</label>
            <div class="col-sm-10">
                <!-- Text da mascara-->
                <input type="text" class="form-control" id="telefone" name="telefone" maxlength="14">
            </div>
        </div>
        <div class="form-group">
            <label for="endereco" class="col-sm-2 control-label">Endereço</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="endereco" name="endereco" maxlength="200">
            </div>
        </div>
        <div class="form-group">
            <label for="data_nascimento" class="col-sm-2 control-label">Data de Nascimento</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
            </div>
        </div>
        <div class="form-group">
            <label for="sexo" class="col-sm-2 control-label">Sexo</label>
            <div class="col-sm-10">
                <!-- por um select para masculino ou feminino -->
                <input type="text" class="form-control" id="sexo" name="sexo" maxlength="1"
                       style="text-transform: uppercase">
            </div>
        </div>
        <div class="form-group">
            <label for="id_responsavel" class="col-sm-2 control-label">Id Responsável</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id_responsavel" name="id_responsavel" maxlength="1"
                       required>
            </div>
        </div>
        <div class="form-group">
            <label for="id_curso" class="col-sm-2 control-label">Id Curso</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id_curso" name="id_curso" maxlength="1" required>
            </div>
        </div>
        <div class="form-group">
            <label for="nota" class="col-sm-2 control-label">Nota</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nota" name="nota" maxlength="2">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success" onclick="sucesso">Salvar</button>
                <a href="index.php" class="btn btn-danger">Voltar</a>
            </div>
        </div>
    </form>
    <!--
        <script>
            function sucesso() {
                alert('Cadastro efetuado com sucesso !') //Exibe o alerta ao confirmar o cadastro
            }
        </script> -->
<?php
include_once '../rodape.php';