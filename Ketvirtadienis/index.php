<?php
//////////////////////////////////////////////////////////
// File Handling

//$file = readfile("text.txt");
//Atidaro file'a ir parodo kas jame parasyta ir kiek simboliu tai sudaro. Nereikia echo.

/*$myfile = fopen("text.txt", "r") or die ("Unable to open file");*/
/*$contents = fread($myfile, filesize("text.txt"));
fclose($myfile);
$words = explode(" ", $contents);
echo fgets($myfile);
while(!feof($myfile)){
    echo fgets($myfile);
}
fclose($myfile);*/

//$myfile = fopen("users.csv", "a") or die ("Unable to open file!");

/*$people=[];

while(!feof($myfile)){
   $people[] = explode(",", fgets($myfile));
}
fclose($myfile);
print_r($people);*/

/*$users = ["Kazys","Poetas"];
$not_array = implode(",",$users);
fwrite ($myfile, $not_array);
fclose($myfile);*/

//////// Irasom i CSV file'a;
//    $users = [
//        ["Kazys", "Binkis"],
//        ["Balys", "Sruoga"],
//        ["Vincas", "Mykolaitis-Putinas"],
//        ["Jonas", "Maciulis-Maironis"]
//    ];
//
//    foreach ($users as $u) {
//        $not_array = implode(" ", $u);
//        $not_array .= "," . "\n";
////        /*ARBA taip galima buvo daryti
////         * $row = $u[0] . "," .$u[1] . "\n";
////         * */
//        fwrite($myfile, $not_array);
//    }
//    fclose($myfile);


///// Read xml_file
/*    $myfile = fopen("index.xml", "r") or die("Err!");
    $data = fread($myfile, filesize("index.xml"));
    $data_array = simplexml_load_string($data);
    print_r($data_array);*/

////// Uzduotis Nr.1
$customers =[];
$customerFile = fopen("customers.csv", "r") or die ("Err!");
while(!feof($customerFile)){
    $customers[] = explode(",",fgets($customerFile));
}
fclose($customerFile);

$emailFile = fopen("emails.csv", "w") or die ("Err");
$id=1;
foreach ($customers as $c){
    $row = $id . "," . $c[0] . "@php.lt," . $c[1] . "\n";
    fwrite($emailFile, $row);
    $id++;
}
fclose($emailFile);