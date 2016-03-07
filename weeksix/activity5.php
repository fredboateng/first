<?php
/**
 * Created by PhpStorm.
 * User: CG
 * Date: 07/03/2016
 * Time: 18:11
 */
$myArray = array("do","re","mi");
echo $myArray[0]; // outputs "do"
echo "<br>";
$myArray[1]="la"; // modifies position 1 (re)
echo $myArray[1]; // outputs "la"
echo "<br>";
unset($myArray[2]);

