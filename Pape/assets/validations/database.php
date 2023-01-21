<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "inqueritos";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if(!$conn) {
    die("Connetion failed: " . mysqli_connect_error());
}