<?php
session_start();
require_once('../register/config4.php');
$id=$_SESSION["id"];

require_once ('config.php');

$id = $_GET['respondid'];
$sql = "select * from infotb where id=$id";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row["name"];
$email = $row["email"];
$phone = $row["phone"];
$topic = $row["topic"];
$description = $row["description"];


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
        <h3>Admin Dashboard</h3>
        <ul>
            
        <button><a href="../../Register/logout.php">Logout</a></button>
        </ul>
    </nav>

    <br>


    <h1 class="center">Respond Inquiry</h1>
    <br><br>
    
    <div class="wrapper center" >
    <?php  
    function admin_response($name, $email, $phone, $topic, $description){
    $element="
    <form action=\"add_resolve.php\" method=\"POST\"
        <div class=\"wrapper\">
            <label>Name</label><br><br>
            <input type=\"text\" id=\"name\" name=\"name\" value=\"$name\" readonly><br><br><br>
    
           
            <label>Email</label><br>
            <input type=\"text\" id=\"email\" name=\"email\" value=\"$email\" readonly><br><br>
    
            <label>Phone</label><br>
            <input type=\"text\" id=\"phone\" name=\"phone\" value=\"$phone\"><br><br>
  
            <label>Topic</label><br>
            <input type=\"text\" id=\"topic\" name=\"topic\" value=\"$topic\"><br><br>
    
            <label>Description</label><br><br>
            <textarea rows=\"4\" cols=\"34\" name=\"description\">$description</textarea><br>
            
            

            <input type=\"submit\" name=\"update\" value=\"Update\">

        </div>
    </form>
    ";

    echo $element;
}

  
    admin_response($row['name'], $row['email'], $row['phone'], $row['topic'], $row['description'], $row['id']);
    ?>
      
    </div>
    <br>
    <footer>2023@copyright</footer>

    
</body>
</html>