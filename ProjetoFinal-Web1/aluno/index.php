<?php
include_once 'Aluno.php';

$aluno = new Aluno();
$arAlunos = $aluno->recuperarDados();  // Array de aluno.

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Alunos</h1>

    <a class="btn btn-primary" href=formulario.php>Novo Aluno</a>

    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td align="center">Ações</td>
            <td>Id Aluno</td>
            <td>Matricula</td>
            <td>Nome</td>
            <td>Telefone</td>
            <td>Endereço</td>
            <td>Data Nascimento</td>
            <td>Sexo</td>
            <td>Id Responsável</td>
            <td>Id Curso</td>
            <td>Nota</td>
        </tr>

        <?php foreach ($arAlunos as $aluno) { ?>
            <tr>
                <td style="width: 151px">
                    <a href="processamento.php?acao=excluir&id_aluno=<?= $aluno['id_aluno'] ?>"
                       class="btn btn-danger">Excluir
                    </a>
                    <a href="formulario.php?id_aluno=<?= $aluno['id_aluno'] ?>"
                       class="btn btn-warning">Alterar
                    </a>
                </td>
                <td><?= $aluno['id_aluno'] ?></td>
                <td><?= $aluno['matricula'] ?></td>
                <td><?= $aluno['nome'] ?></td>
                <td><?= $aluno['telefone'] ?></td>
                <td><?= $aluno['endereco'] ?></td>
                <td><?= $aluno['data_nascimento'] ?></td>
                <td><?= $aluno['sexo'] ?></td>
                <td><?= $aluno['id_responsavel'] ?></td>
                <td><?= $aluno['id_curso'] ?></td>
                <td><?= number_format($aluno['nota'], 1, ',', '.'); ?></td>
            </tr>
        <?php } ?>

    </table>

<?php
include_once '../rodape.php';