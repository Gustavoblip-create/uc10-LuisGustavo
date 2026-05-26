<?php

// saque.php

require_once("08conta.php");
require_once("08pessoafisica.php");
require_once("08pessoajuridica.php");
require_once("08itemextrato.php");

session_start();

$indiceConta = $_POST["indiceConta"];
$valor = (float) $_POST["valor"];

$conta = $_SESSION["contas"][$indiceConta];

$conta->sacar($valor);

$_SESSION["contas"][$indiceConta] = $conta;

echo "<h2>Saque realizado com sucesso!</h2>";

?>

<br><br>

<a href="08menu.html">
    <button>Voltar ao Menu</button>
</a>