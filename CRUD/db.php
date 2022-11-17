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

?>