<?php
include_once 'Aluno.php';

$aluno = new Aluno();

switch ($_GET['acao']){
    case 'salvar';
        $aluno->inserir($_POST);
        break;
    case 'excluir';
        $aluno->excluir($_GET['id_aluno']);
        break;
}

header('location: index.php');