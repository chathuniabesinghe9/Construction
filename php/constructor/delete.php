<?php

include_once 'config1.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "delete from tooltb where id=$id";
    $result=mysqli_query($con, $sql);
    if($result){
        echo "<script>alert('Entry was deleted successfully!!')</script>";
		echo "<script>window.location = ' ../../constructorD.php'</script>";
	}else{
		echo "<script>alert('Entry wasn't deleted, please try again!!')</script>";
	}
	
	mysqli_close($con);
}
?>