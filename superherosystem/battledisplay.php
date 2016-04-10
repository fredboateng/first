<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superhero System</title>
</head>
<body>
<header>
    <h1>The Super-Superhero System</h1>
    <h2>Superhero Home Page</h2>
    <p><a href="index.php">Return to home ...</a> </p>
</header>
<main>
    <?
    include ("connection.php");
    $sql_query = "SELECT * FROM battles";
    $result = $db -> query($sql_query);

    while($row = $result -> fetch_array())
    {
        $superhero = $row['superheroID'];
        $villanFought = $row['villanFought'];

        echo "<article>
                <h3>{$superhero} {$villanFought}</h3>
                </article>";
    }
    ?>
</main>

</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: CG
 * Date: 09/04/2016
 * Time: 20:11
 */