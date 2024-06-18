<?php

include_once 'config.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "delete from infotb where id=$id";
    $result=mysqli_query($con, $sql);
    if($result){
        echo "<script>alert('Entry was deleted successfully!!')</script>";
		echo "<script>window.location = '../../adminD.php'</script>";
	
	
	}else{
		echo "<script>alert('Entry wasn't deleted, please try again!!')</script>";
	}
	
	mysqli_close($con);
}
?>