<?php
$title = $_POST['title'];
$content = $_POST['content'];
$category = $_POST['category'];

echo"<article>
<h1>The title of this article is {$title}</h1>
<p>{$content}</p><br>
<strong>{$category}</strong>
</article>";
?>
