<?php
include ("connection.php");
$superheroID = $_POST["superheroID"];
$villan = $_POST["villan"];

$sql = "INSERT INTO battles(superheroID, villanFought)VALUES ('$superheroID', '$villan')";

if(mysqli_query($db,$sql)) {
}else{echo "Erro: ".$sql."<br>"."Try again";
}
$db -> close();
header("location:index.php");