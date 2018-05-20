<?php
include_once 'Aluno.php';
include_once '../curso/Curso.php';
include_once '../responsavel/Responsavel.php';


$aluno = new Aluno();
$arrAluno = $aluno->recuperarDados(); // Array de alunos.

// instancia para usar no for each.
$curso = new Curso();
$arrCursos = $curso->recuperarDados(); // Array de cursos.

// instancia para usar no for each.
$responsavel = new Responsavel();
$arrResponsavel = $responsavel->recuperarDados(); // Array de responsáveis.

if (!empty($_GET['id_aluno'])) {
    $aluno->carregarPorId($_GET['id_aluno']);
}

if (!empty($_GET)) {
    echo "<h1 class=\"text-center\">Atualizar Aluno</h1>";
} else
    echo "<h1 class=\"text-center\">Novo Aluno</h1>";

include_once '../cabecalho.php';
?>

    <div class="container">
        <form class="form-horizontal" action="processamento.php?acao=salvar" method="post">
            <input type="hidden" name="matricula" value="<?php echo $aluno->getIdAluno(); ?>">

            <div class="form-group">
                <label for="matricula" class="col-sm-2 control-label">Matricula</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="matricula" name="matricula"
                           value="<?php echo (int)$aluno->getMatricula(); ?>" maxlength="10">
                </div>
            </div>
            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" name="nome"
                           value="<?php echo $aluno->getNome(); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="telefone" class="col-sm-2 control-label">Telefone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telefone" name="telefone"
                           value="<?php echo $aluno->getTelefone(); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="endereco" class="col-sm-2 control-label">Endereço</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="endereco" name="endereco"
                           value="<?php echo $aluno->getEndereco(); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="data_nascimento" class="col-sm-2 control-label">Data de Nascimento</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="data_nascimento" name="data_nascimento"
                           value="<?php echo $aluno->getDataNascimento(); ?>">
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
                <label for="id_responsavel" class="col-sm-2 control-label">Resposánvel</label>
                <div class="col-sm-10">
                    <select class="form-control" name="id_responsavel" id="id_responsavel">
                        <option value="">Selecione</option>

                        <?php foreach ($arrResponsavel as $responsavel) { ?>
                            <option value="<?php echo $responsavel['id_responsavel'] ?>"><?php echo $responsavel['nome'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="id_curso" class="col-sm-2 control-label">Curso</label>
                <div class="col-sm-10">
                    <select class="form-control" name="id_curso" id="id_curso">
                        <option value="" selected>Selecione</option>

                        <?php foreach ($arrCursos as $curso) { ?>
                            <option value="<?php echo $curso['id_curso'] ?>"><?php echo $curso['nome'] ?></option>
                        <?php } ?>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="nota" class="col-sm-2 control-label">Nota</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nota" name="nota"
                           value="<?php echo $aluno->getNota(); ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a href="../aluno/index.php" class="btn btn-danger">Voltar</a>
                </div>
        </form>
    </div>
<?php
include_once '../rodape.php';