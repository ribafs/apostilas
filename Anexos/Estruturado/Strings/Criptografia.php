<?php

//Funcao para encriptar uma determinada string
function encriptar($txt){
    $count = 0;
    $resposta = ''; 
    while($count < strlen($txt)){
		$texto = substr($txt, $count, 1);
		/*
		$resposta = $resposta.chr(ord($texto)+15);
		*/
		$texto = ord($texto);
		if(strlen($texto)<3){
		 $texto = '0'.$texto;
		}
		$resposta = $resposta.$texto;
        $count++;
    }
    return($resposta);
}

//Funcao para desencriptar uma determinada string
function desencriptar($txt){
    $count = 0;
    $resposta = ''; 
    while($count < strlen($txt)){
		$texto = substr($txt, $count, 3);
		/*
		$resposta = $resposta.chr(ord($texto)-15);
		*/
		$resposta = $resposta.chr($texto);
        $count = $count+3;
    }
    return($resposta);
}


