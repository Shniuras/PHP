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

function get_price (int $cost, int $vat){
    $retailPrice = ($cost * 1.5) * (1+ $vat/100);
    echo $retailPrice;
}

function kubo_turis(int $a, int $b, int $c){
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

function calc_wheel($RimWidth, $WheelWidth, $ArcWidth){
    $RimResult = $RimWidth * 2.54;
    $WheelResult = $WheelWidth/10*2;
    $result = $RimResult+$WheelResult;

    if($result < $ArcWidth){
        echo "Padanga telpa i arka, nes VISOS padangos dydis yra " . $result . "CM" . " o arkos " . $ArcWidth . "CM";
    } else {
        echo "Padanga NETELPA, nes padangos dydis" . $result . "CM o arkos " . $ArcWidth . "CM";
    }
}

function special_members() {
    for ($i=0; $i<=20; $i++){
        echo "\n";
        echo $i . " " . $i%2;
        if ($i%2){
            echo "True";
        }
    }
}

function skaiciuok($nuo, $iki, $reiksme) {
    if($reiksme == "true"){
        for ($i=$nuo; $i<=$iki; $i++){
            echo $i . "\n";
        }
    } elseif ($reiksme == "false") {
        for ($i=$iki; $i>=$nuo; $i--){
            echo $i . "\n";
        }
    }
}

function generate($num) {
    $arr =[];
    for($i=0; $i<=9; $i++){
        array_push($arr, $num * $i);
    }
    print_r($arr);
}

function get_array(){
    for($i=0; $i<=9; $i++){
        generate($i);
    }
}

function get_tanks($volume, $tankVolume) {
    return ceil($volume/$tankVolume);
}

function get_volume($height, $width, $depth){
    return $volume = $height*$width*$depth;
}

function random_numbers() {
    for ($i=3; $i<=20; $i++){
        echo get_volume($i, 20,2) . " " . get_tanks(get_volume($i, 20,2),200) ."\n";
    }
}

function plyteles_plotas($plyteles_aukstis, $plyteles_plotis){
    return $result = $plyteles_aukstis * $plyteles_plotis;
}

function baseino_plotas($x, $y, $z){
    return $result = (2*$x*$z)+(2*$y*$z)+$x*$y;
}

function reikiamu_plyteliu_skaicius($x, $y, $z, $a, $b){
    return $result = ceil(baseino_plotas($x,$y,$z)/plyteles_plotas($a,$b));
}

function jeigu_keiciasi_baseino_ilgis(){
    for ($i=5.5; $i<=6.5; $i +=0.1){
        echo $result = reikiamu_plyteliu_skaicius(2, $i, 3, 0.5, 0.3) . "\n";
    }
}

function plyteliu_pakeliai() {
    $pakelyje_plyteliu = 9;
    for ($i=5.5; $i<=6.5; $i +=0.1){
        $result = ceil(reikiamu_plyteliu_skaicius(2, $i, 3, 0.5, 0.3)/$pakelyje_plyteliu) . "\n";
        echo $final= " Jeigu baseino ilgis bus " . $i . " tai reikes " . $result . "pakeliu plyteliu" . "\n";
    }
}
///////////////////////////////////////////////////////////////////////////////////////
/// MASYVAI

$users = [
    ["username" => "CoolPetras", "name"=>"Petras", "surname" => "Jonuska"],
    ["username" => "Gamcius", "name"=>"Tadas", "surname" => "Ivanauskas"],
    ["username" => "Juzepe", "name"=>"Juozas", "surname" => "Beluiskas"],
    ["username" => "Serbas", "name"=>"Serbentautas", "surname" => "Uoga"],
];

function username() {
    global $users;
    foreach ($users as $user){
        echo $user["username"]. "\n";
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