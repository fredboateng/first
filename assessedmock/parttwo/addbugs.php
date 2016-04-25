<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mock Lab</title>
    <link type="text/css" rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="assets/unsemantic-grid-responsive-tablet.css" />
</head>
<body>
<header>
    <img src="assets/logo.png" alt = "Bug Logo" id="headerlogo">
    <h1>Bug Tracker</h1><br>
    <p>Keeping track of all the pesky little bugs</p>
</header>

<main class="grid-container">
    <aside class="grid-33 mobile-grid-33">
        <nav>
            <ul>
                <li><a href="bugs.html">All Bug Items</a> </li>
                <li><a href="bugs.html">Android Bugs</a> </li>
                <li><a href="bugs.html">iOS Bugs</a> </li>
                <li><a href="bugs.html">Windows Bugs</a> </li>
                <li><a href="bugs.html">Insert Bugs</a> </li>
            </ul>
        </nav>
    </aside>
    <section class="grid-66 mobile-grid-66">
        <?
        include("connection.php");
            if($_SERVER['REQUEST_METHOD']==='GET'){
                echo
                "<form action=\"addbugs.php\" method=\"post\">
                      <table>
            <tr>
                <td><label>Bug Name</label></td>
                <td><input type=\"text\" name=\"bname\" required/></td>
            </tr>
            <tr>
                <td><label>Bug Summary</label></td>
                <td><textarea rows=\"5\" cols=\"30\" name='bugsummary' required></textarea></td>
            </tr>
            <tr>
                <td><label>Bug Category</label></td>
                <td><select name='category' required>
                    <option >Select</option>
                    <option value=\"android\">Andriod</option>
                    <option value=\"ios\">iOS</option>
                    <option value=\"windows\">Windows</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type=\"submit\" value=\"Summit\"></td>
            </tr>
        </table>
            </form>";
            }


        elseif($_SERVER['REQUEST_METHOD']==='POST'){
            $bname = $_POST['bname'];
            $bugsummary = $_POST['bugsummary'];
            $category = $_POST['category'];
            $sql = "INSERT INTO bugs(bugName, BugSummary, BugCategory)
                    VALUES ('$bname', '$bugsummary', '$category')";
            if($db->query($sql)){
                header("location:showbugs.php");
            }
            else{
                echo"error ".$sql;
            }
        }
        else{
            header("location:index.php");
        }
        ?>

    </section>
</main>
<footer>
    <p>Designed by [Fred Antwi-Boateng,[2016]]</p>
</footer>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: 1312897
 * Date: 25/04/2016
 * Time: 10:18
 */