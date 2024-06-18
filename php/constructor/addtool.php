<?php
session_start();
require_once('../register/config4.php');
$id=$_SESSION["id"];
require_once ('config1.php');
$name = $_POST["name"];
$number = $_POST["number"];
$description = $_POST["description"];
$sql = "Insert into tooltb(id, name, number, description) values('', '$name','$number', '$description')";
			
if(mysqli_query($con, $sql)){
	echo "<script>alert('Message was sent successfully!!')</script>";
	echo "<script>window.location = ' ../../constructorD.php'</script>";
	
	
}else{
	echo "<script>alert('Message wasn't sent, please try again!!')</script>";	
}
	
mysqli_close($con);
?>