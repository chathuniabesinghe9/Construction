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
        <h3>Admin Dashboard</h3>
        <ul>
            <li><a href="adminD.php">New messages</a></li>
            <li><a href="php/admin/resolved/resolved.php">Responded messages</a></li>
            <button><a href="php/Register/logout.php">Logout</a></button>
        </ul>
    </nav>

    <br>


    <h1 class="center">Veiw Client Inquiries</h1>
    <br><br>
    
    <div class="wrapper flex" >
        <?php
        require_once('php/admin/config.php');
        $result=mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            admin($row['name'], $row['email'], $row['phone'], $row['topic'], $row['description'], $row['id']); 
        }
        
        
    ?>
    <br>
    
    </div>
    <br>
    <footer>2023@copyright</footer>

    
</body>
</html>