# Arrays multidimensionais

Arrays são como tabelas, com linhas e colunas. Mesmo que tenha apenas uma única linha, tem a linha e as colunas desta linha.

Array/matriz - é um mapa ou conjunto ordenado de pares de chaves e valores.

Um array no PHP é na verdade um mapa ordenado. Um mapa é um tipo que relaciona valores a chaves.

Array vazio

$ar = array();

Funções nativas do PHP para arrays:

is_array() - checar se uma variável contém um array e retorna true ou false.

https://phpro.org/tutorials/Introduction-To-Arrays.html

Criar e acessar

Nome - notas

chave - nome
valor - nota-provas
        nota-final

```php
$notas = [
    'joao' => [
        'nota-provas' => [4, 5, 6],
        'nota-final' => 5
    ],
    'maria' => [
        'nota-provas' => [7, 5, 6],
        'nota-final' => 6
    ],
    'omar' => [
        'nota-provas' => [4, 5, 3],
        'nota-final' => 4
    ],
    'gabriela' => [
        'nota-provas' => [8, 7, 9],
        'nota-final' => 8
    ],
    'daniel' => [
        'nota-provas' => [2, 1, 3],
        'nota-final' => 2
    ],
    'lucia' => [
        'nota-provas' => [10, 8, 9],
        'nota-final' => 9
    ]
];

// nota final do aluno joão
echo $notas['joao']['nota-final']; // exibe 5

// Nota da primeira prova do aluno joão
echo $notas['joao']['nota-prova'][0] // exibe 4
echo $notas['joao']['nota-prova'][2] // exibe 6


foreach ($array as $r => $k)
{        
}
```
Tem que utilizar um foreach que pode resgatar inclusive o indice, exemplo:
```php
foreach ($array as $r => $k)
{
}
```
onde o $r é o índice e o $k é o valor respectivo, só que no seu exemplo tem que criar dois foreach, porque é um array que contem array e para buscar o índices do array mais interno, utilize a técnica acima, exemplo:
```php
<?php

$Array = array(
    array("Conta"=>"FRANCIELE OLIVEIRA", "CPF"=>"","Telefone Res."=>'(00) 0000-0000'),
    array("Conta"=>"BEATRIX BEHN", "CPF" => "","Telefone Res."=>'(00) 0000-0000')
);

foreach ($Array as $row)
{
    foreach($row as $i => $a)
    {
        echo '<div>'. $i." ".$a .'</div>';
    }
}


 $cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
```
Now the two-dimensional $cars array contains four arrays, and it has two indices: row and column.

To get access to the elements of the $cars array we must point to the two indices (row and column):

Example
```php
<?php
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?> 

 <?php
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?> 

$index = 0;
foreach($data as $key=>$val) {
    // Use $key as an index, or...

    // ... manage the index this way..
    echo "Index is $index\n";
    $index++;
}

$array = array( 'cat' => 'meow', 'dog' => 'woof', 'cow' => 'moo', 'computer' => 'beep' );
foreach( array_keys( $array ) as $index=>$key ) {

    // display the current index + key + value
    echo $index . ':' . $key . $array[$key];

    // first index
    if ( $index == 0 ) {
        echo ' -- This is the first element in the associative array';
    }

    // last index
    if ( $index == count( $array ) - 1 ) {
        echo ' -- This is the last element in the associative array';
    }
    echo '<br>';
}
```


