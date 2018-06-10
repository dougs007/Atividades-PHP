<?php
include_once 'Curso.php';

$curso = new Curso();

switch ($_GET['acao']) {
    case 'salvar';
        # Se o id não estiver vazio ele altera, senão ele cria um novo.
        if (!empty($_POST['id_curso'])) {
            $curso->alterar($_POST);
        } else {
            $curso->inserir($_POST);
        }
        break;
    case 'excluir';
        $curso->excluir($_GET['id_curso']);
        break;
}

header('location: index.php');