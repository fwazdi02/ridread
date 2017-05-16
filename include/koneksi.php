<?php

$host = "localhost" ;
$user = "admin" ;
$passwd = "ridreadpasswd" ;
$dbname = "ridread_db" ;


$conn = mysqli_connect($host, $user, $passwd, $dbname);

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());
}

?>