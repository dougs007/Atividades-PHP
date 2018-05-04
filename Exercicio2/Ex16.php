<title>Exercício 16 - PHP</title>

<?php
include('Ex2-navbar.php');

// INÍCIO DA ATIVIDADE Nº16

echo "
<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <div>
                    <h4 class='grey-text' align='center'>Douglas Corporate X</h4>
                </div>
                <form action='Ex16-1.php' method='post'>
                    <label>Nome</label><input type='text' name='nome' placeholder='Insira seu nome !'></label><br>
                    <label>Salário Mínimo</label><input type='text' name='salmin'></label><br>
                    <label>Horas Trabalhadas</label><input type='text' name='htrab'></label><br>
                    <label>Nº de Dependentes</label><input type='text' name='ndep'></label><br>
                    <label>Nº de Horas Extras</label><input type='text' name='hex'></label><br>
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
