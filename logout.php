<?php
session_start();
unset($_SESSION['id_user']);
unset($_SESSION['name']);
unset($_SESSION['id_admin']);
header("Location:index.php");
?>