<?php
session_start();
$username = $_POST["name"];
$password = $_POST['password'];

if($username == "Fred" && $password =="123"){
    $_SESSION['access_level'] = "root";
    $_SESSION['username'] = $username;

}

header('location:loggedin.php');
