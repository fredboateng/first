<?php
/**
 * Created by PhpStorm.
 * User: 1312897
 * Date: 21/03/2016
 * Time: 10:23
 */
$forename =$_POST["forename"];
$surname = $_POST["surname"];
echo $forename ." ". $surname;
echo "<br>";
echo "My name is {$forename} {$surname}.";
echo "<br>";
// superhero details
$heroforename =$_POST["heroforename"];
$herosurname =$_POST["herosurname"];
$gender = $_POST["gender"];
$power = $_POST["power"];

echo"The name of my superhero is {$heroforename} {$herosurname}";
echo"<br>";
echo"{$gender} is his gender. His greatest power is {$power}";