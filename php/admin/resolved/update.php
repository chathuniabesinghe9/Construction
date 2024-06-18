<?php

session_start();
require_once('../../register/config4.php');
$id=$_SESSION["id"];

require_once('../../component.php');
require_once ('config6.php');

$id = $_GET['updateid'];
$sql = "select * from resolvedtb where id=$id";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row["name"];
$email = $row["email"];
$phone = $row["phone"];
$topic = $row["topic"];
$description = $row["description"];

if(isset($_POST['update'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $topic = $_POST["topic"];
    $description = $_POST["description"];

    $sql = "update resolvedtb set id=$id, name='$name', email='$email', phone='$phone', topic='$topic', description='$description'where id=$id";

    $result=mysqli_query($con, $sql);
    if($result){
        echo "<script>alert('Entry was updated successfully!!')</script>";
		echo "<script>window.location = 'resolved.php'</script>";
	
	
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
        
        <link rel="stylesheet" href="../../../styles/main.css">

        
</head>
<body>
    
    <nav>
        <img src="../../../images/logo.png" class="logo">
        <h3>Admin Dashboard</h3>
        <ul>
            
        <button><a href="../../Register/logout.php">Logout</a></button>
        </ul>
    </nav>

    <br>


    <h1 class="center">Update Response</h1>
    <br><br>
    
    <div class="wrapper center ">
    <?php  
    function update($name, $email, $phone, $topic, $description){
    $element="
    <form method=\"POST\">
        <div class=\"wrapper\">

        <label>Project name</label>
        <input type=\"text\" id=\"name\" name=\"name\" value=\"$name\"><br><br><br>
        
            
            <label>Email</label>
            <input type=\"email\" id=\"email\" pattern=\"^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$\" name=\"email\" value=\"$email\"><br><br><br>
            
            <label>Phone</label>
            <input type=\"text\" id=\"phone\" name=\"phone\" value=\"$phone\"><br><br><br>

            <label>Topic</label>
            <input type=\"text\" id=\"topic\" name=\"topic\" value=\"$topic\"><br><br><br>


            <label>Description</label><br><br>
            <textarea readonly rows=\"4\" cols=\"64\" name=\"description\">$description</textarea><br><br><br>

            <input type=\"submit\" name=\"update\" value=\"Update\">

        </div>
    </form>
    ";

    echo $element;
}

  
        update($row['name'], $row['email'], $row['phone'], $row['topic'], $row['description']);
    ?>
      
    </div>
    <br>
    <footer>2023@copyright</footer>

    
</body>
</html>