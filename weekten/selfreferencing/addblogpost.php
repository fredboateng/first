<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<header>
    <h1>Form for data Collection</h1>
</header>
<?php
if($_SERVER['REQUEST_METHOD']==='GET')
{
    echo "<form action=\"addblogpost.php\" method=\"post\">
    Title:
    <input type=\"text\" name=\"title\" placeholder=\"title\"><br>
    Content:
    <textarea name=\"content\" rows=\"4\" cols=\"50\"> </textarea><br>
    Category:
    <select name = \"category\">
        <option value=\"cat\">cat</option>
        <option value=\"dog\">dog</option>
        <option value=\"misc\">misc</option>
    </select><br><br>
    <input type=\"submit\" value=\"Submit\">
</form>";
}
elseif($_SERVER['REQUEST_METHOD']==='POST')
{
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category = $_POST['category'];

    echo"<article>
<h1>The title of this article is {$title}</h1>
<p>{$content}</p><br>
<strong>{$category}</strong>
</article>";
}
else{}
?>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: CG
 * Date: 13/04/2016
 * Time: 20:38
 */