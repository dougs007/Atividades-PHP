<title>Exercício 16 - PHP</title>

<?php
include('Cabecalho.php');

// INICIO DAS VARIAVEIS
$nome = $_POST['nome'];
// SALÁRIO MÍNIMO
$salmin = $_POST['salmin'];
// HORAS TRABALHADAS
$htrab = $_POST['htrab'];
// Nº DEPENDENTES
$ndep = $_POST['ndep'];
// HORAS EXTRAS
$hex = $_POST['hex'];

// HORAS TRABALHADAS É IGUAL A 1/5 DO SALÁRIO MÍNIMO
$valorhtrab = ($salmin / 5);

// SALÁRIO DO MÊS É IGUAL AO Nº DE HORAS TRABALHADAS * VALOR DA HORA TRABALHADA
$salmes = $htrab * $valorhtrab;

// PARA CADA DEPENDENTE É ACRESCIDO 32 REAIS
$salmes += ($ndep * 32);

// PARA CADA HORAS EXTRA TRABALHADA O CALCULO É O VALOR DE VALOR DE HORA TRABALHADA ACRESCIDA DE 50 %
$hex = ($valorhtrab * 1.5);

// SALARIO BRUTO É IGUAL AO O SALARIO DO MES + OS VALORES DE DEPENDENTES + VALOR DE HORAS EXTRAS TRABALHADAS
$salBruto = $salmes + $hex;

//echo "$salBruto";

if ($salBruto < 200) {

} else if ($salBruto >= 200 && $salBruto <= 500) {
    $saliq = ($salBruto * 0.1);

} else if ($salBruto > 500) {
    $saliq = ($salBruto * 0.2);
} else
    echo "";

/*
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

} else
    echo "";
*/