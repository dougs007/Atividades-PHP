<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 1 - PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        h2 {
            text-align: center;
        }
    </style>

</head>
<body>

<div class="container">
    <?php

    echo "<h2>Atividade 01 - PHP</h2>" . "<hr>";

    echo "<h4>Letra A </h4>" . "<br>";
    $a = 10;
    $b = 20;

    echo "Escreva B -> $b<br>"; // Escreva B
    $b += 5;
    echo "Escreva A -> $a <br>"; // Escreva A
    echo "Escreva B -> $b" . "<br>";     // Escreva B

    // ZERAR AS VARIÁVEIS
    $a = 0;
    $b = 0;
    $c = 0;

    echo "<hr>"; // Pular de linha da letra A para a B

    echo "<h4>Letra B</h4>" . "<br>";

    $a = 30;
    $b = 20;
    $c = $a + $b; // 30 + 20 = 50

    echo "Escreva C -> $c" . "<br>"; // Escreva C

    $b += 10; // 20 + 10 = 30

    echo "Escreva B -> $b" . "<br>"; // Escreva B
    echo "Escreva C -> $c" . "<br>"; // Escreva C

    $c += $a + $b;

    echo "Escreva A -> $a" . "<br>"; // Escreva A
    echo "Escreva B -> $b" . "<br>"; // Escreva B
    echo "Escreva C -> $c" . "<br>"; // Escreva C

    // ZERAR AS VARIÁVEIS
    $a = 0;
    $b = 0;
    $c = 0;

    echo "<hr>"; // Pular de linha da letra B para a C

    echo "<h4>Letra C</h4>" . "<br>";

    $a = 10;
    $b = 20;
    $c += $a;
    $b += $c;
    $a += $b;

    echo "Escreva A -> $a" . "<br>"; // Escreva A
    echo "Escreva B -> $b" . "<br>"; // Escreva B
    echo "Escreva C -> $c" . "<br>"; // Escreva C

    // ZERAR AS VARIÁVEIS
    $a = 0;
    $b = 0;
    $c = 0;

    echo "<hr>"; // Pular de linha da letra C para a D

    echo "<h4>Letra D</h4>" . "<br>";

    $a = 10;
    $b = $a + 1; // 10 + 1 = 11
    $a += $b + 1; // 11 + 1= 12
    $b += $a + 1; // 12 + 1= 13

    echo "Escreva A -> $a" . "<br>"; // Escreva A

    $a += $b + 1;
    echo "Escreva A -> $a" . "<br>"; // Escreva A
    echo "Escreva B -> $b" . "<br>"; // Escreva B

    // ZERAR AS VARIÁVEIS
    $a = 0;
    $b = 0;
    $c = 0;

    echo "<hr>"; // Pular de linha da letra D para a E

    echo "<h4>Letra E</h4>" . "<br>";

    $a = 10;
    $b = 5;
    $c = $a + $b;
    $b += 20;
    $a += 10;

    echo "Escreva A -> $a" . "<br>"; // Escreva A
    echo "Escreva B -> $b" . "<br>"; // Escreva B
    echo "Escreva C -> $c" . "<br>"; // Escreva C

    // ZERAR AS VARIÁVEIS
    $a = 0;
    $b = 0;
    $c = 0;

    echo "<hr>"; // Pular de linha da letra E para a F

    echo "<h4>Letra F</h4>" . "<br>";

    $x = 1;
    $y = 2;

    $z = $y - $x;

    echo "Escreva Z -> $z" . "<br>"; // Escreva Z

    $x += 5;

    $y += $x + $z;
    echo "Escreva X -> $x" . "<br>"; // Escreva X
    echo "Escreva Y -> $y" . "<br>"; // Escreva Y
    echo "Escreva Z -> $z" . "<br>"; // Escreva Z

    echo "<hr>"; // Pular de linha da atividade 1 para a 2

    echo "<h2>Atividade 02 - PHP</h2>" . "<hr>";

    echo "<h4>Letra A</h4>" . "<br>";

    echo "2 > 3 =" . "<br> result: ";
    echo 2 > 3 ? "1" : "0" . "<hr>";

    echo "<h4>Letra B</h4>" . "<br>";
    echo "(6 < 8) ou (3 > 7) =" . "<br>" . "Result: ";
    echo (6 < 8) || (3 > 7) ? "1" : "0";
    echo "<hr>";

    echo "<h4>Letra C</h4>" . "<br>";
    echo "!(2<3) =" . "<br>" . "Result: ";
    echo !(2 < 3) ? "1" : "0";
    echo "<hr>";

    echo "<h4>Letra D</h4>" . "<br>";
    $ad = 5;
    echo "(5>=6 ou 6<7 ou não(a+5-6=8) =" . "<br>" . "Result: ";
    echo (5 >= 6 || 6 < 7 || !($ad + 5 - 6 == 8)) ? "1" : "0";
    echo "<br>" . "<hr>";

    echo "<h4>Letra E</h4>" . "<br>";
    $u = 29;
    echo "(34>9 e 5+u = 34) ou (5=15/3 e 8>12) = ((u = 29) e 8>12) = {onde u = 29}" . "<br>" . "Result: ";
    echo (34 > 9 & 5 + $u = 34) || (5 == 15 / 3 & 8 > 12) == (($u == 29) & 8 > 12) ? "1" : "0";

    echo "<hr>"; // Pular de linha da atividade 2 para a 3

    echo "<h2>Atividade 03 - PHP</h2>" . "<hr>";

    echo "<h4>Letra A</h4>" . "<br>";
    echo "(4/2)+(2/4) =	 4/2+2/4 =" . "<br>" . "Result: ";
    echo ((4 / 2) + (2 / 4)) == (4 / 2 + 2 / 4) ? "1" : "0";
    echo "<hr>";

    echo "<h4>Letra B</h4>" . "<br>";
    echo "4/(2+2)/4 = 4/2+2/4 =" . "<br>" . "Result: ";
    echo (4 / (2 + 2) / 4) == (4 / 2 + 2 / 4) ? "1" : "0";
    echo "<hr>";

    echo "<h4>Letra C</h4>" . "<br>";
    echo "(4+2)*2-4 = 4+2*2-4 =" . "<br>" . "Result: ";
    echo ((4 + 2) * 2 - 4) == (4 + 2 * 2 - 4) ? "1" : "0";

    echo "<hr>"; // Pular de linha da atividade 3 para a 4

    echo "<h2>Atividade 04 - PHP</h2>" . "<hr>";

    $salario1 = 100;
    $salario2 = 200;
    $salario3 = 300;

    $ir1 = 0;
    $ir2 = 10;
    $ir3 = 15;

    $salliq1 = 100;
    $salliq2 = 190;
    $salliq3 = 285;

    echo "<b>Expressão A : </b>";
    echo "(salliq >= 100,00)" . "<br>" . "Result :";
    echo $salliq1 >= 100 ? "1" : "0";
    echo "<hr>";

    echo "<b>Expressão B : </b>";
    echo "(salliq < 190,00)" . "<br>" . "Result :";
    echo $salliq2 < 190 ? "1" : "0";
    echo "<hr>";

    echo "<b>Expressão C : </b>";
    echo "(salliq = salario - ir )" . "<br>" . "Result :";
    echo $salliq3 == $salario3 - $ir3 ? "1" : "0";
    echo "<hr>";

    //    echo "<hr>"; // Pular de linha da atividade 4 para a 5

    echo "<h2>Atividade 05 - PHP</h2>" . "<hr>";

    $a = 3;
    $b = 7;
    $c = 4.2;

    echo "<b>Letra A</b> :";
    echo "( A + C ) > B " . "<br>";
    echo ($a + $c) > $b ? "1" : "0";
    echo "<br>" . "<hr>";

    echo "<b>Letra B</b> :";
    echo " B >= ( A + 2 ) " . "<br>";
    echo $b >= ($a + 2) ? "1" : "0";
    echo "<br>" . "<hr>";

    echo "<b>Letra C</b> :";
    echo " C = ( B - A ) " . "<br>";
    echo $c == ($b - $a) ? "1" : "0";
    echo "<br>" . "<hr>";

    echo "<b>Letra D</b> :";
    echo "( B + A ) <= C " . "<br>";
    echo ($b + $a) <= $c ? "1" : "0";
    echo "<br>" . "<hr>";

    echo "<b>Letra E</b> :";
    echo "( C + A ) > B " . "<br>";
    echo ($c + $a) > $b ? "1" : "0";
    echo "<br>" . "<hr>";

    // ZERAR AS VARIÁVEIS
    $a = 0;
    $b = 0;
    $c = 0;

    //    echo "<hr>"; // Pular de linha da atividade 5 para a 6

    echo "<h2>Atividade 06 - PHP</h2>" . "<hr>";

    $a = 5;
    $b = 4;
    $c = 3;
    $d = 6;

    echo "<b>Letra A</b> :";
    echo "( A > C ) && ( C <= D ) " . "<br>";
    echo ($a > $c) && ($c <= $d) ? "1" : "0";
    echo "<br>" . "<hr>";

    echo "<b>Letra B</b> :";
    echo "( A + B ) > 10 ou ( A + B ) = ( C + D) " . "<br>"; // FALTA ARRUMAR O IF TERNÁRIO
    echo ($a > $c) && ($c <= $d) ? "1" : "0";
    echo "<br>" . "<hr>";

    echo "<b>Letra C</b> :";
    echo "( A >= C ) && ( D >= C ) " . "<br>"; // FALTA ARRUMAR O IF TERNÁRIO
    echo ($a > $c) && ($c <= $d) ? "1" : "0";
    echo "<br>" . "<hr>";

    // THE END
    ?>

</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>