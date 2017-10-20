<?php

// Error'o sukurimas ir idejimas i duomenu baze
function customError($error_level, $error_message, $error_file, $error_line, $error_context){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fake_app";

    //Klaidos atvaizdavimas ekrane
    /*echo "Klaida ivyko!" . date("Y-m-d H:i:s") . ",";
    echo $error_file . "," . "@" . "," . $error_line . ",";
    echo $error_message . "\n";*/
    //Pabaiga;

    $date = date("Y-m-d H:i:s");

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO errors (Time, File, Line, Error)";
        $sql.= "VALUES ('$date', '$error_file', '$error_line', '$error_message')";
        $conn->exec($sql);
        echo "New record created successfully";

    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

}
set_error_handler("customError");

echo $a;
// Pabaiga!;

////// Lenteles is duomenu bazes atvaizdavimas
$servername = "localhost";
$username = "root";
$password = "";
$database = "fake_app";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM errors");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}
/////// Lenteles atvaizdavimo pabaiga

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
        <th>Id</th>
        <th>Time</th>
        <th>File</th>
        <th>Line</th>
        <th>Error</th>
    </tr>
    </thead>
    <tb>
        <?php
        //Dinaminis budas
        foreach($result as $e) {
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