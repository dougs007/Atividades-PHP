<?php
include_once 'Responsavel.php';

$responsavel = new Responsavel();
$arResponsavel = $responsavel->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Responsáveis</h1>

    <a class= "btn btn-info" href=formulario.php>Novo Responsável</a>

    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td align="center">Ações</td>
            <td>Id Responsável</td>
            <td>Nome</td>
            <td>Telefone</td>
            <td>Endereço</td>
            <td>Data Nascimento</td>
            <td>Sexo</td>
        </tr>

        <?php foreach ($arResponsavel as $responsavel){
            echo"
            <tr>
                <td style='width: 151px'><a href='processamento.php?acao=excluir&id_responsavel={$responsavel['id_responsavel']}' class='btn btn-danger'>Excluir</a>
                    <a href='#' class='btn btn-warning'>Alterar</a>
                </td>
                <td>{$responsavel['id_responsavel']}</td>
                <td>{$responsavel['nome']}</td>
                <td>{$responsavel['telefone']}</td>
                <td>{$responsavel['endereco']}</td>
                <td>{$responsavel['data_nascimento']}</td>
                <td>{$responsavel['sexo']}</td>
            </tr>

           ";
        } ?>
    </table>

<?php
include_once '../rodape.php';