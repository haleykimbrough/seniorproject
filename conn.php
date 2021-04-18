<?php
$conn = new mysqli("localhost", "hrkimbro", "olemiss2021", "hrkimbro");
//$conn = new mysqli("localhost", "root", "root", "hrkimbro");

//check connect
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit(); 
}

?>