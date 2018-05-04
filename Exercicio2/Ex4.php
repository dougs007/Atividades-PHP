<?php
include('Cabecalho.php');

// INÍCIO DA ATIVIDADE Nº4

echo "
<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <div>
                    <h4 class='grey-text' align='center'>Sistema de Login</h4>
                </div>
                <form action='Ex4-1.php' method='post'>
                    <label>Nome</label><input type='text' name='nome' placeholder='Insira seu nome !'></label><br>
                    <label>Senha</label><input type='password' name='pass' placeholder='Insira sua senha !'></label><br>
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
