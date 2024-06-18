<?php

include_once 'config2.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "delete from managertb where id=$id";
    $result=mysqli_query($con, $sql);
    if($result){
        echo "<script>
        alert('Entry was deleted successfully!!')
        </script>";
		echo "<script>
        window.location = ' ../../projectP.php'
        </script>";
	
	
	}else{
		echo "<script>
        alert('Entry wasn't deleted, please try again!!')
        </script>";
	}
	
	mysqli_close($con);
}
?>