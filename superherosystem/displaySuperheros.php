
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
    <p><a href="index.php">Return to home ...</a> </p>
</header>
<main>
    <?
    include ("connection.php");
    $sql_query = "SELECT * FROM superheros";
    $result = $db -> query($sql_query);
    while($row = $result -> fetch_array())
    {
        $firstname = $row['firstName'];
        $lastname = $row['lastName'];
        $mainSuperpower = $row['mainSuperpower'];
        echo "<article>
                <h3>{$firstname} {$lastname}</h3>
                <p>This superheros main power is <strong>{$mainSuperpower}</strong></p>
                </article>";
    }
    ?>
</main>

</body>
</html>