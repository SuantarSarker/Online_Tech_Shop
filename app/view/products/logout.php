<?php
session_start();
session_destroy();
header("Location:../customer_info/Login.php");

?>