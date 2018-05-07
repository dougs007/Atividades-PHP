<?php
include_once 'Aluno.php';

$aluno = new Aluno();
$arrAluno = $aluno->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Alunos</h1>

    <a href="form.php" class="btn btn-warning">Novo</a>

    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td><b>Id_Aluno</b></td>
            <td><b>Matrícula</b></td>
            <td><b>Nome</b></td>
            <td><b>Telefone</b></td>
            <td><b>Endereço</b></td>
            <td><b>Nascimento</b></td>
            <td><b>Sexo</b></td>
            <td><b>Id_Responsável</b></td>
            <td><b>Id_Cursos</b></td>
            <td><b>Nota</b></td>
        </tr>

        <?php foreach ($arrAluno as $aluno) { ?>
            <tr>
                <td><?php echo $aluno['id_aluno']; ?></td>
                <td><?php echo $aluno['matricula']; ?></td>
                <td><?php echo $aluno['nome']; ?></td>
                <td><?php echo $aluno['telefone']; ?></td>
                <td><?php echo $aluno['endereco']; ?></td>
                <td><?php echo date('d/m/Y', strtotime($aluno['data_nascimento'])); ?></td>
                <td><?php echo $aluno['sexo']; ?></td>
                <td><?php echo $aluno['id_responsavel']; ?></td>
                <td><?php echo $aluno['id_curso']; ?></td>
                <td><?php echo number_format($aluno['nota'], 2, '.', ','); ?></td>
            </tr>
        <?php } ?>

    </table>

<?php
include_once '../rodape.php';