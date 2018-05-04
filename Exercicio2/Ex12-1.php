<title>Exercício 12 - PHP</title>

<?php
include('Cabecalho.php');

//inicio das variaveis
$cod = $_POST['cod'];

//inicio da condicao
if ($cod == '1') {
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Douglas Marketplace</h4>
               <h2>O tipo do seu produto é : </h2>" . "<br>;
               <h3>Alimento não-perecível</h3>      
               <a href='Ex12.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>     
    ";
} elseif ($cod >= '2' && $cod <= '4') {
    echo "<h2>O tipo do seu produto é : </h2>" . "<br>";
    echo "<h3>Alimento perecível</h3>";
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Douglas Marketplace</h4>
               <h2>O tipo do seu produto é : </h2>" . "<br>;
               <h3>Alimento perecível</h3>      
               <a href='Ex12.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>
";
} elseif ($cod >= '5' && $cod <= '6') {
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Douglas Marketplace</h4>
               <h2>O tipo do seu produto é : </h2>" . "<br>;
               <h3>Vestuário</h3>      
               <a href='Ex12.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>
";
} elseif ($cod == '7') {
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Douglas Marketplace</h4>
               <h2>O tipo do seu produto é : </h2>" . "<br>;
               <h3>Higiene Pessoal</h3>      
               <a href='Ex12.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>
    ";
} elseif ($cod >= '8' && $cod <= '15') {
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Douglas Marketplace</h4>
               <h2>O tipo do seu produto é : </h2>
               <h3>Limpeza e utensílios domésticos</h3>      
               <a href='Ex12.php'>Voltar</a>
            </div>
        </div>
    </div>
</div> ";

} else
    echo "
    <div class='row'>
    <div class='col s10 offset-s1'>
        <div class='card'>
            <div class='card-content'>
               <h4 class='grey-text' align='center'>Douglas Marketplace</h4>
               <h1>Código Invalido<h1><br>
               <h5><a href='Ex12.php'>Voltar</a></h5>
            </div>
        </div>
    </div>
</div> ";
?>
