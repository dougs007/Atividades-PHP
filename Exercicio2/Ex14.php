<title>Exercício 14 - PHP</title>

<?php
include('Cabecalho.php');

// INÍCIO DA ATIVIDADE Nº14

echo "
<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <div>
                    <h4 class='grey-text' align='center'>Soma dos 2 maiores</h4>
                </div>
                <form action='Ex14-1.php' method='post'>
                    <label>Nº 1</label><input type='text' name='n1' placeholder='Insira um número !'></label><br>
                    <label>Nº 2</label><input type='text' name='n2' placeholder='Insira um número !'></label><br>
                    <label>Nº 3</label><input type='text' name='n3' placeholder='Insira um número !'></label><br>
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
