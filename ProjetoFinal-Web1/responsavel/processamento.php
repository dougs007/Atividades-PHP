<?php
include_once 'Responsavel.php';

$responsavel = new Responsavel();

switch ($_GET['acao']){
    case 'salvar';
        $responsavel->inserir($_POST);
        break;
    case 'excluir';
        $responsavel->excluir($_GET['id_responsavel']);
        break;
}

header('location: index.php');