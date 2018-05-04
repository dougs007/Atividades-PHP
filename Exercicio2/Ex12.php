<title>Exercício 10 - PHP</title>

<?php
include('Ex2-navbar.php');

// INÍCIO DA ATIVIDADE Nº12

echo "
<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <div>
                    <h4 class='grey-text' align='center'>Douglas Marketplace</h4>
                </div>
                <form action='Ex12-1.php' method='post'>
                    <label>Código</label><input type='number' name='cod' placeholder='Insira o código do seu produto !'></label><br>
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
