<?php
include ("connection.php");

// creating variables to the hold superhero details
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$superpower = $_POST['superpower'];

// insert query
$sql = "INSERT INTO superheros(firstName, lastName, mainSuperPower) VALUES ('$firstname', '$lastname', '$superpower')";

// inserting into the database
if ($db -> query($sql)){
}else{
    echo "Erro: ".$sql."<br>"."Try again";
}

$sql1 = "DELETE * FROM superheros";

if ($db -> query($sql1)){
}else{
    echo "Erro: ".$sql."<br>"."Try again";
}