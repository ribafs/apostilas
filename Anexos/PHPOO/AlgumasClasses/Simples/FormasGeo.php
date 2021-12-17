<?php 

abstract class Formas 
{ 
    abstract public function calcularArea($lado);
}

class Circulo extends Formas
{
    public function calcularArea($raio)
    {
        return M_PI * $raio;
    }
}

class Quadrado extends Formas
{
    public function calcularArea($lado)
    {
        return $lado * $lado;
    }
}

class Retangulo extends Formas
{
    private $altura = 5;
    public function calcularArea($base)
    {
        return $base * $this->altura;
    }
}

class Triangulo extends Formas
{
    private $altura = 5;
    public function calcularArea($base)
    {
        return ($base * $this->altura)/2;
    }
}

$circulo1= new Circulo();
$cir = $circulo1->calcularArea(5);
print $cir;

echo "<br>";

$quadrado1= new Quadrado();
$qua = $quadrado1->calcularArea(10);
print $qua;

echo "<br>";

$retangulo1= new Retangulo();
$ret = $retangulo1->calcularArea(5);
print $ret;

echo "<br>";

$triangulo1= new Triangulo();
$tri = $triangulo1->calcularArea(20);
print $tri;

?>


