<?php
//interface.dbdriver.php
interface DBDriver
{
	public function connect();
	public function execute($sql);
}
/*
Interfaces de Objetos permite a criação de código que especifica quais métodos e variáveis uma classe deve implementar, sem ter que definir como esses métodos serão tratados.

Interfaces são definidas usando a palavra-chave 'interface', da mesma maneira que uma classe comum, mas sem nenhum dos métodos ter seu conteúdo definido.

Todos os métodos declarados em uma interface devem ser public, essa é a natureza de uma interface.

implements

Para implementar uma interface, o operador implements é usado. Todos os métodos na interface devem ser implementados na classe; não fazer isso resultará em um erro fatal. Classes podem implementar mais de uma interface se assim for desejado, separando cada interface com uma vírgula. 
*/
?>
