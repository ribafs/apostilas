<?php

#Descricao da Funcao: Funcao para montar os 3 Imput para DIA MES ANO                    
#Autor..............: Alexander Moreira de Morais
#Data Criação.......: 21/09/2005
#Autor da Revisao...: 
#Data Ultima Revisao: 

    // Cria 3 combos com dia, mês e ano

	function imput_date($inicial_nome_variaveis, $dia, $mes, $ano, $ano_ini=1950, $ano_fim=2050 ){
	
		$meses = array(1 => 'Janeiro', 
							'Fevereiro',
							'Março',
							'Abril',
							'Maio',
							'Junho',
							'Julho',
							'Agosto',
							'Setembro',
							'Outubro',
							'Novembro',
							'Dezembro');	
		
		#Verificando se foi passado os parametros Dia/Mes/Ano
		if($dia==0){
			$dia = date('d');
		}
		if($mes==0){
			$mes = date('m');
		}
		if($ano==0){
			$ano = date('Y');
		}
		
		# Obtendo o ultimo dia do mes
		$lastday = mktime(0,0,0,$mes,0,$ano);
		$ultimo_dia = strftime("%d", $lastday);
		
		# Obtendo o ano atual
		$ano_atual = date('Y');
	
		# Mostrando o select para os Dias
		$resultado  = '<select name="'.$inicial_nome_variaveis.'dia">';
		for($i=1; $i <= $ultimo_dia; $i++){
			if($i == $dia){
				$resultado .= '	<option value="'.$i.'" selected>'.$i.'</option>';
			}else{
				$resultado .= '	<option value="'.$i.'">'.$i.'</option>';
			}
		}
		$resultado .= '</select>&nbsp;';
		
		# Mostrando o select para os Meses
		$resultado  .= '<select name="'.$inicial_nome_variaveis.'mes">';
		for($i=1; $i <= 12; $i++){
			if($i == $mes){
				$resultado .= '	<option value="'.$i.'" selected>'.$meses[$i].'</option>';
			}else{
				$resultado .= '	<option value="'.$i.'">'.$meses[$i].'</option>';
			}
		}
		$resultado .= '</select>&nbsp;';
		
		# Mostrando o select para os Anos
		$resultado  .= '<select name="'.$inicial_nome_variaveis.'ano">';
		for($i=$ano_ini; $i <= $ano_fim; $i++){
			if($i == $ano){
				$resultado .= '	<option value="'.$i.'" selected>'.$i.'</option>';
			}else{
				$resultado .= '	<option value="'.$i.'">'.$i.'</option>';
			}
		}
		$resultado .= '</select>&nbsp;';
	
		return $resultado;
	}

print imput_date('aniversario', '03', '08', '1956', $ano_ini=1950, $ano_fim=2050 );
	
#Descricao da Funcao: Funcao para Calcular uma data futura com base na quantidade de dias uteis informada
#Autor..............: Leandro Vieira Pinho @ http://leandrovieira.com/archive/somando-dias-uteis-a-uma-data-especifica-com-php
#Data Criação.......: 05/12/2006
#Autor da Revisao...: 
#Data Ultima Revisao: 

    // Somar dias a uma data
	function somar_dias_uteis($str_data, $int_qtd_dias_somar = 7) {
		// Caso seja informado uma data do MySQL do tipo DATETIME - aaaa-mm-dd 00:00:00
		// Transforma para DATE - aaaa-mm-dd
		$str_data = substr($str_data,0,10);

		// Se a data estiver no formato brasileiro: dd/mm/aaaa
		// Converte-a para o padrão americano: aaaa-mm-dd
		if ( preg_match("@/@",$str_data) == 1 ) {
			$str_data = implode("-", array_reverse(explode("/",$str_data)));
		}

		$array_data = explode('-', $str_data);
		$count_days = 0;
		$int_qtd_dias_uteis = 0;
		while ( $int_qtd_dias_uteis < $int_qtd_dias_somar ) {
			$count_days++;
			if ( ( $dias_da_semana = gmdate('w', strtotime('+'.$count_days.' day', mktime(0, 0, 0, $array_data[1], $array_data[2], $array_data[0]))) ) != '0' && $dias_da_semana != '6' ) {
				$int_qtd_dias_uteis++;
			}
		}
		return gmdate('d/m/Y',strtotime('+'.$count_days.' day',strtotime($str_data)));
	}
	
print somar_dias_uteis('1958-08-03', $int_qtd_dias_somar = 7);

//Funcao para ver a diferenca em dias entre duas datas formato das datas aaaa/mm/dd
function diferenca_dias($data_i, $data_f){
	//numero do dia do ano da data final
	$retorno = getdate(strtotime($data_f));
	$dias_f = $retorno['yday'];
	//numerp do dia do ano da data inicial
	$retorno = getdate(strtotime($data_i));
	$dias_i = $retorno['yday'];
	
	$retorno = $dias_f - $dias_i;
	//Pegando a diferenca com anos diferentes
	$ano_i = substr($data_i, 0, 4);
	$ano_f = substr($data_f, 0, 4);	
	if( ($ano_f - $ano_i) > 0 ){
		//Efetuando a soma de dias do ano no valor total
		for ($ano_i; $ano_i < $ano_f; $ano_i++) {		
			//Verificando se o ano eh bissexto
			if( date('t', mktime(0,0,0,'02','01',$ano_i))==28 ){
				$retorno = $retorno + 365;
			} else {
				$retorno = $retorno + 366;
			}
		}//Fim do for
	}
	return($retorno);
}

print diferenca_dias('1958-01-01','1958-03-08');


//Funcao q retorna o dia de uma data retornada pelo banco de dados
function date_dia($data){
	$dta = strtotime($data);
	return(strftime("%d", $dta));
}
print date_dia('2000-11-04');

//Funcao q retorna o mes de uma data retornada pelo banco de dados
function date_mes($data){
	$dta = strtotime($data);
	return(strftime("%m", $dta));
}
print date_mes('2000-11-04');

//Funcao q retorna o ano de uma data retornada pelo banco de dados
function date_ano($data){
	$dta = strtotime($data);
	return(strftime("%Y", $dta));
}
print date_ano('2000-11-04');

//Funcao para retornar o nome do mes equivalente a um número
function nome_mes($m){
	if(($m > 12) || ($m < 1)){
		$retorno = 'Mês inexistente!';
	} else {
		switch ($m) {
			case 1:
				$retorno = 'Janeiro';
        		break;
			case 2:
				$retorno = 'Fevereiro';
        		break;
			case 3:
				$retorno = 'Março';
        		break;
			case 4:
				$retorno = 'Abril';
        		break;
			case 5:
				$retorno = 'Maio';
        		break;
			case 6:
				$retorno = 'Junho';
        		break;
			case 7:
				$retorno = 'Julho';
        		break;
			case 8:
				$retorno = 'Agosto';
        		break;
			case 9:
				$retorno = 'Setembro';
        		break;
			case 10:
				$retorno = 'Outubro';
        		break;
			case 11:
				$retorno = 'Novembro';
        		break;
			case 12:
				$retorno = 'Dezembro';
        		break;
		}//Fim switch
	}//Fim Else
	return($retorno);
}
print nome_mes('08');

//Funcao para mostrar uma data por extenso do dia atual
function hoje(){
	$dia = date('d');
	$mes = date('m');
	$ano = date('Y');
	$retorno = $dia.' de '.nome_mes($mes).' de '.$ano;
	return($retorno);
}
print hoje();


