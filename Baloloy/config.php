<?php
$servername = "localhost";
$username = "admin123";
$password = "12345";

$conn = mysql_connect($servername, $username, $password);

if(!$conn) {
    die ("Connection Failed" . mysql_connect_error());
}
echo "Connected Succesfully"
?>