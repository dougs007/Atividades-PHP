<?php
include_once 'Aluno.php';
include_once '../curso/Curso.php';

$aluno = new Aluno();
$arrAluno = $aluno->recuperarDados(); // Array de alunos.

// instancia para usar no for each.
$curso = new Curso();
$arrCursos = $curso->recuperarDados(); // Array de cursos.

// instancia para usar no for each.
$responsavel = new Responsavel();
$arrResponsavel = $responsavel->recuperarDados(); // Array de responsáveis.

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Novo Aluno</h1>
    <div class="container">
        <form class="form-horizontal" action="processamento.php?acao=salvar" method="post">
            <div class="form-group">
                <label for="matricula" class="col-sm-2 control-label">Matricula</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="matricula" name="matricula">
                </div>
            </div>
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
                <label for="id_responsavel" class="col-sm-2 control-label">Resposánvel</label>
                <div class="col-sm-10">
                    <select class="form-control" name="id_responsavel" id="id_responsavel">
                        <option value="">Selecione</option>

                        <?php foreach ($arrCursos as $curso) { ?>
                            <option value="<?php echo $curso['id_curso'] ?>"><?php echo $curso['nome'] ?></option>
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
                    <input type="text" class="form-control" id="nota" name="nota">
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