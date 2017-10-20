<?php

//PHP ivykus klaidai pateikia sita informacija - error_level, error_message, error_file, error_line, error_context;
//Juos galima naudoti apsirasant savo asmenine funkcija error'ams valdyti

// Datos apsirasymas...daugiau info cia http://php.net/manual/en/function.date.php
/*date("Y-m-d H:i:s");

date_default_timezone_set("Europe/Vilnius");

function customError($error_level, $error_message, $error_file, $error_line, $error_context) {
    echo "Klaida ivyko!" . date("Y-m-d H:i:s") . ",";
    echo $error_file . "," . "@" . "," . $error_line . ",";
    echo $error_message . "\n";

    $error = "Klaida ivyko!" . date("Y-m-d H:i:s") . "," . $error_file . "," . $error_line . ",";
    $error .= $error_message . "\n";

    $error_log_file = fopen("error_log.csv", "a") or die ("Err");
    // direktorija sukurtu kas valanda fopen(date(Y-m-d H) . "-error.log", "w")
    fwrite($error_log_file, $error);
    fclose($error_log_file);

}

set_error_handler("customError");

echo $a;*/

/*function checkNum($skaicius){
    if ($skaicius>1){
        throw new Exception("Value must be more 1 or below");
    }
    return true;
}

try {
    checkNum(10);
}

catch(Exception $error){
    echo 'Message: ' . $error->getMessage();
}

echo " Continuing..";*/

/*function sum(int $a, int $b) : int {
    $result = $a + $b;
    return $result;
}
echo sum(1,2);*/

//$result = $a <=> $b //grazins -1 0 1

//$a = null;
//$b = 1;
//$c = 10;
//$result = $a ?? $b ?? $c;
//$result = do() ?? doElse() ?? tryThis();