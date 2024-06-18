<?php
require 'config4.php';
$_SESSION =[];
session_unset();
session_destroy();
//rederecting to home page
header("Location: login.php");
?>