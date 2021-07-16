<?php
$user="root";
$password="";
$db="blogdb";
$server="localhost";

$link=mysqli_connect($server,$user,$password);

if(!$link){
    print("Connection is not Establish");
}

$db_link=mysqli_select_db($link,$db);

if(!$db_link){
    die("Database is not Establish");
}
?>
