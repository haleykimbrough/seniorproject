<?php

include("conn.php");
$uname = $_POST("email");
$password = hash("sha512", $password);
$username = mysqli_real_escape_string($conn, $uname);

$sql =("SELECT * Users WHERE email = $username");
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if($count == 0){
    $_SESSION['loginuser'] = $uname;
    header("location: mainpage.php");
}

else {
    echo "You already have an account with us"; 
}

?>