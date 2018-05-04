<title>Exercício 11 - PHP</title>

<?php
include('Cabecalho.php');

// INÍCIO DA ATIVIDADE Nº11

echo "
<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <div>
                    <h4 class='grey-text' align='center'>Peso Ideal</h4>
                </div>
                <form action='Ex11-1.php' method='post'>
                    <label>Nome</label><input type='text' name='nome' placeholder='Insira seu nome !'></label><br>
                    <label>Altura</label><input type='text' name='alt' placeholder='Insira sua nota !'></label><br>
                    <label>Sexo</label><input type='text' name='sex' placeholder='Insira sua nota !'></label><br>
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
