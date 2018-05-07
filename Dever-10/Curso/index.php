<?php
include_once 'Curso.php';

$curso = new Curso();
$arrCursos = $curso->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Cursos</h1>

    <a href="form.php" class="btn btn-warning">Novo</a>

    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td><b>Id</b></td>
            <td><b>Nome</b></td>
        </tr>

        <?php foreach ($arrCursos as $curso) { ?>
            <tr>
                <td><?php echo $curso['id_curso'] ?></td>
                <td><?php echo $curso['nome'] ?></td>
            </tr>
        <?php } ?>

    </table>

<?php
include_once '../rodape.php';