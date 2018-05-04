<?php
include('Ex2-navbar.php');

// INÍCIO DA ATIVIDADE Nº5

echo "
<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <div>
                    <h4 class='grey-text' align='center'>Douglas Corporate2</h4>
                </div>
                <form action='Ex5-1.php' method='post'>
                    <label>Nome</label><input type='text' name='nome' placeholder='Insira seu nome !'></label><br>
                    <label>Salário</label><input type='number' name='sal' placeholder='Insira seu salário!'></label><br>
                    <button class='btn waves-effect waves-light' type='submit'>Verificar
                        <i class='material-icons'>send</i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

";
?>

