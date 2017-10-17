<?php

/*for ($i=0; $i<$argv[1]; $i++){
    for($a=0; $a<$argv[2]; $a++){
        echo "#";
    }
    echo "\n";
}*/
/*function suma (int $a, int $b){
    echo $a + $b;
}
suma($argv[1],$argv[2]);*/

function getPrice (int $cost, int $vat){
    $retailPrice = ($cost * 1.5) * (1+ $vat/100);
    echo $retailPrice;
}

function kuboTuris(int $a, int $b, int $c){
    $kuboTuris = $a * $b *$c;
    echo $kuboTuris;
}

function show(string $a, int $b){
    for ($i=0; $i<$b; $i++){
        echo $a;
    }
    echo "\n";
}

function draw($symbol, $rows, $cols){
    for($a=0; $a<$rows; $a++){
        for($b=0; $b<$cols; $b++){
            echo $symbol;
        }
        echo "\n";
    }
}

$fileName = array_shift($argv);
//$argv yra pre-defined kintamasis;
/*array_shift sumazina masyvo reiksmes is desine i kaire kaip pvz., $masyvas = array_shift[23,55,666];
...tai rezultatas gaunasi $masyvas = 23; ir musu masyvas dbr tapo [55,666];*/
$funcName = array_shift($argv);
//call_user_func_array() yra pre-defined funkcija kuri leidzia cmd'e kviesti funkcijas ir reiksmes.
call_user_func_array($funcName, $argv);
?>