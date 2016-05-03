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
    <a href="index.php"><img src="assets/logo.png" alt = "Bug Logo" id="headerlogo"></a>
    <h1>Bug Tracker</h1><br>
    <p>Keeping track of all the pesky little bugs</p>
</header>

<main class="grid-container">
    <aside class="grid-33 mobile-grid-33">
        <nav>
            <ul>
                <li><a href="showbugs.php?">All Bug Items</a> </li>
                <li><a href="showbugs.php?bugcategory=android">Android Bugs</a> </li>
                <li><a href="showbugs.php?bugcategory=ios">iOS Bugs</a> </li>
                <li><a href="showbugs.php?bugcategory=windows">Windows Bugs</a> </li>
                <li><a href="addbugs.php">Insert Bugs</a> </li>
                <?

                /*include("connection.php");
                $sql="SELECT * FROM bugs";
                $result=mysqli_query($db,$sql);
                while($row = $result->fetch_array()) {
                    $bugID =$row['bugID'];
                    $bugname = $row['bugName'];
                    $bugcategory = $row['BugCategory'];
                    $bugsummary = $row['BugSummary'];
                    echo "<li><a href='showbugs.php?id={$bugID}'>{$bugcategory}</a></li>";
                }
                //$db->close();**/
                ?>
            </ul>
        </nav>
    </aside>
    <section class="grid-66 mobile-grid-66">
        <?
        include("connection.php");
            if($_SERVER['REQUEST_METHOD']==='GET'){
                echo

                "<form action=\"addbugs.php\" method=\"post\">

                    <ul class=\"form-style-1\">

        <li>
            <label>Bug Name<span class=\"required\">*</span>
                <input type=\"text\" name=\"bname\" class=\"field-long\" />
            </label>
        </li>

        <li>
            <label>Bug Summary<span class=\"required\">*</span>
                <textarea name=\"bugsummary\" id=\"field5\" class=\"field-long field-textarea\"></textarea>
            </label>
        </li>

        <li>
            <label>Bug Category
                <select name=\"category\" class=\"field-select\" required>
                    <option value=\"\" selected disabled>Select</option>
                    <option value=\"android\">Android</option>
                    <option value=\"ios\">iOS</option>
                    <option value=\"windows\">Windows</option>
                </select>
            </label>
        </li>

        <li>
            <input type=\"submit\" value=\"Submit\" />
        </li>
    </ul>
                   <!--   <table>
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
                    <option value='' selected disabled>Select</option>
                    <option value=\"android\">Andriod</option>
                    <option value=\"ios\">iOS</option>
                    <option value=\"windows\">Windows</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type=\"submit\" value=\"Summit\"></td>
            </tr>
        </table> -->
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