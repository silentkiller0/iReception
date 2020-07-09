<?php
session_start();
if(!isset($_SESSION["token"])){
header("Location: ../../Views/Login/login.php");
exit();
}
?>