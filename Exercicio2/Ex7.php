<?php
include('Ex2-navbar.php');

// INÍCIO DA ATIVIDADE Nº7

echo "
<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <div>
                    <h4 class='grey-text' align='center'>Par ou Ímpar</h4>
                </div>
                <form action='Ex7-1.php' method='post'>
                    <label>Número</label><input type='number' name='numb' placeholder='Insira um número !'></label><br>
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