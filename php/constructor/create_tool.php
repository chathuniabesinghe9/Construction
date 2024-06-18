<?php
session_start();
require_once('../register/config4.php');
$id=$_SESSION["id"];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Construction management system</title>
        
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@900&display=swap" rel="stylesheet">   
        
        <link rel="stylesheet" href="../../styles/main.css">

        
</head>
<body>
    
    <nav>
        <img src="../../images/logo.png" class="logo">
        <h3>Constructor Dashboard</h3>
        <ul>
            
            <button><a href="../Register/logout.php">Logout</a></button>
        </ul>
    </nav>

    <br>
<!-- nav end -->

<h1 class="center">Update Tool</h1>
<br><br>
    
<div class="wrapper center ">
<form method="POST" action="addtool.php">
<div class="wrapper">
    <label>Name</label><br><br>
    <input type="text" id="name" name="name" required><br><br><br>
    <label>Avaliable</label><br>
    <input type="text" id="number" name="number" required><br><br>
    <label>Description</label><br><br>
    <textarea rows="4" cols="34" name="description" required></textarea><br>
    <input type="submit" name="submit" value="Create">
    </div>
    </form>

</div><br>
<footer>2023@copyright</footer>

    
</body>
</html>