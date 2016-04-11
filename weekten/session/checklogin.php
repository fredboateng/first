<?php
$username = $_POST["name"];
$password = $_POST['password'];

if($username == "Fred" && $password =="123"){
    set_session('access_level', 'root');
    set_session('username', 'Fred');

}
else
{
    echo "erro";
}
header('location:loggedin.php');
echo "here I am";