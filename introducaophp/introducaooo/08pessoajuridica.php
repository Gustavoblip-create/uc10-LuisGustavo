<?php 

//pessoa juridica.php
        require_once '08conta.php';

        class Especial extends Conta{
                private $limiteEspecial;

                public function __construct($agencia,$conta,$saldoInicial,$limiteEspecial){
                parent::__construct( "Especial",$agencia,$conta,$saldoInicial);
                $this->limiteEspecial = $limiteEspecial;
                // parent :: incluimovimentacao(new ItemExtrato("Abertura da conta",$saldoInicial));
                $this->depositar($saldoInicial);
                }
                   
                public function calculaSaldo()
                {
                     return $this->saldo() + $this->limiteEspecial;
                }
                // public function getLimite(){
                //     return $this->limiteEspecial;
                // }

        }
?>