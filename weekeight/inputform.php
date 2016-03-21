<?php
/**
 * Created by PhpStorm.
 * User: 1312897
 * Date: 21/03/2016
 * Time: 10:16
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="formResponse.php" method="post">
    <label>Forename</label><input type="text" name="forename"><br>
    <label>Surname</label><input type="text" name="surname"><br>
    <!-- <input type="submit" value="Submit"> -->
</form>
</body>
</html>

<!-- Activity - Creating a SuperHero -->
<p>Who is your super hero</p>
<form action="formResponse.php" method="post">
    <label>Forename</label><input type="text" name="heroforename"><br>
    <label>Surname</label><input type="text" name="herosurname"><br>
    <label>Gender</label><input type="text" name="gender"><br>
    <label>Main Superhero Power</label><input type="text" name="power"><br>
    <input type="submit" value="Submit">
</form>