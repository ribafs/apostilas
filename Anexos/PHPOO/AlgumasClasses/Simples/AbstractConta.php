<?php 
/*
Classes abstratas
Uma classe abstrata é uma classe que não pode ser instanciada como um objeto diretamente. Ela tem que ser estendida por alguma classe concreta, e quando um objeto desta classe for criado, ele herdará métodos e atributos da classe abstrata.
Podemos ter também métodos abstratos em nossas classes.
Métodos Abstratos
Todo método abstrato precisa, obrigatoriamente, ser implementado na classe filha, ou seja, todas as contas, independentemente do tipo devem possuir as operações básicas de saque, depósito, transferência e consulta. Porém, contas de tipos diferentes podem tratar estas ações de formas diferentes. Por exemplo: um depósito em uma conta poupança gera um certo rendimento ao saldo aplicado - para este caso um método abstrato é uma forma de garantir que este método seja implementado na classe ContaPoupança e em todas as outras classes que estende–lás.
*/

abstract class Conta 
{ 
    protected $agencia; 
    protected $conta; 
    protected $saldo; 
    
    public function __construct($agencia, $conta, $saldo) 
    { 
        $this->agencia = $agencia; 
        $this->conta   = $conta; 
        if ($saldo >= 0) { 
            $this->saldo = $saldo; 
        } 
    } 

    public function getInfo() 
    { 
        return "Agência: {$this->agencia}, Conta: {$this->conta}";
    }

    public function depositar($quantia) 
    { 
        if ($quantia > 0) { 
            $this->saldo += $quantia; 
        } 
    } 
    
    public function getSaldo() 
    { 
        return $this->saldo; 
    } 
    
    abstract function retirar($quantia);
}


class ContaCorrente extends Conta
{
    public function retirar($quantia){
        return $this->saldo = $this->getSaldo() - $quantia;
    }
}

$c = new ContaCorrente('1150', '234.633', 500);
$c->retirar(200);
print 'Saldo de: '.$c->getSaldo();

