<?php

//Funcao para formatar cgc tipo -> 99.999.999/9999-99
function formata_cgc($numeros){
	$count = 0;
	$retorno = '';
	if(strlen($numeros)==18){
		$retorno = $numeros;
	} else {
		if(strlen($numeros)==14){
			$retorno = substr($numeros, 0, 2).'.'.
			           substr($numeros, 2, 3).'.'.
					   substr($numeros, 5, 3).'/'.
					   substr($numeros, 8, 4).'-'.
					   substr($numeros, 12, 2);
		} else {
			$retorno = '';
		}
	}
	return("$retorno");
}
print formata_cgc('00123123909887');


//Funcao para formatar cpf tipo -> 999.999.999-99
function formata_cpf($numeros){
	$count = 0;
	$retorno = '';
	if(strlen($numeros)==14){
		$retorno = $numeros;
	} else {
		if(strlen($numeros)==11){
			$retorno = substr($numeros, 0, 3).'.'.
			           substr($numeros, 3, 3).'.'.
					   substr($numeros, 6, 3).'-'.
					   substr($numeros, 9, 2);
		} else {
			$retorno = '';
		}
	}
	return("$retorno");
}
print formata_cpf('12104693867');

//Retorna o numero complentando o tamanho com uma determinada qtde de zeros a esquerda
function strzero($valor, $zeros){
	$zeros = $zeros - strlen("$valor");	
	$var = '0';
	for($I=1; $I < $zeros; $I++){
		$var = $var.'0';
	}//fim for
	return("$var$valor");
}

print strzero('123', '5'); // O número terá 5 dígitos completando com zeros à esquerda

