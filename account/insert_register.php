<?php 
session_start();

include "../config.php";

$full_name = $_POST['full_name'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$email = $_POST['email'];
$number = $_POST['number'];
$gender = $_POST['gender'];
$roll = $_POST['roll'];

$query = "INSERT INTO users (name, user_name, roll, email, password, number, gender) VALUES ('{$full_name}','{$user_name}','{$roll}','{$email}','{$password}','{$number}', '{$gender}')";

$result = mysqli_query($connection, $query) or die("Query Failed");

if ($result) {
    $_SESSION["roll"] = "green";
    $_SESSION["favcolor"] = "green";
    $_SESSION["favcolor"] = "green";
    header("location: {$mainurl}account/login.php");
} else {
    header("location: {$mainurl}account/register.php?msg=acf");
}




?>