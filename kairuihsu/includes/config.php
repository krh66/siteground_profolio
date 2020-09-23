<?php  
// connecting databas
ob_start(); // Turns on output buffering
session_start();

date_default_timezone_set("Asia/Taipei");

try{

    $con = new PDO("mysql:dbname=slasherf_macflix;host=localhost:3306", "slasherf_login", "^+=[Fff)aVIx"); //php data object, username = root, pswd = ""
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOException $e){
    exit("Connection failed: " . $e->getMessage());
}
?>