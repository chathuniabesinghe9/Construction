<?php
session_start();
require_once('php/register/config4.php');
$id=$_SESSION["id"];
require_once('./php/component.php');
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Construction management system</title>

        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@900&display=swap" rel="stylesheet">   
        
        <link rel="stylesheet" href="styles/main.css">

        
</head>
<body>
    
    <nav>
        <img src="images/logo.png" class="logo">
        <h3>Constructor Dashboard</h3>
        <ul>
           <button><a href="php/Register/logout.php">Logout</a></button>
        </ul>
    </nav>

    <br>


<h1 class="center">Tool Manager</h1>
<br><br>
<div class="wrapper flex" >
    <?php
        require_once('./php/constructor/config1.php');
        $result=mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            constructor($row['id'], $row['name'], $row['number'], $row['description']); //order is according to the component section, name is the database column name
        }
    ?>

</div>
<button><a href="php/constructor/create_tool.php">Create tool</a></button>
<br>
<footer>2023@copyright</footer>
    
</body>
</html>