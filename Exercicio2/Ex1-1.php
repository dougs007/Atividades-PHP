<?php
include('Ex2-navbar.php');

//inicio da variavel
$id = $_POST['idade'];

//inicio da condicao
if ($id >= 18) {
    echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <div>
                    <h4 class='grey-text' align='center'>Maioridade Penal</h4>
                    <h5>Você é maior de Idade !</h5>
                    <h6>Sua idade -> " . "$id" . "</h6><br>
                    <a href='Ex1.php'>Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div> 

";
} else if ($id < 18 && $id >= 1) {
    echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <h4 class='grey-text' align='center'>Maioridade Penal</h4>
                <h5>Você é menor de Idade !</h5>
                <h6>Apenas tens " . "$id anos guri(a)" . "</h6><br>
                <a href='Ex1.php'>Voltar</a>
            </div>
        </div>
    </div>
</div> 
";

}else if ($id != 18){
    echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <h4 class='grey-text' align='center'>Maioridade Penal</h4>
                <h5>Idade inválida</h5>
                <a href='Ex1.php'>Voltar</a>
            </div>
        </div>
    </div>
</div> 
";
}

?>
