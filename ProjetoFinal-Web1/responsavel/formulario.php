<?php
include_once 'Responsavel.php';

$responsavel = new Responsavel();
$arResponsavel = $responsavel->recuperarDados();


if (!empty($_GET['id_responsavel'])) {
    $responsavel->carregarPorId($_GET['id_responsavel']);
}

include_once '../cabecalho.php';

if (!empty($_GET)) {
    echo "<h1 class='text-center'>Atualizar Responsável</h1>";
} else
    echo "<h1 class='text-center'>Novo Responsável</h1>";

?>

    <div class="container">

        <form class="form-horizontal" action="processamento.php?acao=salvar" method="post">
            <input type="hidden" name="id_responsavel" value="<?= $responsavel->getIdResponsavel(); ?>">

            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" name="nome"
                           value="<?= $responsavel->getNome(); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="telefone" class="col-sm-2 control-label">Telefone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telefone" name="telefone"
                           value="<?= $responsavel->getTelefone(); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="endereco" class="col-sm-2 control-label">Endereço</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="endereco" name="endereco"
                           value="<?= $responsavel->getEndereco(); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="data_nascimento" class="col-sm-2 control-label">Data de Nascimento</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="data_nascimento" name="data_nascimento"
                           value="<?= $responsavel->getDataNascimento(); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="sexo" class="col-sm-2 control-label">Sexo</label>
                <div class="col-sm-10">
                    <label for="sexoM" class="radio-inline">
                        <input type="radio" value="M" <?= (($responsavel->getSexo()) == 'M') ? 'Checked' : '' ?>
                               class="radio" id="sexoM" name="sexo" required>Masculino
                    </label>
                    <label for="sexoF" class="radio-inline">
                        <input type="radio" value="F" <?= (($responsavel->getSexo()) == 'F') ? 'Checked' : '' ?>
                               class="radio" id="sexoF" name="sexo" required>Feminino
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a href="../responsavel/index.php" class="btn btn-danger">Voltar</a>
                </div>
            </div>

        </form>
    </div>

<?php
include_once '../rodape.php';