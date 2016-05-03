<?php
/**
 * Created by PhpStorm.
 * User: CG
 * Date: 19/03/2016
 * Time: 06:38
 */
include ("connection.php");
$sql = "SELECT * FROM marvelmovies";
$result = mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies</title>
    <link rel="stylesheet" href="style.css" type ="text/css" >
</head>
<body>
<header>
    <h1>Welcome to Movies dot Napo</h1> <br>
    <a href="index.php">Home</a>
</header>
<main>
    <h1>Display of all movies</h1>
    <table>
        <tr>
            <th>Marvel Movie ID</th>
            <th>Release Year</th>
            <th>Title</th>
            <th>Production Studio</th>
            <th>Notes</th>
        </tr>
        <?php
            while($row = $result -> fetch_array()){
                echo "<tr>";
                echo "<td>". $row['marvelMovieID']."</td>";
                echo "<td>". $row['yearReleased']."</td>";
                echo "<td>". $row['title']."</td>";
                echo "<td>". $row['productionStudio']."</td>";
                echo "<td>". $row['notes']."</td>";
                echo "</tr>";
            }
        $db->close();
        ?>
    </table>
</main>
<footer>
    <h4>Eagle Technologies (c)</h4>
</footer>

</body>
</html>