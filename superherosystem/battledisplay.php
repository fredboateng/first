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
</header>
<main>
    <?
    include ("connection.php");
    $sql_query = "SELECT * FROM battle";
    $result = $db -> query($sql_query);

    while($row = $result -> fetch_array())
    {
        $superhero = $row['superhero'];
        $villanFought = $row['villanFought'];

        echo "<article>
                <h3>{$superhero} {$villanFought}</h3>
                <p>This superheros main power is <strong>{$mainSuperpower}</strong></p>
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