<?php
/**
 * Created by PhpStorm.
 * User: douglas
 * Date: 28/03/18
 * Time: 07:30
 */
include_once('Bootstrap.php');

// RECEBE OS DADOS VIA POST INSERIDOS NO FORM DE CURSO
$nome = $_POST['nome'];
$telefone = $_POST['tel'];
$endereco = $_POST['end'];
$nascimento = $_POST['date'];
$sexo = $_POST['sex'];

?>
<div class="container">
    <h1><?php echo "UPDATE 'escola'.'curso' SET nome='$nome',
                    telefone ='$telefone',
                    endereco ='$endereco',
                    nascimento = '$nascimento',
                    sexo = '$sexo'
                    WHERE 'id_responsavel' ='1';"; ?></h1><br>
    <h2><a href="responsavel-update.php">Voltar</a></h2>
</div>
<title>Responsavel Update List</title>

