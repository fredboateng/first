<?php
/**
 * Created by PhpStorm.
 * User: CG
 * Date: 14/03/2016
 * Time: 18:01
 */
include ("connection.php");
if(empty($_POST["username"])||empty($_POST["password"])){
    echo "Both fields are required.";
}else {
    echo "helleo";
   $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username;
    $sql="SELECT uid FROM users WHERE username='$username' and password='$password'";
    echo $username;

     $result = mysqli_query($db, $sql);

     if (mysqli_num_row($result) == 1) {
         //header("location:home.php");
         echo "hello";
     } else {
         echo "Incorrect username or password.";

     }
}
?>