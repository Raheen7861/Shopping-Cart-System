<?php
require_once ('C:/xampp/htdocs/php-master/connection.php');
session_start();
//destroy the session
session_unset();
//redirect to login page
header("location: C:/xampp/htdocs/php-master/admin/login.php");
?>