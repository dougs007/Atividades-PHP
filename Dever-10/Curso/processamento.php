<?php
include_once ('Curso.php');

$curso = new Curso();

$dados = $_POST;
$curso->inserir($dados);

//print_r($_POST);

header('location: index.php');

