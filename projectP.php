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
        <h3> Project Manager dashboard</h3>
        <ul>
            <li><a href="projectP.php">view project</a></li>
            <li><a href="appointmentP.php">appointment</a></li>
            <button><a href="php/Register/logout.php">LogOut</a></button>
        </ul>
    </nav>
<br>

<h1 class="center">
    View Project
</h1>
<br>
<br>

<div class="wrapper flex">

<?php
        require_once('./php/manager/config2.php');
        $result=mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            manager($row['id'], 
            $row['name'], 
            $row['deadline'], 
            $row['cname'], 
            $row['description']); 
        }
      
        
    ?>   


    </div>	
		
<button type="submit">
    <a href="php/manager/create_project.php">
        Create new entry
    </a>
</button><br>


 


<footer>2023@copyright</footer>

    
</body>
</html>
