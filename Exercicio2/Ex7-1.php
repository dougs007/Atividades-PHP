<?php
include('Cabecalho.php');

//inicio das variaveis
$numb = $_POST['numb'];

//inicio da condicao
if (($numb % 2) == 1) {

    echo "
<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Par ou Ímpar</h4>
               <h5>O número inserido foi $numb </h5>    
               <h4><b>O número inserido é Ímpar !</b></h4>    
               <a href='Ex7.php'>Voltar</a>
            </div>
        </div>
    </div>
</div> 
    ";
    // SE FOR PAR
} elseif (($numb % 2) == 0) {
    echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Par ou Ímpar</h4>
               <h5>O número inserido foi $numb </h5>    
               <h4><b>O número inserido é Par !</b></h4>    
               <a href='Ex7.php'>Voltar</a>
            </div>
        </div>
    </div>
</div> 

    
    ";
}
?>
