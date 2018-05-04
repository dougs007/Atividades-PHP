<?php
/**
 * Created by PhpStorm.
 * User: douglas
 * Date: 28/03/18
 * Time: 07:30
 */
include_once('Bootstrap.php');

// RECEBE OS DADOS VIA POST INSERIDOS NO FORM DE ALUNO
$matricula = $_POST['matri'];
$nome = $_POST['nome'];
$telefone = $_POST['tel'];
$endereco = $_POST['end'];
$nascimento = $_POST['date'];
$nota = $_POST['nota'];

?>
<div class="container">
    <h1><?php echo "update 'escola'.'aluno' 
          set matricula ='$matricula',
           nome ='$nome', 
           telefone ='$telefone', 
           endereco ='$endereco', 
           nascimento ='$nascimento', 
           nota = '$nota')
           WHERE id_aluno ='1'; "; ?></h1><br>
    <h2><a href="aluno-update.php">Voltar</a></h2>
</div>
<title>Aluno Update List</title>

