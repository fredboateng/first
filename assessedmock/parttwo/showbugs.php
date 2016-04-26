<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mock Lab</title>
    <link type="text/css" rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="assets/unsemantic-grid-responsive-tablet.css" />
</head>
<body>
<?include("connection.php");?>
<header>
    <a href="index.php"><img src="assets/logo.png" alt = "Bug Logo" id="headerlogo"></a>
    <h1>Bug Tracker</h1><br>

    <?php
    if(isset($_GET['bugcategory'])) {
        $bugcategory = $_GET['bugcategory'];
        $sql = "SELECT * FROM bugs WHERE BugCategory = '$bugcategory'";
        $result = $db->query($sql);
        $row = $result->fetch_array();
        $bugcategory = $row['BugCategory'];
        echo "<p>Keeping track of all the pesky little bugs<br>
            You are in the {$bugcategory} category
            </p>";

    }
    else{
        echo"<p>Keeping track of all the pesky little bugs<br>
            You are looking all the in our database
            </p>";
    }
    ?>
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

                <?php
                /*

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
        <?php

        if(isset($_GET['bugcategory'])){
            $bugcategory = $_GET['bugcategory'];
            $sql = "SELECT * FROM bugs WHERE BugCategory = '$bugcategory'";
        }
        else{
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
