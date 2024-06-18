<?php

session_start();
require_once('../../register/config4.php');
$id=$_SESSION["id"];

require_once ('../../client/config5.php');


    $cname = $_POST["cname"];
	$project = $_POST["project"];
    $topic = $_POST["topic"];
	$date = $_POST["date"];
    $time = $_POST["time"];
	
	$sql = "Insert into clienttb(id, 
	cname, 
	project, 
	topic, 
	date, 
	time)
	values('', 
	'$cname', 
	'$project',
	'$topic', 
	'$date', 
	'$time')";
			
	if(mysqli_query($con, $sql)){
		echo "<script>
		alert('Message was sent successfully!!')
		</script>";
		echo "<script>
		window.location = '../../../appointmentP.php'
		</script>";
	
	
	}else{
		echo "<script>
		alert('Message wasn't sent, please try again!!')
		</script>";
	}
	
	mysqli_close($con);
?>