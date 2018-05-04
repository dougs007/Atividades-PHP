<?php
include('Cabecalho.php');

//inicio das variaveis
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

//inicio da condicao
if ($n1 < $n2) {
    // CASO O N1 SEJA MENOR QUE O N2
    echo "
<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>2 Inteiros - Ordem Decrescente</h4>
               <h5>1º -> $n2</h5><br>    
               <h5>2º -> $n1</h5><br>    
               <a href='Ex9.php'>Voltar</a>
            </div>
        </div>
    </div>
</div> 
    ";
    // CASO O N2 SEJA MENOR QUE O N1
} elseif ($n2 < $n1) {
    echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>2 Inteiros - Ordem Decrescente</h4>
               <h5>1º -> $n1</h5><br>    
               <h5>2º -> $n2</h5><br>      
               <a href='Ex9.php'>Voltar</a>
            </div>
        </div>
    </div>
</div> 

    
    ";
} else
    echo "";

?>
