<?php
/**
 * Created by PhpStorm.
 * User: CG
 * Date: 19/03/2016
 * Time: 14:22
 */
include ("connection.php");
$sql = "SELECT title FROM marvelmovies WHERE title like 'X-Men%'";
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
    <h3>These are movies done by Marvel Studios</h3><br>
    <table>
        <tr>
            <th>Movie Title</th>
        </tr>
        <?php
        while($row = $result -> fetch_array()){
            echo "<tr>";
            echo "<td>" . $row['title'] . "</td>>";
            //echo "<td>".$row['productionStudio']."</td>>";
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
