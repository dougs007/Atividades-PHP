<title>Exercício 13 - PHP</title>

<?php
include('Cabecalho.php');

// INÍCIO DA ATIVIDADE Nº13

echo "
<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <div>
                    <h4 class='grey-text' align='center'>Olimpíadas Aquáticas</h4>
                </div>
                <form action='Ex13-1.php' method='post'>
                    <label>Idade</label><input type='number' name='id' placeholder='Insira sua idade !'></label><br>
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
