<?php

$con = new mysqli("localhost", "root", "", "admindb", 3307);


$sql = "SELECT * FROM infotb";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0){
    return $result;
}

?>

