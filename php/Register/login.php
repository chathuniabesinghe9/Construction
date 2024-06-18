<?php
session_start();
require "config4.php";

if(isset($_POST["submit"])){
	$username = $_POST["username"];
	$password = $_POST["password"];
	$result = mysqli_query($conn, "SELECT * FROM registertb WHERE username= '$username'");
	
	if(mysqli_num_rows($result) >0){
		while($row= mysqli_fetch_assoc($result)){
			if($password == $row["password"]){
				$_SESSION["login"]=true;
				$_SESSION["id"]= $row["id"];
			// Extract the first two letters of the username
      $firstTwoLetters = substr($username, 0, 2);

      
      if ($firstTwoLetters == 'AD') {
        $_SESSION["id"]= $row["id"];
       header('Location: ../../adminD.php'); 
       exit();
       } 
       
      elseif ($firstTwoLetters == 'CO') {
        $_SESSION["id"]= $row["id"];
       header('Location: ../../constructorD.php'); 
        exit();
      }
      
      elseif ($firstTwoLetters == 'PM') {
        $_SESSION["id"]= $row["id"];
        header('Location: ../../projectP.php'); 
        exit();
      } 
      
      else {
        $_SESSION["id"]= $row["id"];
        header('Location: ../../clientD.php'); 
        exit();
  }

  }
		}
	}
	else{
			echo
			"<script> alert('User not registered');</script>";
		}
	
}

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Construction management system</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" >
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin >
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@900&display=swap"  rel="stylesheet" >
	<link rel="stylesheet" href="../../styles/main.css" >
    <link rel="stylesheet" href="../../styles/login.css" >
    <link rel="stylesheet" href="../../styles/styles.css" >
  </head>

  <nav>
    <img src="images/logo.png" class="logo" >
    <ul>
      <li><a href="../../index.html">Home</a></li>
      <li><a href="../../project.html">Projects</a></li>
      <li><a href="../../Budget.html">Budget</a></li>
      <li><a href="../../contact.php">Contact us</a></li>
      <button><a href="login.php">Login</a></button>
    </ul>
  </nav>
  <body>
    <div class="row">
      <div class="column-1">
        <img src="Images/rh.jpg" alt="" height="100%" width="100%" >
      </div>
      <div class="column-2">

          <div class="login-form form">
            <h1>Login</h1>

            <form action="#" method="post">
              <p>User Name</p>
              <div class="text">
                <input
                  type="text" name="username"  placeholder="Enter your Username" required>
              </div>
              <p>Password</p>
              <div class="text">
                <input
                  type="password" name="password" placeholder="Enter your Password" required>
              </div>
              <div class="text">
                <button type="submit" name="submit">Login</button><br>
                <a href ="register1.php"> Registration </a>
              </div>
            </form>
          </div>  </div> </div>
	
  </body>
  <footer>2023@copyright</footer>
</html>
