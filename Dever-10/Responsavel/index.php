<?php
include_once 'Responsavel.php';

$responsavel = new Responsavel();
$arrResponsavel = $responsavel->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Lista de Responsáveis</h1>

    <a href="form.php" class="btn btn-warning">Novo</a>

    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td><b>Id</b></td>
            <td><b>Nome</b></td>
            <td><b>Telefone</b></td>
            <td><b>Endereço</b></td>
            <td><b>Data Nascimento</b></td>
            <td><b>Sexo</b></td>
        </tr>

        <?php foreach ($arrResponsavel as $responsavel) { ?>
            <tr>
            <td><?php echo $responsavel['id_responsavel']; ?></td>
            <td><?php echo $responsavel['nome']; ?></td>
            <td><?php echo $responsavel['telefone']; ?></td>
            <td><?php echo $responsavel['endereco']; ?></td>
            <td><?php echo $responsavel['data_nascimento']; ?></td>
            <td><?php echo $responsavel['sexo']; ?></td>
            </tr>
        <?php } ?>

    </table>

<?php
include_once '../rodape.php';
