<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mock Lab</title>
    <link type="text/css" rel="stylesheet" href="assets/style.css" />
    <link type="text/css" rel="stylesheet" href="assets/unsemantic-grid-responsive-tablet.css" />
</head>
<body>
<header>
    <a href="index.php"><img src="assets/logo.png" alt = "Bug Logo" id="headerlogo"></a>
    <span>
    <strong>Bug Tracker</strong><br>
    Keeping track of all the pesky little bugs
    </span>

</header>
<main class="grid-container">
    <aside class="grid-33 mobile-grid-33">
        <nav>
            <ul><!-- nav link -->
                <li><a href="showbugs.php?">All Bug Items</a> </li>
                <li><a href="showbugs.php?bugcategory=android">Android Bugs</a> </li>
                <li><a href="showbugs.php?bugcategory=ios">iOS Bugs</a> </li>
                <li><a href="showbugs.php?bugcategory=windows">Windows Bugs</a> </li>
                <li><a href="addbugs.php">Insert Bugs</a> </li>

                <?php/*


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
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id est laborum. Good...
        </p>
    </section>
</main>
<footer>
    <p>Designed by [Fred Antwi-Boateng,[2016]]</p>
</footer>
</body>
</html>
