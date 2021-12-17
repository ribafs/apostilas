<?php
//class.postgresqldriver.php
include('./interface.dbdriver.php');
include('../abstratas/abstract.reportgenerator.php');

class PostgreSQLDriver extends ReportGenerator implements DBDriver
{
	public function connect()
	{
		// conectar ao banco de dados
	}

	public function execute($consulta)
	{
		// Executar a consulta e mostrar o resultado
	}

	// Não precisamos declarar ou escrever o método generateReport aqui
	// pois este foi extendido da classe abstrata diretamente
}
// Do livro "Object-Oriented Programming with PHP5"
?>
