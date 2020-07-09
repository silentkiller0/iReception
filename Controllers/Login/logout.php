<?php
session_start();
if(session_destroy())
{
header("Location: ../../Views/Login/login.php");
}
?>