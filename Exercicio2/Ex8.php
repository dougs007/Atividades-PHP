<?php
include('Cabecalho.php');

// INÍCIO DA ATIVIDADE Nº8

echo "
<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <div>
                    <h4 class='grey-text' align='center'>Maior de todos</h4>
                </div>
                <form action='Ex8-1.php' method='post'>
                    <label>Número 1</label><input type='number' name='numb1' placeholder='Insira um número !'></label><br>
                    <label>Número 2</label><input type='number' name='numb2' placeholder='Insira um número !'></label><br>
                    <label>Número 3</label><input type='number' name='numb3' placeholder='Insira um número !'></label><br>
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