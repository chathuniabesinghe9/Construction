<?php
session_start();
require_once('../../register/config4.php');
$id=$_SESSION["id"];
?>

<!DOCTYPE html>
<head>
<title>Construction management system</title>

<!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@900&display=swap" rel="stylesheet">   

         <link rel="stylesheet" href="../../../styles/main.css">
		 <link rel="stylesheet" href="pdashboard.css">
		 
</head>

<body>
<nav>
<img src="../../../images/logo.png" class="logo">
<h3>Project Manager dashboard</h3>
<ul>
<li><a href="../../../projectP.php">view project</a></li>
<li><a href="../../../appointmentP.php">appointment</a></li>
<button><a href="../../Register/logout.php">Log Out</a></button>
</ul>
</nav>
<br>

<h1 class="center">Appiontment Entry</h1>
<br><br>

<div class="wrapper">

<form action="add_appointment.php" method="POST">

            <label>Client Name</label>
            <br><br>
            <input 
                type="text" 
                id="cname" 
                name="cname" 
                required/>
                <br><br><br>
    
           
            <label>Project</label>
            <br>
            <input 
                type="text" 
                id="project" 
                name="project" 
                required/>
                <br><br>
    
            <label>Topic</label>
            <br>
            <input 
                type="text" 
                id="topic" 
                name="topic" 
                required/>
                <br><br>

            <label>date</label>
            <br>
            <input 
                type="date" 
                id="date" 
                name="date" 
                required/>
                <br><br>
    
            
            <label>time</label>
            <br>
            <input 
                type="time" 
                id="time" 
                name="time" />
                <br><br>
            
            <input 
                type="submit" 
                name="submit" 
                value="Create">
			</form>
			</div>
				
			<br><br>
				
				
				



<footer>2023@copyright</footer>

    
</body>
</html>