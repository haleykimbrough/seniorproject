<?php
session_start();

if(isset($_SESSION["loginuser"]) && $_SESSION["loginuser"]){
    header("header: mainpage.php");
}



?>