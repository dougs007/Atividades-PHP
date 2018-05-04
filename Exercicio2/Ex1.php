<?php
include('Ex2-navbar.php');

// INÍCIO DA ATIVIDADE Nº1

echo "
<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <div>
                    <h4 class='grey-text' align='center'>Maioridade Penal</h4>
                </div>
                <form action='Ex1-1.php' method='post'>
                    <label>IDADE</label><input type='number' name='idade' placeholder='Insira sua Idade'></label><br>
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