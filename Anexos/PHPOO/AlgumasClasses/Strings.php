<?php

class Strings {

    // Retornar uma substring: $s->subString('abcdef', 1, 3); // $ini começa com 0 e pode ser negativo
    public function subString(string $string, int $ini, int $amount){
        $result = substr($string, $ini, $amount);
        return $result;
    }

    // procurar substring em string e sobrescrever por outra substring: $s->stringReplace('programador', 'desenvolvedor', 'Olá programador');
    public function stringReplace(string $search, string $replace, string$string){
        $result = str_replace($search,$replace,$string);
        return $result;
    }

    // Retornar posição de uma substring numa string: //$s->posString('abcdef', 'ef');
    public function stringPos(string $string, string $findMe){
        $position = strpos($string, $findMe);
        if ($position === false) {
            return false;
        } else {
            return true;
        }
    }

    // Contar quantas vezes uma substring aparece numa string: $s->stringCount('abcdefaa', 'a');
    public function stringCount(string $string, string $findMe){
        $result = substr_count($string, $findMe);
        if($result === 0){
            return false;
        }else{
            return true;        
        }
    }

    // Retornar um caractere de uma string pela sua pocição: print $s->stringFirstChar('bcdefaa', 4);
    public function stringFirstChar(string $string, int $charPos=0){
        $result = $string[$charNumber];
        return $result;
    }

    // Validação de caracteres como alfanuméricos
    public function stringAlphaNum(string $string){
        $result = ctype_alnum($string);
        if($result){
            return true;
        }else{
            return false;
        }            
    }

    // Validar se string contém somente caracteres alfabéticos
    public function stringAlpha(string $string){
        $result = ctype_alpha($string);
        if($result){
            return true;
        }else{
            return false;
        }            
    }

    // Validar se string contém somente dígitos/algarismos: $s->stringDigit('adc34');
    public function stringDigit(string $string){
        $result = ctype_digit($string);
        if($result){
            return true;
        }else{
            return false;
        }            
    }

    // Checar se string contém somente caracteres alfabéticos e minúsculos
    public function stringLower(string $string){
        $result = ctype_lower($string);
        if($result){
            return true;
        }else{
            return false;
        }            
    }

    // Checar se string contém somente caracteres alfabéticos e minúsculos: print $s->stringSpace(' ');
    public function stringSpace(string $string){
        $result = ctype_space($string);
        if($result){
            return true;
        }else{
            return false;
        }            
    }

    // Checar se string contém somente caracteres alfabéticos e maiúsculos
    public function stringUpper(string $string){
        $result = ctype_upper($string);
        if($result){
            return true;
        }else{
            return false;
        }            
    }

    // Checar tipo de variável: $var = 123; $s->varType($var);
    public function varType($variable){
        switch ($variable) {
         case is_array($variable):
            echo 'array';
            break;
        case is_bool($variable):
            echo 'boolean';
            break;
        case is_double($variable):
            echo 'double';
            break;
        case is_float($variable):
            echo 'float';
            break;
        case is_int($variable):
            echo 'int';
            break;
        case is_integer($variable):
            echo 'integer';
            break;
        case is_long($variable):
            echo 'long';
            break;
        case is_null($variable):
            echo 'null';
            break;
        case is_numeric($variable):
            echo 'numeric';
            break;
        case is_object($variable):
            echo 'object';
            break;
        case is_real($variable):
            echo 'real';
            break;
        case is_resource($variable):
            echo 'resource';
            break;
        case is_string($variable):
            echo 'string';
            break;
        default:
            echo 'no valid type';
            break;      
        }
    }

    // Contar palavras de uma string/frase
    public function stringWordCount(string $string){
        $result = str_word_count($string);
        return $result;
    }

}

$s = new Strings();

print $s->stringWordCount('apenas um teste seu');

