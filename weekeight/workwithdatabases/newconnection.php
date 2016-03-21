<?php
/**
 * Created by PhpStorm.
 * User: CG
 * Date: 21/03/2016
 * Time: 18:27
 */
$db = new mysqli(
    "ap-cdbr-azure-east-c.cloudapp.net",
    "bb8e5351eccd82",
    "e5d86e49",
    "kofifred"
);
if($db -> connect_errno){
    die('Connectfailed['.$db -> connect_error.']');
}