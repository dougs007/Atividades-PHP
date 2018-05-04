<title>Exercício 11 - PHP</title>

<?php
include('Cabecalho.php');

// INICIO DAS VARIAVEIS
$nome = $_POST['nome'];
$alt = $_POST['alt'];
$sex = $_POST['sex'];

// CASO SEJA DO SEXO MASCULINO
$m = 0;
// CASO SEJA DO SEXO FEMININO
$f = 0;


if ( ($sex == 'm') || ($sex == 'M') || ($sex == 'Masculino') || ($sex == 'masculino') ) {
    $m = ( (72.7 * $alt) -58); // SOMA PARA O CALCULO DO PESO IDEAL
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Peso Ideal</h4>
               <h3>$nome, segue abaixo seu Peso Ideal</h3><br>
               <h4>Seu peso ideal é de -> $m</h4><br>      
               <a href='Ex11.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";

} elseif ( ($sex == 'f') || ($sex == 'F') || ($sex == 'Feminino') || ($sex == 'feminino') ) {
    $f = ((62.1 * $alt) - 44.7); // SOMA PARA O CALCULO DO PESO IDEAL
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Peso Ideal</h4>
               <h3>$nome, segue abaixo seu Peso Ideal</h3><br>
               <h4>Seu peso ideal é de -> $f</h4><br>      
               <a href='Ex11.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";
}

?>
