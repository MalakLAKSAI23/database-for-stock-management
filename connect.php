<?php

$dsn="mysql:host=localhost;dbname=stocktracker";
$user="root";
$password="";
$option= array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8" //for arabic
);
try{
$con=new PDO($dsn,$user,$password,$option);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
include "functions.php";
}
catch(PDOException $e){
    echo $e->getMessage();
}
?> 