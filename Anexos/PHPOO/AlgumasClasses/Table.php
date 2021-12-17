<?php

class Table
{
  public static function openTable($name, $border = 0, $align = 'center'){
    $table = '';
    $table .= "<table name=\"$name\" border=\"$border\" align=\"$align\">\n";
    return $table;
  }

  public static function thTable($nr=1,$value=[]){ // nr precisa ser igual ao número de elementos do array value
    $table = '';
    $table .= "<tr>";
    for($x=0;$x<$nr;$x++){
      $table .="<th>$value[$x]</th>\n";
    }
    $table .="</tr>";
    return $table;
  }

  public static function tdTable($nr=1,$value=[]){
    $table = '';
    $table .= "<tr>";
    for($x=0;$x<$nr;$x++){
      $table .="<td>$value[$x]</td>\n";
    }
    print '</tr>';
    return $table;
  }

  public static function closeTable(){
    $table = '';
    $table .= "</table>";
    return $table;
  }
}

print Table::openTable('tab', 1);
print Table::thTable(3,['Título','Título2','Título3']);
print Table::tdTable(3,['João','Pedro', 'Manoel']);
print Table::closeTable();
