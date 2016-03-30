<?

/**
 * Created by PhpStorm.
 * User: CG
 * Date: 30/03/2016
 * Time: 19:25
 */
/*create connection with database*/
include ("connection.php");

/*Obtain variables from form*/
$fullname = $_POST["fullname"];
$password = $_POST["password"];

/*create the sql query*/
$sql = "INSERT INTO users(username, password)VALUES ('$fullname','$password')";

// run query
// mysqli_query($db,$sql); it should be at a time

// or run query and give an error message
if(mysqli_query($db,$sql)){

}else{
    echo "Error ".$sql."<br>".mysqli_error($db);
}

// redirection
header("location:viewusers.php");