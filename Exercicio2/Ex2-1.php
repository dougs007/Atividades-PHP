<?php
include('Ex2-navbar.php');

//inicio da variavel
$sal = $_POST['sal'];

//inicio da condicao
if ($sal < 500) {
    echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                    <h4 class='grey-text' align='center'>Douglas Corporate</h4>
                    <h5>Segue abaixo seu novo salário !</h5>
                    <h6>Seu salário -> " . "$sal" . "</h6><br>
                    <a href='Ex2.php'>Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div> 

";
} else if ($sal > 500) {
    echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <h4 class='grey-text' align='center'>Douglas Corporate</h4>
                <h5>Você não terá direito a aumento, já ganha demais !</h5>
                <a href='Ex1.php'>Voltar</a>
            </div>
        </div>
    </div>
</div> ";
} else // fim da  condicao

?>

