<?php

//index.php

session_start();

// Uma sessão é uma forma de o sistema guardar informações do usuário enquanto ele navega pelo site.

// esta função vai criar aqui no meu codigo um arquivo no sevidor, este arquivo vai conter os dados da sessão

// Envia um identificador (ID) para o navegador
// Esse ID fica armazenado em um cookie chamado normalmente PHPSESSID

// Resumindo
// Dados da sessão → ficam no servidor
// Navegador → guarda só o ID da sessão
// O ID conecta o usuário aos dados salvos



require("08pessoafisica.php"); //aqui eu estou 'requisitando minhas duas classes pesosa fisica e juridica
require("08pessoajuridica.php");


require("08itemextrato.php");

//parte do meu formulario
if ($_POST) { //aqui é a parte onde eu estou conferindo se veio dados

    $tipo = $_POST['tipo']; //aqui ele pega os tipo dados 
    $agencia = $_POST['agencia'];//aqui estou pegando os dados
    $conta = $_POST['conta'];//dados de conta
    $saldo = (float) $_POST['saldo']; //dados de saldo

    if ($tipo == "poupanca") {//aqui meu codigo se pergunta s eé poupanca
        $reajuste = (float) $_POST['reajuste'];
        $banco = new Poupanca($agencia, $conta, $saldo, $reajuste);
        //aqui meu codigo pega todas s informaçoes recebida, e se pergunta é poupança? se for ele cai no if e adiciona meu reajuste, se não for ele cai pro meu else
    } else {
        $limite = (float) $_POST['limite'];
        $banco = new Especial($agencia, $conta, $saldo, $limite);
    }

    //aqui estou adicionando meu depositar separado como porfessor pediu

     if (!empty($_POST['deposito'])) {
        $banco->depositar((float) $_POST['deposito']);
    }

    echo "<h3>Conta criada:</h3>";
    $banco->ImprimirExtrato();

    return;
}

    //depois do meu condicional if else, ele pula para ca se tudo deu certo, jogaa menssagem na tela, e ultiliza minha fubncao imprimir extrato
    // echo "<h3>Conta criada pelo formulário:</h3>";
    // $banco->ImprimirExtrato();

    return; //aqui ele retorna rpo process, observação importane, ele para no return e só retorna , pois a a aprte daqui para baixo foi meu primeiro codigo, que não ia fazer oque e u precisava para o formulario

// }

//daqui para baixo, eu não apaguei para ficar de explo da atividade , pois refatorei lá em cima e não precisava dessa parte
require("08pessoafisica.php");
require("08pessoajuridica.php");

$banco = new Especial("0055-2", "75588-42", 2300.25, 5000.00);
$banco->depositar(1500.00);
$banco->ImprimirExtrato();
echo "-----------------------------------------------";
echo "<br>";





$banco_2 = new Poupanca("0002-7" , "75588-42", 755.54 , 0.0055);
$banco_2 ->depositar(1500.00);
$banco_2 ->ImprimirExtrato();
