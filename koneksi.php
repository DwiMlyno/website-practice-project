<?php
function connect()
{
    $servername = "localhost";
    $username = "root";
    $password = "123";
    $conn = new PDO("mysql:host=$servername;dbname=dm-store", $username, $password);
    return $conn;
}
?>.