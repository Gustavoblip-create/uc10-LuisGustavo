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

class Circulo extends Forma{
    private $raio;
    
    public function __construct(float $raio){
    $this->tipoForma = 'raio';
    $this->raio = $raio;
    
    }

    public function calculaArea(){
        return  pi() * pow($this->raio, 2);


        //ANOTAÇÔES
        //É a função que eleva um número a uma potência.
        // Aqui, $this->raio é o valor do raio do círculo (provavelmente um atributo da classe).
       // O 2 significa "ao quadrado", ou seja, raio × raio.
//     }
 }
}



// --------------

$objcirculo = new Circulo(10);
$objcirculo->imprimeForma();

$objquadrado = new Quadrado(15.0,5.5);
$objquadrado->imprimeForma();

$objretangulo = new Retangulo(10, 8);
$objretangulo->imprimeForma();

$objtriangulo = new Triangulo(7,6);
$objtriangulo->imprimeForma();


?>