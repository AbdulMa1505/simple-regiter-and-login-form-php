<?php
$server='localhost';
$username='root';
$password='';
$dbname='snapchat';
$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
    die("connection error". mysqli_connect_error());
}
?>