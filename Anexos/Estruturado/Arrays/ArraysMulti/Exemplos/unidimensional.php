<?php
// Array unidimensional
/*
$client = array(1, 'José', 11);
*/

$client = [1, 'José', 11];

print '<table border="1">
<tr><td><b>Código</td><td><b>Nome</td><td><b>Idade</td></tr>
<tr>';
foreach ($client as $element){
    print '<td>'.$element.'</td>';
}
print '</tr></table>';


