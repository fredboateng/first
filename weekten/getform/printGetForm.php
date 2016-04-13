<?php
$title = $_GET['title'];
$content = $_GET['content'];
$category = $_GET['category'];

echo"<article>
<h1>The title of this article is {$title}</h1>
<p>{$content}</p><br>
<strong>{$category}</strong>
</article>";
?>
