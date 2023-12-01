<?php

$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "stalldata";
$connect = "";

try{$connect = mysqli_connect($db_server, $db_username, $db_password, $db_name);}
catch(mysqli_sql_exception $e){
    echo "Failed to connect to database <br>";
}

if($connect){
    echo "Connected to database <br>";
}
else{
    echo "Failed to connect to database <br>";
}