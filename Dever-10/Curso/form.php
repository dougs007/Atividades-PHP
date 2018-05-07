<?php
include_once 'Curso.php';

$curso = new Curso();
$arrCurso = $curso->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Novo Curso</h1>

    <form action="processamento.php" method="post" class="form-horizontal">
        <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome" maxlength="30" required>
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