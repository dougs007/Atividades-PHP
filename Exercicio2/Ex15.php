<title>Exercício 15 - PHP</title>

<?php
include('Ex2-navbar.php');

// INÍCIO DA ATIVIDADE Nº15

echo "
<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <div>
                    <h4 class='grey-text' align='center'>IESB</h4>
                </div>
                <form action='Ex15-1.php' method='post'>
                    <label>Nome</label><input type='text' name='nome' placeholder='Insira seu nome !'></label><br>
                    <label>Nota 1</label><input type='text' name='n1' placeholder='Insira sua nota !'></label><br>
                    <label>Nota 2</label><input type='text' name='n2' placeholder='Insira sua nota !'></label><br>
                    <label>Nota 3</label><input type='text' name='n3' placeholder='Insira sua nota !'></label><br>
                    <label>Média de Exercícios</label><input type='text' name='mex' placeholder='Insira sua média 
                    de exercícios !'></label><br>
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
