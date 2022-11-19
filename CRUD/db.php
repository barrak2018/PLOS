<?php

$server = 'localhost';
$usser = 'root';
$password = '';
$name = 'plos';



session_start();
$conn = mysqli_connect(
    $server,
    $usser,
    $password,
    $name
);
// if (isset($conn)) {
//     echo('Database connected');
// }



// showTable devuelve el contenido de una tabla 
function showTable($tabla, $connection)
    {
        $query = "SELECT * FROM library";
        return mysqli_query($connection,$query);
    }
?>