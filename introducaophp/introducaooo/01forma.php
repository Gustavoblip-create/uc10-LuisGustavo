<?php 

        class forma{
            public $tipoForma = 'forma Abstrata';

            public function imprimeForma(){
                echo $this-> tipoForma;
            
            }
        }

        //instanciaçao da classe
        $obj = new Forma();

        $obj-> imprimeForma();
?>