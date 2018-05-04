<?php
include('Ex2-navbar.php');

//inicio das variaveis
$nome = $_POST['nome'];
$sex = $_POST['sex'];
$civ = $_POST['civ'];

//inicio da condicao
if ($sex == 'f' || $sex == 'feminino') {
    echo "
<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                    <h4 class='grey-text' align='center'>Pesquisa</h4>
                    <h5>Passa o Zap Zap, princesa $nome ?</h5>
                        <label>Zap</label><input type='number' name='numb' placeholder=''></label><br>
                    <button class='btn waves-effect waves-light' type='submit'>Send
                        <i class='material-icons'>send</i>
                    </button>
                        <a href='Ex6.php'>Voltar</a>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div> 
    ";
// SE FOR FEMININO E CASADA
    if ($civ == 'casada') {
        echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                    <h4 class='grey-text' align='center'>Pesquisa</h4>
                  <form action='Ex6-2.php' method='post'>
                        <label>Tempo</label><input type='number' name='numb' placeholder='Insira o tempo de casada !'></label><br>
                    <button class='btn waves-effect waves-light' type='submit'>Verificar
                        <i class='material-icons'>send</i>
                    </button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div> 

    
    ";
    }

}else if ($sex != 'f' || $sex == 'feminino') {
    // CASO O SEXO NÃO SEJA O FEMININO
    echo "

<div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
                <h4 class='grey-text' align='center'>Pesquisa</h4>
                <h5>Obrigado por participar da pesquisa Sr. $nome</h5>
                <a href='Ex6.php'>Voltar</a>
            </div>
        </div>
    </div>
</div> ";
} else // fim da condicao

?>
