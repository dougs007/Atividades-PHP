<?php
include('Ex2-navbar.php');

//inicio das variaveis para cada nota inserida pelo user.
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];

//declaracao da variavel media para n acusar erro (acusou sem declarar)
$media = 0;

//media recebe todas as notas inseridas pelo user e já calculando a média do user
$media = ($n1 + $n2 + $n3 + $n4) / 4;

//inicio da condicao
if ($media >= 7) {
    echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                    <h4 class='grey-text' align='center'>Calculador de Médias</h4>
                    <h5>Sua média é de -> $media</h5>
                    <h6>Parabéns, você está livre para curtir as férias !</h6><br>
                    <a href='Ex3.php'>Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div> 

";
} else if ($media < 7) {
    echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <h4 class='grey-text' align='center'>Calculador de Médias</h4>
                <h5>Sua média é de -> $media</h5>
                <h6>Reprovado, nos vemos no ano que vem !</h6><br>
                <a href='Ex3.php'>Voltar</a>
            </div>
        </div>
    </div>
</div> ";
} else // fim da condicao

?>

