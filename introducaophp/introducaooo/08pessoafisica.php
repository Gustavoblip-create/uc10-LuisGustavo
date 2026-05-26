<?php 
//pessoa fisica.php
        require_once '08conta.php';

        class Poupanca extends Conta{

            private $reajuste;


            public function __construct($agencia,$conta,$saldoInicial,$reajuste){
                    parent::__construct("Poupanca" , $agencia,$conta,$saldoInicial);
                    $this->reajuste=$reajuste;
                    $this->depositar($saldoInicial);
                    // parent :: incluimovimentacao(new ItemExtrato("Abertura da conta",$saldoInicial));
            } 

            public function calculaSaldo()
            {
                return $this->saldo() + ($this->saldo()  * $this->reajuste);
            }

          
        }
?>