<?php

$host = "localhost" ;
$user = "root" ;
$passwd = "" ;
$dbname = "ridread_db" ;


$conn = mysqli_connect($host, $user, $passwd, $dbname);

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());
}

?>
