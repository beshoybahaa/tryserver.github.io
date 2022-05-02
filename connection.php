<?php

$dbhost = "localhost";
$dbemail = "root";
$dbpass = "";
$dbname = "database_cinema";

if(!$con = mysqli_connect($dbhost,$dbemail,$dbpass,$dbname))
{

    die("failed to connect to the database!");

}

?>