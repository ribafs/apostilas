<?php
// Exemplo simples de herança e bem didático
class Pai
{
	public function indexPai(){
			return 'Index pai';
	}
}

class Filho extends Pai
{
	public function indexFilho(){
			return 'Index filho';
	}
}

class Neto extends Filho
{
	public function indexNeto(){
			return 'Index neto';
	}
}
// Vou instanciar a classe Neto e com a instância vou trazer um método da classe pai sem instanciar ele
// E também trazer um método da classe filha sem ter instanciado ela

$neto = new Neto();
print $neto->indexPai();
print '<br>';
print $neto->indexFilho();
print '<br>';
print $neto->indexNeto();
