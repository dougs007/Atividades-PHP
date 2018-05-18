<?php
include_once 'Responsavel.php';

$responsavel = new Responsavel();
$arResponsavel = $responsavel->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Novo Responsável</h1>
<div class="container">
    <form class="form-horizontal" action="processamento.php?acao=salvar" method="post">
        <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
        </div>
        <div class="form-group">
            <label for="telefone" class="col-sm-2 control-label">Telefone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="telefone" name="telefone">
            </div>
        </div>
        <div class="form-group">
            <label for="endereco" class="col-sm-2 control-label">Endereço</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="endereco" name="endereco">
            </div>
        </div>
        <div class="form-group">
            <label for="data_nascimento" class="col-sm-2 control-label">Data de Nascimento</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="data_nascimento" name="data_nascimento">
            </div>
        </div>
        <div class="form-group">
            <label for="sexo" class="col-sm-2 control-label">Sexo</label>
            <div class="col-sm-10">
                <select class="form-control" name="sexo" id="sexo">
                    <option value="">Selecione</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="../curso/index.php" class="btn btn-danger">Voltar</a>
            </div>
        </div>
    </form>
</div>
<?php
include_once '../rodape.php';