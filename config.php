<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "imagestore";
$mainurl = "http://localhost/image/";
$connection = mysqli_connect($hostname, $username, $password, $dbname) or die("Database Connection Failed");
?>