<?php
//frmsaque.php
require_once("08conta.php");
require_once("08pessoafisica.php");
require_once("08pessoajuridica.php");
require_once("08itemextrato.php");

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Saque</title>
</head>

<body>

<h2>Realizar Saque</h2>

<?php

if(
    !isset($_SESSION["contas"]) ||
    count($_SESSION["contas"]) == 0
){
    echo "Nenhuma conta cadastrada!";
}
else{

?>

<form action="08saque.php" method="post">

<select name="indiceConta" required>

<?php

foreach($_SESSION["contas"] as $indice => $conta){

    echo '
    <option value="' . $indice . '">
        Tipo: ' . $conta->tipoDeConta . ' -
        Agência: ' . $conta->agencia . ' -
        Conta: ' . $conta->conta . '
    </option>';
}

?>

</select>

<br><br>

<input
type="number"
name="valor"
step="0.01"
required>

<br><br>

<button type="submit">
    Sacar
</button>

</form>

<?php
}
?>

</body>
</html>