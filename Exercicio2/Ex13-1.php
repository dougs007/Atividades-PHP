<title>Exercício 13 - PHP</title>

<?php
include('Cabecalho.php');

$id = $_POST['id'];

if ($id < '5' && $id >= '1') {
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Douglas Marketplace</h4>
               <h3>Você ainda é novo demais para ter uma categoria !</h3>
               <h4>Tens apenas $id anos guri !</h4>      
               <a href='Ex13.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";

} elseif ($id >= '5' && $id <= '7') {
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Douglas Marketplace</h4>
               <h3>Sua categoria é </h3>
               <h4>Infantil A</h4>      
               <a href='Ex13.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";

} elseif ($id >= '8' && $id <= '10') {
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Douglas Marketplace</h4>
               <h3>Sua categoria é </h3>
               <h4>Infantil B</h4>      
               <a href='Ex13.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";

} elseif ($id >= '11' && $id <= '13') {
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Douglas Marketplace</h4>
               <h3>Sua categoria é </h3>
               <h4>Juvenil A</h4>      
               <a href='Ex13.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";

} elseif ($id >= '14' && $id <= '17') {
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Douglas Marketplace</h4>
               <h3>Sua categoria é </h3>
               <h4>Juvenil B</h4>      
               <a href='Ex13.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";

} elseif ($id > '18') {
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Douglas Marketplace</h4>
               <h3>Sua categoria é </h3>
               <h4>Adulto</h4>      
               <a href='Ex13.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";

}

?>
