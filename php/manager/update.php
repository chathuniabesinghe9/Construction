<?php

session_start();
require_once('../register/config4.php');
$id=$_SESSION["id"];

require_once('../component.php');
require_once ('config2.php');


$id = $_GET['updateid'];
$sql = "select * from managertb where id=$id";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row["name"];
$deadline = $row["deadline"];
$cname = $row["cname"];
$description = $row["description"];

if(isset($_POST['update'])){
    $name = $_POST["name"];
	$deadline = $_POST["deadline"];
    $cname = $_POST["cname"];
	$description = $_POST["description"];

    $sql = "update managertb set id=$id, 
    name='$name', 
    deadline='$deadline', 
    cname='$cname', 
    description='$description' 
    where id=$id";

    $result=mysqli_query($con, $sql);
    if($result){
        echo "<script>alert('Entry was updated successfully!!')</script>";
		echo "<script>window.location = ' ../../projectP.php'</script>";
	
	
	}else{
		echo "<script>alert('Entry wasn't updated, please try again!!')</script>";
	}
	
	mysqli_close($con);
}


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
        <h3>Project Manager Dashboard</h3>
        <ul>
            <li>
                <a href="../../projectP.php">
                    view project
                </a></li>
            <li>
                <a href="../../appointmentP.php">
                    appointment
                </a></li>
            <button>
                <a href="../Register/logout.php">
                    Logout
                </a></button>
        </ul>
    </nav>

    <br>


    <h1 class="center">Update project</h1>
    <br><br>
    
    

    <div class="wrapper center ">
    <?php  
    function update($name, $deadline, $cname, $description){
    $element="
    <form method=\"POST\"
        <div class=\"wrapper\">
            <label>Name</label>
            <br><br>
            <input 
                type=\"text\" 
                id=\"name\" 
                name=\"name\" 
                value=\"$name\"/>
                <br><br><br>
    
           
            <label>deadline</label>
            <br>
            <input type=\"Date\" 
            id=\"deadline\" name=\"deadline\" 
            value=\"$deadline\"/>
            <br><br>
    
            <label>client name</label>
            <br>
            <input 
                type=\"text\" 
                id=\"cname\" 
                name=\"cname\" 
                value=\"$cname\"/>
                <br><br>
    
            <label>Description</label>
            <br><br>
            <textarea 
                rows=\"4\" 
                cols=\"34\" 
                name=\"description\">
                $description
                </textarea><br>
            
            

            <input 
                type=\"submit\" 
                name=\"update\" 
                value=\"Update\"/>

        </div>
    </form>
    ";

    echo $element;
}

  
        update($row['name'], $row['deadline'], $row['cname'], $row['description'], $row['id']);
    ?>
      
    </div>
    <br>
    <footer>2023@copyright</footer>

    
</body>
</html>