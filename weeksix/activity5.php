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
echo "<br>";
$provisionedActivities = array("Specs","Drugs","Rock and Roll");
foreach($provisionedActivities as $x){
    print "<p>$x</p>";
}
echo"<br>";
$provisions = array("specs", "mugs", "sausage rolls");

foreach($provisions as $x){
    print "<p>$x</p>";
}
echo"<br>";
$provisions[1]="hugs";

foreach($provisions as $x){
    print "<p>$x</p>";
}

echo"<br>";

unset($provisions[2]);

foreach($provisions as $x){
    print "<p>$x</p>";
}