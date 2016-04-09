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
    if(isset($_GET['id'])){
        $superheroID = $_GET['id'];
        $sql_query = "SELECT * FROM superheroBattles WHERE superheroID = '$superheroID'";
    }
    else {
        $sql_query = "SELECT * FROM superbattles";
    }

    $result = $dp -> query($sql_query);
    while ($row = $result -> fetch_array())
    {
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $mainSuperpower = $row['mainSuperPower'];
        $villanFought = $row['villanFought'];

        echo "<article>
            <p>The superhero known as <strong>{$firstname} {$lastname}</strong> recently fought
            <strong>{$villanFought} using <strong>{$mainSuperpower}</strong></strong></p>
        </article>";
    }
    ?>
</main>

</body>
</html>

