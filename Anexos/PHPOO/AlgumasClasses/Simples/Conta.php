<?php
Class Conta
{
    public $saldo = 0;
    public $titular;

    function depositar($valor){
      $this->saldo += $valor;
    }

    function sacar($valor){
      if(($this->saldo > 0) && ($this->saldo >= $valor))
      {
        $this->saldo -= $valor;
      }else{
        echo "Saldo insuficiente";
      }
    }

    function verSaldo(){
      echo "Saldo Atual:".$this->saldo. "<br>";
    }
  }

  $novaConta = new Conta();
  $novaConta->verSaldo();
  $novaConta->depositar(500);
  $novaConta->verSaldo();
  $novaConta->sacar(150);
  $novaConta->verSaldo();
?>

