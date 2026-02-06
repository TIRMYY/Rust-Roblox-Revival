<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'if0_41085720');
define('DB_PASSWORD', 'gored72187218');
define('DB_NAME', 'if0_41085720_kornixdatabase');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($link === false){
    die("There was an error connecting to database: " . mysqli_connect_error());
}

$conn = $link; //so i dont get confused :D
$mysqli = $conn; // i use mysqli now
?>
