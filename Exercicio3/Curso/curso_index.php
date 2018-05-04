<?php
/**
 * Created by PhpStorm.
 * User: douglas
 * Date: 28/03/18
 * Time: 07:30
 */
include_once('Bootstrap.php');

// RECEBE OS DADOS VIA POST INSERIDOS NO FORM DE CURSO
$curso = $_POST['curso'];
?>
<div class="container">
    <h1> <h1><?php echo "update 'escola'.'curso' 
          set curso ='$curso'
           WHERE id_curso ='1'; "; ?></h1><br>
    <h2><a href="curso.php">Voltar</a></h2>
</div>
<title>Curso Update List</title>

