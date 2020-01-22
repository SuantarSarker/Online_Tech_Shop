<?php

session_start();
session_destroy();
header("Location:../products/Home.php");

?>