<?php

session_start();
$accesslevel = $_SESSION['access_level'];
$username = $_SESSION['username'];

echo "<h3>Hello! {$username}</h3><br>";
echo "<p>Your access level is {$accesslevel}</p>";

displayAccessLevelInformation($accesslevel);

function displayAccessLevelInformation($accessLevel)
{
    if($accessLevel =="standarduser")
    {
        echo "<p style=\"background-color: lightgreen\">You are currently logged in as a standard user</p>";
    }
    elseif($accessLevel == "root")
    {
        echo "<p<p style = \"background-color: red\"\>You are currently logged in as a root user</p>";
        echo "<p<p style = \"background-color: red\"\>You now have access to additional adminstrative features</p>";
    }
}