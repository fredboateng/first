<?php
/**
 * Created by PhpStorm.
 * User: 1312897
 * Date: 07/03/2016
 * Time: 09:57
 */
echo "Hello, world <br>";

// concatenation in php
echo "Hello," . " " . "world" . "!"."<br>";

// printing sample arithmetic

echo 5*7;
echo "<br>";
// start using variables

$myname = "Frodo Baggins";
$myage = 111;
echo "My name is ".$myname." and I am ".$myage;

echo "<br>";

echo "I get printed";
// I don't! I'm a comment.

/* I don't get printed either
and neither do I */
echo "<br>";
echo "<br>";
// comparisons
$name = "Edgar";
if($name == "Simon"){
    print "I know you!";
}else{
    print "Who are you";
}

echo "<br>";
echo "<br>";

// activity three

$myage1 = 16;
$name1 = "Fred";
if($myage1<=16){
    print $name1." buy specs";
}elseif($myage1<=18){
    print $name1." buy mugs";
}elseif($myage1>21){
    print $name1." buy sausage rolls";
}


