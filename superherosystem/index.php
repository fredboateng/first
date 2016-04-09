<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superhero System</title>
</head>
<body>
<header>
    <h1>The Super-Superhero Systme</h1>
    <h2>Superhero Home Page</h2>
</header>
<p>What would like to do?</p>
<ul>
    <li><a href="superheroform.html">Insert a superhero</a> </li>
    <li><a href="displaySuperheros.php">Display all superheros</a> </li>
    <li><a href="battle.php">Insert a battle</a> </li>
    <li><a href="displayBattle.php">Insert a superhero</a> </li>
    <ul>
        <?
        include ("connection.php"); // adding the connection to the data base
        $sql_query = "SELECT * FROM superheros"; // sql query to select all records in the superheros table
        $result = $db->query($sql_query); // populate result with the query output
        // run throuh the result set
        while($row = $result -> fetch_array()){
            $firstname = $row['firstName'];
            $lastname = $row['lastName'];
            $id = $row['superheroID'];
            // displaying the superheros and linking them to their various battles
            echo "<li><a href='displayBattle.php?id={$id}'>Battles for {$firstname} {$lastname}</a></li>>";
        }
        $db -> close();
        ?>
    </ul>

</ul>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: CG
 * Date: 09/04/2016
 * Time: 12:14
 */