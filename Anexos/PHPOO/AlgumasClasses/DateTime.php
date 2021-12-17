<?php

class DateTime {

    // Checar datas no formato dd/mm/yyyy
    public function dateCheck($date){
	    $date = explode("/","$date");
	    $d = $date[0];
	    $m = $date[1];
	    $y = $date[2];

	    // 1 = true (válida), 0 = false (inválida)

	    if (checkdate($m,$d,$y)){
	        echo $d.'/'.$m.'/'.$y.' is a invalid date!';
	    } else {
	        echo $d.'/'.$m.'/'.$y.' is not a valid date!';
	    }
    }

    // Diferença entre duas datas em dias - $date1='2019-02-27'
    public function dateDiffDays($date1, $date2, $format='%a'){
        $datetime1 = date_create($date1);
        $datetime2 = date_create($date2);
       
        $interval = date_diff($datetime1, $datetime2);
       
        return $interval->format($format);
    }
/*
$data1 = new DateTime('2019-10-11 22:00:00');
$data2 = new DateTime('2019-10-12 22:15:00');
$intervalo = $data1->diff($data2);
echo $intervalo->format('%R%a:%I tempo');
*/

    // dateAddDays('2019-03-03', '10 days', 'd/m/Y');
    public function dateAddDays($date, $interval, $format){
        $datetime = date_create($date);
        date_add($datetime, date_interval_create_from_date_string($interval));       
        $result = date_format($datetime, $format);
        return $result;
    }

    // ageYears('1956-08-03', '2019-07-17');
    public function ageYears($dateBirth, $dateNow, $format='%y'){
        $datetime1 = date_create($dateBirth);
        $datetime2 = date_create($dateNow);
       
        $interval = date_diff($datetime1, $datetime2);
       
        return $interval->format($format);
    }

    // Retorna a data de home no formato d/m/Y H:i
    public function nowDayTime(){// 17/07/2019 10:34
        $result = new \DateTime();
        return $result->format('d/m/Y H:i');
    }

    // Ano atual
    public function year(){// 2019
        $result = new \DateTime();
        return $result->format('Y');
    }

    // Mês atual
    public function month(){// 2019
        $result = new \DateTime();
        return $result->format('m');
    }

    // Dia de hoje
    public function day(){// 2019
        $result = new \DateTime();
        return $result->format('d');
    }

    // Retorna o dia de amanhã
    public function tomorrow(){// 2019
        $result = new \DateTime();
        return $result->format('d')+1;
    }

    // Retorna o dia de ontem
    public function yesterday(){// 2019
        $result = new \DateTime();
        return $result->format('d')-1;
    }

    // Hora atual
    public function hour(){// 2019
        $result = new \DateTime();
        return $result->format('H');
    }

    // Minutos atuais
    public function minute(){// 2019
        $result = new \DateTime();
        return $result->format('i');
    }

    // Segundos atuais
    public function second(){// 2019
        $result = new \DateTime();
        return $result->format('s');
    }

    // Data atual de acordo com o timezone fornecido
    public function nowTz($timezone){
        $tzone = new \DateTimeZone($timezone);
        $result = new \DateTime('now', $tzone);
        return $result->format('d/m/Y H:i');
        // Tabela https://en.wikipedia.org/wiki/List_of_tz_database_time_zones
    }

}
/*
$d = new DateTime();

print $d->yesterday();

*/
