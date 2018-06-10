<?php
include_once 'Aluno.php';

$aluno = new Aluno();

switch ($_GET['acao']) {
    case 'salvar';
        # Se o id não estiver vazio ele altera, senão ele cria um novo.
        if (!empty($_POST['id_aluno'])) {
            $aluno->alterar($_POST);
        } else {
            $aluno->inserir($_POST);
        }
        break;
    case 'excluir';
        $aluno->excluir($_GET['id_aluno']);
        break;
}

header('location: index.php');