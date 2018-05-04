<?php
include('Cabecalho.php');

// INÍCIO DA ATIVIDADE Nº3

echo "
<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <div>
                    <h4 class='grey-text' align='center'>Calculador de Médias</h4>
                </div>
                <form action='Ex3-1.php' method='post'>
                    <label>Nota 1</label><input type='number' name='n1' placeholder='Insira sua 1º nota !'></label><br>
                    <label>Nota 2</label><input type='number' name='n2' placeholder='Insira sua 2º nota !'></label><br>
                    <label>Nota 3</label><input type='number' name='n3' placeholder='Insira sua 3º nota !'></label><br>
                    <label>Nota 4</label><input type='number' name='n4' placeholder='Insira sua 4º nota !'></label><br>
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

