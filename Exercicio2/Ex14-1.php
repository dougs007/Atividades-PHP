<title>Exercício 14 - PHP</title>

<?php
include('Ex2-navbar.php');

// INICIO DAS VARIAVEIS
$a = $_POST['n1'];
$b = $_POST['n2'];
$c = $_POST['n3'];


if ( ( $a > $b ) && ( $b > $c ) ) {
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Soma dos 2 maiores</h4>
               <h3>A soma dos maiores digitados foram :</h3><br>
               <h4>($a + $b) -> ".($a + $b)."</h4><br>      
               <a href='Ex14.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";

} elseif ( ( $a > $c ) && ( $c > $b ) ) {
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Soma dos 2 maiores</h4>
               <h3>A soma dos maiores digitados foram :</h3><br>
               <h4>($a +$c) -> ".($a +$c)."</h4><br>      
               <a href='Ex14.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";

} elseif ( ( $b > $a ) && ( $a > $c ) ) {
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Soma dos 2 maiores</h4>
               <h3>A soma dos maiores digitados foram :</h3><br>
               <h4>($b + $a) -> ".($b + $a)."</h4><br>      
               <a href='Ex14.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";

} elseif ( ( $b > $c ) && ( $c > $a ) ) {
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Soma dos 2 maiores</h4>
               <h3>A soma dos maiores digitados foram :</h3><br>
               <h4>($b + $c) -> ".($b + $c)."</h4><br>      
               <a href='Ex14.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";


} elseif ( ( $c > $a ) && ( $a > $b ) ) {
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Soma dos 2 maiores</h4>
               <h3>A soma dos maiores digitados foram :</h3><br>
               <h4>($c + $a) -> ".($c + $a)."</h4><br>      
               <a href='Ex14.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";
} elseif ( ( $c > $b ) && ( $b > $a ) ) {
echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Soma dos 2 maiores</h4>
               <h3>A soma dos maiores digitados foram :</h3><br>
               <h4>($c + $b) -> ".($c + $b) ."</h4><br>      
               <a href='Ex14.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";
}
?>
