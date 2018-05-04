<?php
include('Ex2-navbar.php');

//inicio das variaveis
$numb1 = $_POST['numb1'];
$numb2 = $_POST['numb2'];
$numb3 = $_POST['numb3'];

//inicio da condicao
if ($numb1 > $numb2 && $numb1 > $numb3) {
    // CASO O N1 SEJA MAIOR QUE OS DEMAIS
    echo "
<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Maior de todos</h4>
               <h5>O maior número inserido foi o número $numb1 !</h5><br>    
               <a href='Ex8.php'>Voltar</a>
            </div>
        </div>
    </div>
</div> 
    ";
    // CASO O N2 SEJA MAIOR QUE OS DEMAIS
} elseif ($numb2 > $numb1 && $numb2 > $numb3) {
    echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Maior de todos</h4>
               <h5>O maior número inserido foi o número $numb2 !</h5><br>    
               <a href='Ex8.php'>Voltar</a>
            </div>
        </div>
    </div>
</div> 

    
    ";
    // CASO O N3 SEJA MAIOR QUE OS DEMAIS
} elseif ($numb3 > $numb1 && $numb3 > $numb2) {
    echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Maior de todos</h4>
               <h5>O maior número inserido foi o número $numb3 !</h5><br>    
               <a href='Ex8.php'>Voltar</a>
            </div>
        </div>
    </div>
</div> 

    
    ";
} else
    echo "";

?>
