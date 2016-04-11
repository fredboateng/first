<?php
$username = $_POST["name"];
$password = $_POST['password'];

if($username == "Fred" && $password =="123"){
    $_SESSION['access_level'] = "root";
    $_SESSION['username'] = "Fred";

}
else
{
    echo "erro";
}
header('location:loggedin.php');
echo "here I am";