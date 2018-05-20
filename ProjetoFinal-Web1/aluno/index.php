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
                <td style="width: 151px"><a
                            href="processamento.php?acao=excluir&id_aluno=<?php echo $aluno['id_aluno'] ?>"
                            class="btn btn-danger">Excluir</a>
                    <a href="formulario.php?id_aluno=<?php echo $aluno['id_aluno'] ?>" class="btn
                       btn-warning">Alterar</a>
                </td>
                <td><?php echo $aluno['id_aluno'] ?></td>
                <td><?php echo $aluno['matricula'] ?></td>
                <td><?php echo $aluno['nome'] ?></td>
                <td><?php echo $aluno['telefone'] ?></td>
                <td><?php echo $aluno['endereco'] ?></td>
                <td><?php echo $aluno['data_nascimento'] ?></td>
<!--                <td>--><?php //echo date_format($aluno['data_nascimento'],'d-m-Y'); ?><!--</td>-->
                <td><?php echo $aluno['sexo'] ?></td>
                <td><?php echo $aluno['id_responsavel'] ?></td>
                <td><?php echo $aluno['id_curso'] ?></td>
                <td><?php echo number_format($aluno['nota'],1,',', '.'); ?></td>
            </tr>
        <?php } ?>
    </table>

<?php
include_once '../rodape.php';