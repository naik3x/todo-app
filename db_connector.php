<?php
//the following 4 variables can be modified, if you have another names given
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="db_justdoit";
try {
    $connection = new PDO("mysql:host=$servername;db_name=$dbname", $username, $password); //new connection with initials
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Debug options
    echo "Database connected successfully!"; //Output, when the connection was a success
}catch(PDOException $e){
    echo "Connection failed : ". $e->getMessage(); //"." is a linkoperator which can put together strings
}