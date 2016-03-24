<?php
/**
 * Created by PhpStorm.
 * User: 1312897
 * Date: 22/03/2016
 * Time: 10:26
 */
//include("newconnection.php");
$db = new mysqli(
    "ap-cdbr-azure-east-c.cloudapp.net",
    "bb8e5351eccd82",
    "e5d86e49",
    "kofifred"
);

$firstname = $_POST["forename"];
$lastname = $_POST["lastname"];
$mainpower = $_POST["mainpower"];
echo $firstname;

$sql = "INSERT INTO superheros(firstName,lastName,mainSuperpower) VALUES ('$firstname','$lastname','$mainpower')";

mysqli_query($db,$sql);