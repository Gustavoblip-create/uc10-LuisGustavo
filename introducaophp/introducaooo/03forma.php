<?php 

        abstract class forma{
            public $tipoForma = 'forma Abstrata';

            public function imprimeForma(){
                echo $this-> tipoForma . ' com Área de : ' . $this-> calculaArea(); 
            
            }
             abstract public function calculaArea();
        }
        //criando uma herança entre a classe base/forma e a classe filha Quadrado
        
        class Quadrado extends Forma{
          
        //declarando o atributo
            public $lado;        
            
            //declaração do construtor
            public function _construct(float $varLado){
                $this->tipoForma = 'Quadrado';
                $this-> lado = $varLado;
            }
            
            //implemmentando o método abstarto da classe base
            public function calculaArea()
            {
              return $this-> lado * $this-> lado;
            } 
        }

        //instanciaçao da classe
        $obj = new Quadrado(10.0);
       
        //atribuir valor do atributo
        
        $obj->lado = 10;
        $obj-> imprimeForma();
?>