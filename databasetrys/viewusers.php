<?php
/**
 * Created by PhpStorm.
 * User: CG
 * Date: 30/03/2016
 * Time: 19:26
 */
// creating connection
include ("connection.php");

// create my query
$sql = "SELECT * FROM users";

// run query and assign variable to result
$result = mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <title>View Users</title>
</head>
<body>
<main>
    <h1>Users and Their passwords</h1>
    <table>
        <tr>
            <th>uid</th>
            <th>Full Name</th>
            <th>Pass Word</th>
        </tr>
        <?
            while($row=$result->fetch_array()){
                echo "<tr>";
                echo "<td>".$row['uid']."</td>";
                echo "<td>".$row['username']."</td>";
                echo "<td>".$row['password']."</td>";
            }
        ?>
    </table>
</main>
</body>
</html>