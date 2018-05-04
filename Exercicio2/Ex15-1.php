<title>Exercício 15 - PHP</title>

<?php
include('Cabecalho.php');

// INICIO DAS VARIAVEIS
$nome = $_POST['nome'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

// MEDIA DOS EXERCÍCIOS
$mex = $_POST['mex'];
// MEDIA ANUAL
$ma = 0;
$ma = ( ( $n1 + ( $n2 * 2 ) + ( $n3 * 3 ) + $mex )/7);


if ($ma >= 9) {
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>IESB</h4>
               <h3>Aluno(a) $nome, segue abaixo detalhes do seu boletim</h3><br>
               <h4>Sua média foi de -> $ma</h4><br>      
               <h4>Conceito 'A'</h4><br>      
               <h4>Parabéns, você foi aprovado com notas excelentes, continue assim !</h4><br>      
               <a href='Ex15.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";

} elseif ($ma >= 7.5  && $ma < 9) {
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>IESB</h4>
               <h3>Aluno(a) $nome, segue abaixo detalhes do seu boletim</h3><br>
               <h4>Sua média foi de -> $ma</h4><br>      
               <h4>Conceito 'B'</h4><br>      
               <h4>Parabéns, você foi aprovado com notas boas, porém pode melhorar !</h4><br>      
               <a href='Ex15.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";

} elseif ($ma >= 6  && $ma < 7.5) {
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>IESB</h4>
               <h3>Aluno(a) $nome, segue abaixo detalhes do seu boletim</h3><br>
               <h4>Sua média foi de -> $ma</h4><br>      
               <h4>Conceito 'C'</h4><br>      
               <h4>Parabéns, você foi aprovado com notas medianas, estude mais !</h4><br>      
               <a href='Ex15.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";

} elseif ($ma >= 6  && $ma < 7.5) {
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>IESB</h4>
               <h3>Aluno(a) $nome, segue abaixo detalhes do seu boletim</h3><br>
               <h4>Sua média foi de -> $ma</h4><br>      
               <h4>Conceito 'D'</h4><br>      
               <h4>Infelizmente você foi reprovado :( , estude mais ano que vem !</h4><br>      
               <a href='Ex15.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";

} elseif ( ($ma < 4)  && ( $ma >= 0 ) ) {
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>IESB</h4>
               <h3>Aluno(a) $nome, segue abaixo detalhes do seu boletim</h3><br>
               <h4>Sua média foi de -> $ma</h4><br>      
               <h4>Conceito 'E'</h4><br>      
               <h4>Reprovado com notas super baixas :( , estude mais ano que vem !</h4><br>      
               <a href='Ex15.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";

} else if ($ma < 0)
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>IESB</h4>
               <h3>Aluno(a) $nome, segue abaixo detalhes do seu boletim</h3><br>
               <h4>Médias inválidas !</h4><br>      
               <h4>Por Favor verifique alguma nota sua e tente novamente</h4><br>      
               <a href='Ex15.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";
?>
