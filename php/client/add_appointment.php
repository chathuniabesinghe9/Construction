<?php
session_start();
require_once ('config5.php');
require_once('../register/config4.php');
 
   if (isset($_POST['submit']))  
    {
		$user_id = $_POST["user_id"];
    }



    $cname = $_POST["cname"];
	$project = $_POST["project"];
    $topic = $_POST["topic"];
	$date = $_POST["date"];
    $time = $_POST["time"];

	$sql = "Insert into clienttb(id, cname,  project, topic, date, time, user_id)
			values('', '$cname', '$project','$topic', '$date', '$time', '$user_id')";
			
	if(mysqli_query($con, $sql)){
		echo "<script>alert('Message was sent successfully!!')</script>";
		echo "<script>window.location = '../../clientD.php'</script>";
	
	
	}else{
		echo "<script>alert('Message wasn't sent, please try again!!')</script>";
	}
	
	mysqli_close($con);
?>

