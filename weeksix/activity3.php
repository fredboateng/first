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

// comparisons
$name = "Edgar";
if($name == "Simon"){
    print "I know you!";
}else{
    print "Who are you";
}
