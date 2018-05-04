<?php
include('Cabecalho.php');

// INÍCIO DA ATIVIDADE Nº6

echo "
<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <div>
                    <h4 class='grey-text' align='center'>Pesquisa</h4>
                </div>
                <form action='Ex6-1.php' method='post'>
                    <label>Nome</label><input type='text' name='nome' placeholder='Insira seu nome !'></label><br>
                    <label>Sexo</label><input type='text' name='sex' placeholder='Insira seu sexo !'></label><br>
                    <label>Estado Civil</label><input type='text' name='civ' placeholder='Insira seu estado civil !'></label><br>
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

