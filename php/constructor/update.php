<?php
session_start();
require_once('../register/config4.php');
$id=$_SESSION["id"];

require_once('../component.php');
require_once ('config1.php');

$id = $_GET['updateid'];
$sql = "select * from tooltb where id=$id";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row["name"];
$number = $row["number"];
$description = $row["description"];

if(isset($_POST['update'])){
    $name = $_POST["name"];
    $number = $_POST["number"];
	$description = $_POST["description"];

    $sql = "update tooltb set id=$id, name='$name', number='$number', description='$description' where id=$id";

    $result=mysqli_query($con, $sql);
    if($result){
        echo "<script>alert('Entry was updated successfully!!')</script>";
		echo "<script>window.location = ' ../../constructorD.php'</script>";
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
        <h3>Constructor Dashboard</h3>
        <ul>
            <button><a href="../Register/logout.php">Logout</a></button>
        </ul>
    </nav>

    <br>


    <h1 class="center">Update Tool</h1>
    <br><br>
    
    <div class="wrapper center ">
<?php  
function update($name, $number, $description){
    $element="
    <form method=\"POST\"
    <div class=\"wrapper\">
    <label>Name</label><br><br>
    <input type=\"text\" id=\"name\" name=\"name\" value=\"$name\"><br><br><br>
    <label>Phone</label><br>
    <input type=\"text\" id=\"number\" name=\"number\" value=\"$number\"><br><br>
    <label>Description</label><br><br>
    <textarea rows=\"4\" cols=\"34\" name=\"description\">$description</textarea><br>
    <input type=\"submit\" name=\"update\" value=\"Update\">
    </div>
    </form>
    ";

    echo $element;
}
     update($row['name'], $row['number'], $row['description'], $row['id']);
?>
      
</div>
<br>
<footer>2023@copyright</footer>

    
</body>
</html>