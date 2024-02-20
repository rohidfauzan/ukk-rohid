<?php
session_start();
unset($_SESSION['id_admin']);
unset($_SESSION['username']);
unset($_SESSION['login']);
session_destroy();
header("Location:login.php");
?>
