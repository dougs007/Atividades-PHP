<?php
include_once 'Responsavel.php';

$responsavel = new Responsavel();

switch ($_GET['acao']){
    case 'salvar';
        // se o id não estiver vazio ele altera, senão ele cria um novo.
        if (!empty($_POST['id_responsavel'])) {
            $curso->alterar($_POST);
        } else {
            $curso->inserir($_POST);
        }
        break;
    case 'excluir';
        $responsavel->excluir($_GET['id_responsavel']);
        break;
}

header('location: index.php');