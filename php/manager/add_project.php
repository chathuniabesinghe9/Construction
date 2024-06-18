<?php
session_start();
require_once('../register/config4.php');
$id=$_SESSION["id"];


require_once ('config2.php');


    $name = $_POST["name"];
	$deadline = $_POST["deadline"];
    $cname = $_POST["cname"];
	$description = $_POST["description"];
	
	$sql = "Insert into managertb(id, 
	name, 
	deadline, 
	cname, 
	description)
	values('', 
	'$name', 
	'$deadline',
	'$cname', 
	'$description')";
			
	if(mysqli_query($con, $sql)){
		echo "<script>
		alert('Message was sent successfully!!')
		</script>";
		
		echo "<script>
		window.location = ' ../../projectP.php'
		</script>";
	
	
	}else{
		echo "<script>
		alert('Message wasn't sent, please try again!!')
		</script>";
	}
	
	mysqli_close($con);
?>

