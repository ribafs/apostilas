<?php
// abstract.reportgenerator.php

/*
Não é permitido criar uma instância de uma class que foi definida como abstrata, somente extender . Qualquer classe que contém pelo menos um método abstrato deve também ser abstrata. Métodos definidos como abstratos simplesmente declaram a assinatura do método, eles não podem definir a implementação.

Quando uma classe herda uma classe abstrata, todos os métodos marcados como abstratos na declaração da classe-pai devem ser definidos na classe filha; além disso, esses métodos devem ser definidos com a mesma (ou menos restrita) visibilidade. Por exemplo, se um método abstrado é definido como protected, a implementação da função deve ser definida ou como protected ou public, mas não private. 
*/
abstract class ReportGenerator
{
	public function generateReport($resultArray)
	{
		// Escrever o código para processar o resultado do array multidimensional e gerar 
		// o relatório em HTML
		// Este método será usado nas classes que extenderem esta classe
	}
}
// Exemplo de método abstrato
// abstract public function connectDB();
?>

