<?php
    $dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'root';
	$database = 'estoque';

	// backup all tables in db	
	function backup_tables($dbhost,$dbuser,$dbpass,$database){
    	//connect to db
    	$link = mysqli_connect($dbhost,$dbuser,$dbpass);
        mysqli_set_charset($link,'utf8');
        mysqli_select_db($link,$database);

        //get all of the tables
        $tables = array();
        $result = mysqli_query($link, 'SHOW TABLES');

        while($row = mysqli_fetch_row($result))
        {
            $tables[] = $row[0];
        }

        //disable foreign keys (to avoid errors)
        $return = 'SET FOREIGN_KEY_CHECKS=0;' . "\r\n";
        $return.= 'SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";' . "\r\n";
        $return.= 'SET AUTOCOMMIT=0;' . "\r\n";
        $return.= 'START TRANSACTION;' . "\r\n";

        //cycle through
        foreach($tables as $table)
        {
            $result = mysqli_query($link, 'SELECT * FROM '.$table);
            $num_fields = mysqli_num_fields($result);
            $num_rows = mysqli_num_rows($result);
            $i_row = 0;

            //$return.= 'DROP TABLE '.$table.';'; 
            $row2 = mysqli_fetch_row(mysqli_query($link,'SHOW CREATE TABLE '.$table));
            $return.= "\n\n".$row2[1].";\n\n"; 

            if ($num_rows !== 0) {
                $row3 = mysqli_fetch_fields($result);
                $return.= 'INSERT INTO '.$table.'( ';
                foreach ($row3 as $th) 
                { 
                    $return.= '`'.$th->name.'`, '; 
                }
                $return = substr($return, 0, -2);
                $return.= ' ) VALUES';

                for ($i = 0; $i < $num_fields; $i++) 
                {
                    while($row = mysqli_fetch_row($result))
                    {
                        $return.="\n(";
                        for($j=0; $j<$num_fields; $j++) 
                        {
                            $row[$j] = addslashes($row[$j]);
                            $row[$j] = preg_replace("#\n#","\\n",$row[$j]);
                            if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                            if ($j<($num_fields-1)) { $return.= ','; }
                        }
                        if (++$i_row == $num_rows) {
                            $return.= ");"; // last row
                        } else {
                            $return.= "),"; // not last row
                        }   
                    }
                }
            }
            $return.="\n\n\n";
        }

        // enable foreign keys
        $return .= 'SET FOREIGN_KEY_CHECKS=1;' . "\r\n";
        $return.= 'COMMIT;';

		$date = date("Y-m-d_H");
        //save file
        $dir = dirname(__FILE__);
		$db = 'teste.sql';

        $handle = fopen($db,'w+');
        fwrite($handle,$return);
        fclose($handle);
	}

	// Créditos: http://stackoverflow.com/questions/81934/easy-way-to-export-a-sql-table-without-access-to-the-server-or-phpmyadmin
	// \Backup dpo Banco

// Call function backup_tables
backup_tables($dbhost,$dbuser,$dbpass,$database);

