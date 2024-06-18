<!-- constructor connection -->
<?php
$con = new mysqli("localhost", "root", "", "constructor", 3307);
$sql = "SELECT * FROM tooltb";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0){
    return $result;
}else{
    echo "No values";
}


?>