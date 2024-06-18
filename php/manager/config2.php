<?php

$con = new mysqli("localhost", "root", "", "managerdb", 3307);

//get product from database
$sql = "SELECT * FROM managertb";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0){
    return $result;
}else{
    echo "No values";
}


?>
