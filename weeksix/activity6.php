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

$myname = "David";

// you can manipulate strings easily
// and with built-in functions too
$partial = substr($myname,0,3);
print $partial; // prints "dav"

// UPPER CASE and lower case functions
$uppercase = strtoupper($myname);
print $uppercase;
// prints DAVID

$lowercase = strtolower($uppercase);
print $lowercase;
// prints david

// find the position
strpos("emily", "e"); //0
strpos("emily", "i"); //2
strpos("emily", "ily"); // 2
strpos("emily", "zxc"); // false


$round = round(M_PI);
print $round; // prints 3

// This time, round pi to 4 places
$round_decimal = round(M_PI,4);
print $round_decimal; // prints 3.1416

// prints a number between 0 and 32767
print rand();

// prints a number between 1 and 10
print round(1,10);

$fav_bands = array();
array_push($fav_bands,"Katy Perry");
array_push($fav_bands,"The Peopods");
array_push($fav_bands,"Nickelback");

print count($fav_bands);

