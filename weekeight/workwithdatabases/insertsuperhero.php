<?php
/**
 * Created by PhpStorm.
 * User: 1312897
 * Date: 22/03/2016
 * Time: 10:26
 */
include('newconnection.php');

$firstname = $_POST["forename"];
$lastname = $_POST["lastname"];
$mainpower = $_POST["mainpower"];

$sql = "INSERT INTO superheros(firstName,lastName,mainSuperpower)
        VALUE ('$firstname','$lastname','$mainpower')";

mysqli_query($db,$sql);