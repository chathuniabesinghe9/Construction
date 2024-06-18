<?php
session_start();
require_once('../register/config4.php');
$id=$_SESSION["id"];
	include_once 'config.php';
?>

<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
    $phone = $_POST["phone"];
	$topic = $_POST["topic"];
	$description = $_POST["description"];
	
	$sql = "Insert into infotb(id, name,  email, phone, topic, description)
			values('', '$name', '$email', '$phone', '$topic', '$description')";
			
	if(mysqli_query($con, $sql)){
		echo "<script>alert('Message was sent successfully!!')</script>";
		echo "<script>window.location = ' ../../contact.php'</script>";
	
	
	}else{
		echo "<script>alert('Message wasn't sent, please try again!!')</script>";
	}
	
	mysqli_close($con);
?>
   