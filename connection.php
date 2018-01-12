<?php
$server="localhost";
$user="root";
$pass="";
$dbname="product";
$conn=new mysqli($server,$user,$pass,$dbname);
//$connection = mysql_connect("localhost", "root", "");  Establishing Connection with Server
//$db = mysql_select_db("product", $connection);  Selecting Database from Server

$conn1=@mysqli_connect('localhost','root','','product');
@mysqli_select_db("product",$conn1);
?>