<?php

class Conta 
{
    protected $saldo;
    
    /**
     * Inicializa a conta com um saldo
     */
    public function __construct($valor)
    {
        $this->saldo = $valor;
    }

    /**
     * Deposita um valor na conta
     */
    public function depositar($valor)
    {
        $this->saldo += $valor;
    }    

    /**
     * Saldo
     */
    public function getSaldo()
    {
        return $this->saldo;
    }    

}

class ContaCorrente extends Conta
{
    /**
     * Saca um valor da conta
     */
    public function sacar($valor)
    {
        // Verifica se existe saldo para realizar o saque
        if($valor < $this->saldo) {
            $this->saldo -= $valor;
        }
    }
}


class ContaPoupanca extends Conta
{
    private $limiteSaque;

    public function __construct($saldo, $limiteSaque)
    {
        parent::__construct($saldo);
        $this->limiteSaque = $limiteSaque;
    }

    /**
     * Saca um valor da conta
     */
    public function sacar($valor)
    {
        // Verifica se existe saldo para realizar o saque
        if($valor < $this->saldo && $valor < $this->limiteSaque) {
            $this->saldo -= $valor;
        }
    }
}

$cc = new ContaCorrente(1000);
$cc->sacar(300);
print $cc->getSaldo();

$p = new ContaPoupanca(1000, 400);
$p->sacar(200);
//print $p->getSaldo();

/*
No exemplo acima criamos duas classes que estendem a classe Conta, ou seja, que herdam as características e métodos da classe pai, podemos observar que definimos uma método sacar com uma uma regra de negócios distinta para cada tipo de conta.

Além disso também criamos um novo atributo para a classe ContaPoupanca, e adicionamos ele a inicialização da classe (método __construct), então chamamos o __construct da classe pai e inicializamos os atributos da classe filha.

https://blog.eximiaweb.com.br/4-conceitos-orientacao-a-objetos/

*/
