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
                <li><a href="showbugs.php">All Bugg Items</a> </li>
                <li><a href="showbugs.php">Android Bugs</a> </li>
                <li><a href="showbugs.php">iOS Bugs</a> </li>
                <li><a href="showbugs.php">Windows Bugs</a> </li>
                <li><a href="addbugs.php">Insert Bugs</a> </li>
                <?/*

                include("connection.php");
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
        if(isset($_GET['id'])){
            $bugID = $_GET['id'];
            $sql = "SELECT * FROM bugs WHERE bugID = $bugID";
        }else{
            echo "I am here";
            $sql = "SELECT * FROM bugs";
        }

        $result=$db->query($sql);
        while($row = $result->fetch_array())
        {
            $bugname = $row['bugName'];
            $bugcategory = $row['BugCategory'];
            $bugsummary = $row['BugSummary'];
            echo "<article>
                  <p>{$bugname}</p>
                  <p>{$bugcategory}</p>
                  <p>{$bugsummary}</p>
                  </article>";

            echo '<hr>';

        }
        $db->close();
        ?>

    </section>
</main>
<footer>
    <p>Designed by [Fred Antwi-Boateng,[2016]]</p>
</footer>
</body>
</html>
