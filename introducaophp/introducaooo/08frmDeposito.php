<?php

//frmdeposito.php

require_once("08conta.php");
require_once("08pessoafisica.php");
require_once("08pessoajuridica.php");
require_once("08itemextrato.php");

session_start();
$ultimaConta=null;

if(isset($_COOKIE["ultimaConta"])){
    $ultimaConta=(int)$_COOKIE["ultimaconta"];
}

// aqui eu estou testando se o cookie chegou nessa pagina
// echo "<pre>";
// print_r($_COOKIE);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Depósito</title>
</head>

<body>

    <h2>Realizar Depósito</h2>

    <?php

    // Verifica se existem contas cadastradas
    if (
        !isset($_SESSION["contas"]) ||
        count($_SESSION["contas"]) == 0
    ) {

        echo "Nenhuma conta cadastrada!";
    } else {

    ?>

        <form action="08deposito1.php" method="post">

            <label>Selecione a Conta:</label>
            <br><br>

            <select name="indiceConta" required>

                <?php

                foreach ($_SESSION["contas"] as $indice => $conta) {

                    // AQUI FOI O QUE EU ADICIONEI
                    // criei essa variavel para controlar qual option vai ficar marcada automaticamente
                    $selected = "";

                    // AQUI FOI OUTRA PARTE QUE EU ADICIONEI
                    // estou verificando se existe o cookie da ultima conta cadastrada
                    // e comparando com a conta atual do foreach
                    if ($ultimaConta !==null &&$ultimaConta==$indice){
                        $selected="selected";
                    }
                    echo '
                    <option value="' . $indice . '" ' . $selected . '>

                        // se forem iguais eu marco essa option automaticamente
                        $selecionado = "selected";
                    }

                       Tipo: ' . $conta->tipoDeConta . ' -
                        Agência: ' . $conta->agencia . ' -
                        Conta: ' . $conta->conta . '
                    </option>';
                }

                ?>

            </select>

            <br><br>

            <label>Valor do Depósito:</label>
            <br><br>

            <input
                type="number"
                name="valor"
                step="0.01"
                required>

            <br><br>

            <button type="submit">
                Depositar
            </button>

        </form>

    <?php
    }
    ?>

    <br><br>

    <a href="08menu.html">
        <button>Voltar ao Menu</button>
    </a>

</body>

</html>