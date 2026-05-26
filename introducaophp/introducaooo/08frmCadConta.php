<?php

 //08frmCadConta.php

    require_once("08conta.php");
    require_once("08pessoafisica.php");
    require_once("08pessoajuridica.php");
    require_once("08itemextrato.php");

    // if( !isset($contas) )
    //     $contas = [];

    // Inicia a sessão
    session_start();

    // Verifica se já existe o array na sessão
    if (!isset($_SESSION["contas"])) {
        $_SESSION["contas"] = [];
    }

    // Verifica se veio via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $tipoConta = $_POST["tipoConta"];
        $agencia = $_POST["agencia"];

        // aqui eu troquei o nome da variavel para não conflitar com outras partes do sistema
        // antes eu estava usando $conta para varias coisas diferentes
        $numeroConta = $_POST["conta"];

        $saldoInicial = (float) $_POST["saldoInicial"];

        // Instancia conforme o tipo
        if ($tipoConta == "pessoafisica") {

            $reajuste = (float) $_POST["reajuste"];

            // $contaObj = new Poupanca($agencia, $numeroConta, $saldoInicial, $reajuste);
            // $contas[] = new Poupanca($agencia, $numeroConta, $saldoInicial, $reajuste);

            $_SESSION["contas"][] = new Poupanca(
                $agencia,
                $numeroConta,
                $saldoInicial,
                $reajuste
            );

        } elseif ($tipoConta == "pessoajuridica") {

            $limiteEspecial = (float) $_POST["limiteEspecial"];

            // $contaObj = new Especial($agencia, $numeroConta, $saldoInicial, $limiteEspecial);
            // $contas[] = new Especial($agencia, $numeroConta, $saldoInicial, $limiteEspecial);

            $_SESSION["contas"][] = new Especial(
                $agencia,
                $numeroConta,
                $saldoInicial,
                $limiteEspecial
            );

        } else {

            echo "Tipo de conta inválido!";
            exit;
        }

        // $contas[] = $contaObj;
        // $_SESSION[$contas][] = $contaObj;

        // echo "<h3>Extrato da Conta</h3>";
        // foreach ($_SESSION["contas"] as $v_conta) {
        //     $v_conta->imprimeExtrato();
        //     echo "<br>";
        // }

        // aqui eu estou salvando a ultima conta cadastrada no cookie
        // coloquei "/" para o cookie funcionar no sistema inteiro
        setcookie(
            "ultimaConta",
            $numeroConta,
            time() + 3600,
            "/"
        );

        echo '<br>
               <h2>Conta Cadastrada com Sucesso!!!</h2>';

        // aqui estou verificando se o cookie existe
        if(isset($_COOKIE["ultimaConta"])){

            echo "<br>";

            // aqui estou mostrando o valor salvo no cookie
            echo "Última conta salva no cookie: ";

            echo $_COOKIE["ultimaConta"];
        }

        echo '<br><br>

               <a href="08menu.html">                
                    <button>Voltar ao Menu</button>
               </a>';
    }
?>