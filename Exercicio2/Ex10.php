<title>Exercício 10 - PHP</title>

<?php
include('Ex2-navbar.php');

// INÍCIO DA ATIVIDADE Nº10

echo "
<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <div>
                    <h4 class='grey-text' align='center'>3 Inteiros - Ordem Decrescente</h4>
                </div>
                <form action='Ex10-1.php' method='post'>
                    <label>Número 1</label><input type='number' name='n1' placeholder='Insira um número !'></label><br>
                    <label>Número 2</label><input type='number' name='n2' placeholder='Insira um número !'></label><br>
                    <label>Número 3</label><input type='number' name='n3' placeholder='Insira um número !'></label><br>
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
