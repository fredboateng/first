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
        $sql="SELECT * FROM bugs";
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
