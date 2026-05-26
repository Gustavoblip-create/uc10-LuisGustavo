<?php 
        class PessoaFisica extends pessoa{
            public int $diasTrabalho;
            public float $salario;

            public function __construct(string $numeroCPF, int $diasTrabalho, float $salario){
                // $this->tipo;
                parent :: __construct("CPF",$numeroCPF);
                
                $this-> diasTrabalho = $diasTrabalho;
                $this-> salario= $salario;
            }

            public function calcularenda(){
                return $this-> diasTrabalho * $this->salario;
            }
        }

?>