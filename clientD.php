<?php
session_start();
require_once('./php/component.php');
require_once('php/register/config4.php');
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

         <link rel="stylesheet" href="styles/main.css">
		
		 
</head>

<body>
<nav>
<img src="images/logo.png" class="logo">
<h3> Client Manager dashboard</h3>
<ul>

    <li><a href="php/client/create.php?createid="$id>create appointment</a></li>

    <button><a href="php/Register/logout.php">Logout</a></button>
</ul>
</nav>
<br>




<h1 class="center">Scheduled appointment</h1>
<br>
<div class="wrapper flex ">
<?php
        require_once('./php/client/config5.php');
        $result=mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            client($row['id'], $row['cname'], $row['project'], $row['topic'], $row['time'], $row['date'], $row['user_id']); 
        }
        
        
    ?>


 

</div>

<footer>2023@copyright</footer>

    
</body>
</html>
