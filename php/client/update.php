<?php
session_start();
require_once('../component.php');
require_once ('config5.php');

$id = $_GET['updateid'];
$sql = "select * from clienttb where id=$id";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$cname = $row["cname"];
$project = $row["project"];
$topic = $row["topic"];
$time = $row["time"];
$date = $row["date"];

if(isset($_POST['update'])){
    $cname = $_POST["cname"];
	$project = $_POST["project"];
    $topic = $_POST["topic"];
    $time = $row["time"];
	$date = $_POST["date"];

    $sql = "update clienttb set id=$id, cname='$cname', project='$project', topic='$topic', time='$time', date='$date', user_id='$user_id' where id=$id";

    $result=mysqli_query($con, $sql);
    if($result){
        echo "<script>alert('Entry was updated successfully!!')</script>";
		echo "<script>window.location = ' ../../clientD.php'</script>";
	
	
	}else{
		echo "<script>alert('Entry wasn't updated, please try again!!')</script>";
	}
	
	mysqli_close($con);
}


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Construction management system</title>
        
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@900&display=swap" rel="stylesheet">   
        
        <link rel="stylesheet" href="../../styles/main.css">

        
</head>
<body>
    
    <nav>
        <img src="../../images/logo.png" class="logo">
        <h3>Client Dashboard</h3>
        <ul>
           
            <button><a href="../Register/logout.php">Logout</a></button>
        </ul>
    </nav>

    <br>


    <h1 class="center">Update Tool</h1>
    <br><br>
    
    <div class="wrapper center ">
    <?php  
    function update($project, $topic, $time, $date){
    $element="
    <form method=\"POST\"
        <div class=\"wrapper\">

        <label>Project name</label>
        <input type=\"text\" id=\"project\" name=\"project\" value=\"$project\">
        <br><br><br>
        
            
            <label>Topic for discussion</label>
            <input type=\"text\" id=\"topic\" name=\"topic\" value=\"$topic\">
            <br><br><br>
            
            <label>Time</label>
            <input type=\"time\" id=\"time\" name=\"time\" value=\"$time\">
            <br><br><br>

            <label>Date</label><br><br>
            <input type=\"date\" id=\"date\" name=\"date\" value=\"$date\">
            <br><br><br>

            <input type=\"submit\" name=\"update\" value=\"Update\">

        </div>
    </form>
    ";

    echo $element;
}

  
        update($row['project'], $row['topic'], $row['time'], $row['date'], $row['id'], $row['user_id']);
    ?>
      
    </div>
    <br>
    <footer>2023@copyright</footer>

    
</body>
</html>