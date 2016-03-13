<?php
/**
 * Created by PhpStorm.
 * User: 1312897
 * Date: 08/03/2016
 * Time: 10:41
 */

// String Functions
// get the length of a string and print it to the screen
$length = strlen("david");
print $length;

echo "<br>";

$myname = "David";

// you can manipulate strings easily
// and with built-in functions too
$partial = substr($myname,0,3);
print $partial; // prints "dav"
echo "<br>";
// UPPER CASE and lower case functions
$uppercase = strtoupper($myname);
print $uppercase;
// prints DAVID
echo "<br>";
$lowercase = strtolower($uppercase);
print $lowercase;
// prints david
echo "<br>";
// find the position
strpos("emily", "e"); //0
strpos("emily", "i"); //2
strpos("emily", "ily"); // 2
strpos("emily", "zxc"); // false


$round = round(M_PI);
print $round; // prints 3
echo "<br>";
// This time, round pi to 4 places
$round_decimal = round(M_PI,4);
print $round_decimal; // prints 3.1416
echo "<br>";
// prints a number between 0 and 32767
print rand();
echo "<br>";
// prints a number between 1 and 10
print rand(1,10);
echo "<br>";
$fav_bands = array();
array_push($fav_bands,"Katy Perry");
array_push($fav_bands,"The Peopods");
array_push($fav_bands,"Nickelback");

print count($fav_bands);

echo"<br>";
// sorting an array
$array = array(5, 3, 7, 1);
sort($array);
print join(", ",$array); // separates the final output with a comma and space
echo "<br>";

$array = array(5, 3, 7, 1);
rsort($array);
print join(":",$array);
echo"<br>";

// activity- specs, mugs and sausage rolls vi

$wins = array("Kofi", "Fred", "Yaw", "Jibolo", "Emma", "Aaron", "Harry", "Wale","Wood");
for($i = 0; $i<3; $i++){
    $prizes = array("mugs", "specs", "sausage rolls");
    sort($wins);
    //print join(", ",$wins);
    //echo "<br>";
    $x = rand(0,count($wins)-1);
    $y = $wins[$x];
    //echo $y;
    //echo "<br>";
    $z = $prizes[$i];
    echo $y." has won all the ".$z;
    echo "<br>";
    unset($wins[$x]);
}
echo "<br>";

function squareValue($number){
    echo $number * $number;
}

squareValue(6);

// activity vii
function cleanUp($personName, $specsNum, $mugsNum, $sausageNum){
    echo "Wanted: ".$personName;
    echo "<br>";
    echo "Knwon to be in possession of the following items:";
    echo "<br>";
    echo "Specs (".$specsNum.")";
    echo "<br>";
    echo "Mugs (".$mugsNum.")";
    echo "<br>";
    echo "Sausage Rolls (".$sausageNum.")";
    echo "<br>";
    $x = ($sausageNum*$mugsNum*$sausageNum);
    $y = 10*(pow($x,2)/2);
    echo "Award for capture: £".$y;
    echo "<br>";
}

cleanUp("Fred Boateng",4,3,2);