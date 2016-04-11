<?php
$username = $_POST["name"];
$password = $_POST['password'];

if($username == "Fred" && $password =="123"){
    set_session('access_level', 'root');
    set_session('username', 'Fred');

}

header('location:session/loggedin.php');