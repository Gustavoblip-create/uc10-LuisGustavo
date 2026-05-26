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
// -----

class Triangulo extends Forma{
    private $cumprimentobase;
    private $altura;

    public function __construct(float $cumprimentobase, float $altura){
    $this->tipoForma = 'triangulo';
    $this->cumprimentobase = $cumprimentobase;
    $this->altura = $altura;
    }

    public function calculaArea(){
        return ( $this-> cumprimentobase * $this->altura) /2;
    }


}



// --------------

$objquadrado = new Quadrado(15.0,5.5);
$objquadrado->imprimeForma();

$objretangulo = new Retangulo(10, 8);
$objretangulo->imprimeForma();

$objtriangulo = new Triangulo(7,6);
$objtriangulo->imprimeForma();


?>