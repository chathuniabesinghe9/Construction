<?php
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
<button><a href="php/Register/logout.php">Logout</a></button>
</ul>
</nav>
<br>

<h1 class="center">appointments</h1>
<br><br>

<div class="wrapper flex">

<?php
        
        require_once('./php/client/config5.php');
        $result=mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            appointment($row['id'],
                $row['cname'], 
                $row['project'], 
                $row['topic'], 
                $row['date'], 
                $row['time']); 
        }
        
        
    ?>



    </div>
    <button>
        <a href="php/manager/appointment/create.php">
            Create</a>
        </button>
<br><br>


<footer>2023@copyright</footer>

    
</body>
</html>
</html>