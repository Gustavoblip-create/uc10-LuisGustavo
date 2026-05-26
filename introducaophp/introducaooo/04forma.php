<?php 

abstract class Forma {
    public $tipoForma = 'Forma Abstrata';

    public function imprimeForma(){
        echo $this->tipoForma . ' com Área de: ' . $this->calculaArea() . "<br>";
    }

    abstract public function calculaArea();
}

// ------------
class Quadrado extends Forma {
    public $lado;

    public function __construct(float $varLado){
        $this->tipoForma = 'Quadrado';
        $this->lado = $varLado;
    }

    public function calculaArea(){
        return $this->lado * $this->lado;
    }
}

// ------------
class Retangulo extends Forma {
    public $base;
    public $altura;

    public function __construct(float $base, float $altura){
        $this->tipoForma = 'Retângulo';
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calculaArea(){
        return $this->base * $this->altura;
    }
}

// --------------
$q = new Quadrado(10);
$q->imprimeForma();

$retangulo = new Retangulo(5, 8);
$retangulo->imprimeForma();

?>