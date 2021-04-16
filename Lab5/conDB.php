<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "sql206.byethost7.com";
$user = "b7_28370874";
$pass = "0959124464";
$db= "b7_28370874_member";

try{
    $conn = new mysqli($host,$user,$pass,$db);
    // echo "Connected !!";
}
catch (Exception $e) {
    echo $e->getMessage();
}

?>