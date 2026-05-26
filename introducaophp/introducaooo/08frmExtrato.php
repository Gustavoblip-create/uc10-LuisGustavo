<?php
//frmextrato.php
require_once("08conta.php");
require_once("08pessoafisica.php");
require_once("08pessoajuridica.php");
require_once("08itemextrato.php");

session_start();

echo"<h2>Extrato das contas</h2>";

if(isset($_SESSION["contas"] )){
    foreach ($_SESSION["contas"] as $conta){
        $conta->ImprimirExtrato();
        echo "<br></br>";
    }
}else{
    echo"Nnehuma conta cadastrada";
}
echo'<br>
<a href="08menu.html">
    <button>Voltar ao menu</button>
    </a>';

?>