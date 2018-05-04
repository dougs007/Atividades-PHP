<?php
include('Cabecalho.php');

//inicio das variaveis
$nome = $_POST['nome'];
$sal = $_POST['sal'];

//inicio da condicao
if ($sal <= 300) {
    // RECEBE AJUSTE DE 50%
    $sal = $sal * 1.5;
    echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                    <h4 class='grey-text' align='center'>Douglas Corporate2</h4>
                    <h5>Você receberá ajuste de 50% Sr. $nome</h5>
                    <h6>Seu novo salário é de -> $sal</h6><br>
                    <a href='Ex5.php'>Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div> 

";
} else if ($sal > 300) {
    // RECEBE AJUSTE DE 30%
    $sal = $sal * 1.3;
    echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <h4 class='grey-text' align='center'>Douglas Corporate2</h4>
                <h5>Você receberá ajuste de 30% Sr. $nome</h5>
                <h6>Seu novo salário é de -> $sal</h6><br>
                <a href='Ex5.php'>Voltar</a>
            </div>
        </div>
    </div>
</div> ";
} else // fim da condicao

?>
