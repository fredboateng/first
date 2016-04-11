<?php
$username = $_POST["name"];
$password = $_POST['password'];

if($username == "Fred" && $password =="123"){
    setcookie('access_level', 'standarduser');
}

header('location:loggedin.php');
