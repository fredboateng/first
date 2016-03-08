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
strpos("emily", "e");
strpos("emily", "i");
strpos("emily", "ily");
strpos("emily", "zxc");