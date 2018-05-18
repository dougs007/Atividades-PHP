<?php
include_once 'Curso.php';

$curso = new Curso();
$arrCursos = $curso->recuperarDados(); // Array de cursos.

include_once '../cabecalho.php';
?>
    <h1 class="text-center">Cursos</h1>

    <a class="btn btn-primary" href="formulario.php">Novo Curso</a>

    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td align="center">Ações</td>
            <td>Id</td>
            <td>Nome</td>
        </tr>

        <?php foreach ($arrCursos as $curso) { ?>
            <tr>
                <td style="width: 151px">
                    <a href="formulario.php?id_curso=<?php echo $curso['id_curso'] ?>" class="btn btn-warning">Alterar</a>
                    <a href="processamento.php?acao=excluir&id_curso= <?php echo $curso['id_curso'] ?>"
                       class="btn btn-danger">Excluir</a>
                </td>
                <td><?php echo $curso['id_curso'] ?></td>
                <td><?php echo $curso['nome'] ?></td>
            </tr>
        <?php } ?>

    </table>

<?php
include_once '../rodape.php';