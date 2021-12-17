<?php
/*
Traits
Traits, a partir do PHP 5.4, nos proporcionam uma maneira simples e objetiva de reaproveitamento de código, pois são como classes onde usamos a palavra reservada trait, então escrevemos os métodos que queremos. E para usarmos um trait em uma classe usamos a palavra USE.
Uso de Traits
Note que o método getSaldo() foi reescrito dentro do Trait, ou seja, sobrescreverá os métodos da classe base (pai).
Podemos ainda usar múltiplos traits em nossas classes
Uso de Múltiplos Traits
Desta vez temos dois traits com nomes diferentes, e note que sobrescrevemos o método getSaldo() novamente no trait consultaExtrato.
*/
  class Conta {

    public $saldo = 0;

    public function getSaldo() {
      return "Saldo Atual: {$this->saldo}";
    }
  }

  trait Acoes {

    public function getSaldo(){
      return "Saldo Disponivel: {$this->saldo}";
    }

    public function depositar($valor){
      $this->saldo += $valor;
    }

    public function sacar($valor){
      if($this->saldo >= $valor){
        $this->saldo -= $valor;
      }
    }
  }

  class ContaCorrente extends Conta{
    use Acoes;
  }

  $o = new ContaCorrente();
  $o->depositar(500);
  $o->sacar(200);
  $o->getSaldo();

  // Saldo Disponivel: 300
?>

<?php
  class Conta {
    public $saldo = 0;
    public function getSaldo(){
      echo "Saldo Atual: {$this->saldo}";
    }
  }

  trait Acoes {

    public function depositar($valor){
      $this->saldo += $valor;
    }

    public function sacar($valor){
      if($this->saldo >= $valor){
        $this->saldo -= $valor;
      }
    }
  }

  trait consultaExtrato{

    public function getSaldo(){
      echo "Saldo Disponivel para saque:{$this->saldo}<br>";
    }

    public function gerarExtrato($periodo){
      echo "Gerando extrato período $periodo aguarde...";
    }
  }

  class ContaCorrente extends Conta{
    use Acoes, consultaExtrato;
  }

  $o = new ContaCorrente();
  $o->depositar(500);
  $o->sacar(200);
  $o->getSaldo();
  $o->gerarExtrato('20/01/2013');
?>

