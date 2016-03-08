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

// builds an array
$provisionedActivities = array("Specs","Drugs","Rock and Roll");

// iterates and prints the elements of the array each in a paragraph
foreach($provisionedActivities as $x){
    print "<p>$x</p>";
}
echo"<br>";

// activity - specs mugs and sausage rolls III
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

// for loops
for($i = 1; $i < 10; $i++){
   echo"<p>Hello!</p>";
}

// for loops activity
for($i = 1; $i <= 30; $i++){
    $position = array("st","nd","rd","th");
    if($i<4 || ($i>20 && $i<24)){
        $a=$i%10;
        $y="";
        switch($a){
            case 1: $y=$position[$a-1];
                break;
            case 2: $y=$position[$a-1];
                break;
            case 3: $y=$position[$a-1];
                break;
            default:$y=$position[$a-1];
        }
    }else{
        $y=$position[3];
    }
    if($i%2 == 0 && $i%4!==0 ){
        echo "On the ".$i.$y." of the month specs are available";
        echo "<br>";
    }
    elseif($i%2 == 0 && $i%4==0 ){
        echo "On the ".$i.$y." of the month specs and sausage rolls are available";
        echo "<br>";
    }
    elseif($i%3==0){
        echo "On the ".$i.$y." of the month mugs are available";
        echo "<br>";
    }


    else{
        echo "On the ".$i.$y." of the month no products are available";
        echo "<br>";
    }
}