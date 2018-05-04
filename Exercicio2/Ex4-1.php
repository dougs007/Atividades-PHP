<?php
include('Cabecalho.php');

//inicio das variaveis
$nome = $_POST['nome'];
$pass = $_POST['pass'];

//inicio da condicao
if ($pass === 'ASDF') {
    echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                    <h4 class='grey-text' align='center'>Sistema de Login</h4>
                    <h5>Seja bem vindo Sr. $nome</h5>
                    <a href='Ex4.php'>Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div> 

";
} else if ($pass != 'ASDF'){
    echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <h4 class='grey-text' align='center'>Sistema de Login</h4>
                <h5>Senha incorreta, Sr. $nome !</h5>
                <a href='Ex4.php'>Try again</a>
            </div>
        </div>
    </div>
</div> ";
} else // fim da condicao

?>
