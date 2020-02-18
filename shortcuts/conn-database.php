<?php
if($_SERVER['HTTP_HOST'] == 'virtualgrades.xyz'){
$db_servername = "sql100.epizy.com";
$db_username = "epiz_24453910";
$db_password = "4PZgDmjKr5yAIxB";
$db_name = "epiz_24453910_general";
}else{
$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "virtualgrades";
}

// Create connection
$mysqli = new mysqli($db_servername, $db_username, $db_password ,$db_name);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>