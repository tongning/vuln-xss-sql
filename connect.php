<?php

$servername = "localhost";
$db_username = "shoutbox";
$db_password = "db_s3cret2_shoutbox";
$dbname = "shoutbox";

// Create connection
$conn = mysqli_connect($servername, $db_username, $db_password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
