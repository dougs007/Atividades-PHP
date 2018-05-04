<title>Exercício 10 - PHP</title>

<?php
include('Ex2-navbar.php');

//inicio das variaveis
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

//inicio da condicao
if ($n1 > $n2 && $n2 > $n3 && $n1 > $n3) {
    echo "
<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>3 Inteiros - Ordem Decrescente</h4>
               <h5>1º -> $n1</h5><br>    
               <h5>1º -> $n2</h5><br>    
               <h5>3º -> $n3</h5><br>    
               <a href='Ex10.php'>Voltar</a>
            </div>
        </div>
    </div>
</div> 
    ";
} else if ($n2 > $n1 && $n1 > $n3 && $n2 > $n3) {
    echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>3 Inteiros - Ordem Decrescente</h4>
               <h5>1º -> $n2</h5><br>    
               <h5>2º -> $n1</h5><br>      
               <h5>3º -> $n3</h5><br>      
               <a href='Ex10.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";
} else if ($n2 > $n3 && $n3 > $n1 && $n2 > $n1) {
    echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>3 Inteiros - Ordem Decrescente</h4>
               <h5>1º -> $n2</h5><br>    
               <h5>2º -> $n3</h5><br>      
               <h5>3º -> $n1</h5><br>      
               <a href='Ex10.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>    
    ";
} else if ($n3 > $n1 && $n1 > $n2 && $n3 > $n2) {
    echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>3 Inteiros - Ordem Decrescente</h4>
               <h5>1º -> $n3</h5><br>    
               <h5>2º -> $n1</h5><br>      
               <h5>3º -> $n2</h5><br>      
               <a href='Ex10.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>    
    ";
} else if ($n3 > $n2 && $n2 > $n1 && $n3 > $n1) {
    echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>3 Inteiros - Ordem Decrescente</h4>
               <h5>3º -> $n1</h5><br>      
               <h5>2º -> $n2</h5><br>      
               <h5>1º -> $n3</h5><br>    
               <a href='Ex10.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>    
    ";
} else
    echo "
<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>3 Inteiros - Ordem Decrescente</h4>
               <h5>3º -> $n1</h5><br>      
               <h5>1º -> $n3</h5><br>    
               <h5>2º -> $n2</h5><br>      
               <a href='Ex10.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>    
    ";
?>
