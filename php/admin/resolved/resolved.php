<?php
session_start();
require_once('../../register/config4.php');
$id=$_SESSION["id"];
require_once('../../component.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Construction management system</title>
        
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@900&display=swap" rel="stylesheet">   
        
        <link rel="stylesheet" href="../../../styles/main.css">

        
</head>
<body>
    
    <nav>
        <img src="../../../images/logo.png" class="logo">
        <h3>Admin Dashboard</h3>
        <ul>
            <li><a href="../../../adminD.php">New messages</a></li>
            <li><a href="resolved.php">Responded messages</a></li>
            <button><a href="../../Register/logout.php">Logout</a></button>
        </ul>
    </nav>

    <br>


    <h1 class="center">Responded Client Inquiries</h1>
    <br><br>
    
    <div class="wrapper flex" >
        <?php
        require_once('config6.php');
        $result=mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            resolved($row['name'], $row['email'], $row['phone'], $row['topic'], $row['description'], $row['id']); //order is according to the component section, name is the database column name
        }
        
        
    ?>
    <br>
    
    </div>
    <br>
    <footer>2023@copyright</footer>

    
</body>
</html>