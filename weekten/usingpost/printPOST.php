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

/**
 * Created by PhpStorm.
 * User: 1312897
 * Date: 12/04/2016
 * Time: 10:59
 */