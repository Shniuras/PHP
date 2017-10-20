<?php

$error_file = fopen("error_log.csv", "r") or die ("File doesn't exist!");
while(!feof($error_file)){
    $errors[] = explode(",",fgets($error_file));
}
fclose($error_file);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>Date</th>
            <th>Location</th>
            <th>Message</th>
        </tr>
        </thead>
        <tb>
            <?php
                foreach($errors as $e) {
                    echo  "<tr>";
                    foreach ($e as $parameter) {
                        echo "<td>" . $parameter . "</td>";
                    }
                    echo  "</tr>";
                    //Statinis budas
                    //echo "<tr><td>" . $e[0] . "</td><td>" . $e[1] . "</td><td>" . $e[2] . "</td></tr>";
                }
                ?>
        </tb>
    </table>
</body>
</html>

<!--Kaip veikia foreach ciklas:
    Pvz.,
    $errors = [1,2,3]
    foreach ($errors as $e){
        echo $e;
    }
    Tai reiskia, kad ciklas ieis i $errors ir pavers $e=1, $e=2, $e=3;

    Pvz. Nr2.,
    $errors = [
            [1,2,3],
             [4,5,6]
    ];
    foreach ($errors as $e){
    foreach($e as $i){
        echo $i;
    }
    Tai reiskia, kad ciklas ieis i $errors ir pavers $e=[1,2,3], $e=[4,5,6];
    Ir paskui, paleidus cikla dar karta, ciklas $e visas reiksmes jau pavers i $i=1, $i=2, $i=3, $i=4 ir t.t.;
}

-->