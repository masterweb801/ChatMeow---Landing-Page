<?php

$hostname = "sql203.epizy.com";

$username = "epiz_34026528";

$password = "bkoKV0yQxMU";

$dbname = "epiz_34026528_forum";



$conn = mysqli_connect($hostname, $username, $password, $dbname);

if(!$conn){

    echo "Database connection error".mysqli_connect_error();

}

$conn->set_charset("utf8mb4");

?>