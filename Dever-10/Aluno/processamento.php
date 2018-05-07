<?php
include_once('Aluno.php');

$aluno = new Aluno();

$aluno->inserir($_POST);

//print_r($_POST);
header('location: index.php');
