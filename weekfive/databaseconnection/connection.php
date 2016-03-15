<?php
/**
 * Created by PhpStorm.
 * User: CG
 * Date: 14/03/2016
 * Time: 16:43
 */
define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME','bb8e5351eccd82');
define('DB_PASSWORD', 'e5d86e49');
define('DB_DATABASE', 'kofifred');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
