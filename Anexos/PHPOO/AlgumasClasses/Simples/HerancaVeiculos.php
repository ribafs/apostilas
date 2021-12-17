<?php

class Veiculos
{
  protected $numRodas;
  protected $numPortas;
  protected $cor;
  protected $fabricante;
  protected $modelo;
  protected $chassi;
  protected $preco;

  protected function mostrarPreco(){
    return $this->preco;
  }

  protected function funcionar(){
    return 'Funcionando ...';
  }

}

// Qualquer classe que extenda esta herdará todos seus métodos e propriedades

class Motocicletas extends Veiculos
{
  protected function testes(){
    $this->numRodas = 2;
    $this->numPortas = 0;
    $this->cor = 'preta';
    $this->fabricante = 'Honda';
    $this->modelo = 'ML 125';
    $this->preco = 65000;
    print $this->numRodas;
    print '<hr>';
    print $this->mostrarPreco();
  }

  public function cor(){
    $this->cor = 'preta';
    print $this->cor;
  }
}

$moto = new Motocicletas();

$moto->cor();

class Testes
{
  public function testes(){
    $this->numRodas = 2;
print '<hr>';
    print $this->numRodas;
  
  }
}
$veiculo = new Veiculos();
$veiculo->numRodas;
// Receberá o erro: Fatal error: Uncaught Error: Cannot access protected property Veiculos::$numRoda

