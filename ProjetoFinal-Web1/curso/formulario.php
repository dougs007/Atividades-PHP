<?php
include_once 'Curso.php';

$curso = new Curso();

if (!empty($_GET['id_curso'])) {
    $curso->carregarPorId($_GET['id_curso']);
}

include_once '../cabecalho.php';

if (!empty($_GET)) {
    echo "<h1 class='text-center'>Atualizar Curso</h1>";
} else
    echo "<h1 class='text-center'>Novo Curso</h1>";
?>

    <div class="container">
        <form class="form-horizontal" action="processamento.php?acao=salvar" method="post">
            <input type="hidden" name="id_curso" value="<?= $curso->getIdCurso(); ?>">

            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" name="nome"
                           value="<?= $curso->getNome(); ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a href="../curso/index.php" class="btn btn-danger">Voltar</a>
                </div>
        </form>
    </div>

<?php
include_once '../rodape.php';