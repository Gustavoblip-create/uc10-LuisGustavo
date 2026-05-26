<?php 
//conta.php

abstract class Conta {

    public $tipoDeConta;
    public $agencia;
    public $conta;

    private $saldo;

    private array $movimentacao = [];

    public function __construct(
        $tipoDeConta,
        $agencia,
        $conta,
        $saldoInicial
    ){

        $this->tipoDeConta = $tipoDeConta;
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldoInicial;
    }

    public function ImprimirExtrato(){

        echo "<b>Tipo:</b> {$this->tipoDeConta}<br>";

        echo "<b>Agência:</b> {$this->agencia}<br>";

        echo "<b>Conta:</b> {$this->conta}<br>";

        echo "<b>Saldo:</b> R$ " .
        number_format(
            $this->calculaSaldo(),
            2,
            ',',
            '.'
        ) . "<br>";

        foreach($this->movimentacao as $itemextrato){

            echo "<br> " .
            $itemextrato->imprimeItem();
        }
    }

    public function depositar($valor){

        $this->saldo += $valor;

        $this->incluimovimentacao(
            new ItemExtrato(
                "Depósito",
                $valor
            )
        );
    }

    public function saque($valor){

        $this->saldo -= $valor;

        $this->incluimovimentacao(
            new ItemExtrato(
                "Saque",
                $valor
            )
        );
    }

    public function saldo(){

        return $this->saldo;
    }

    public function incluimovimentacao(
        ItemExtrato $item
    ){

        $this->movimentacao[] = $item;
    }

    abstract protected function calculaSaldo();
}

?>