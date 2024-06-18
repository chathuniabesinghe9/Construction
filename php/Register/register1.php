<?php
require "config4.php";
//when form submited, insert values into the database.
if(isset($_POST["submit"])){
	$username = $_POST["username"];
	$password = $_POST["password"];
	$re_password = $_POST["re_password"];
	$duplicate = mysqli_query($conn, "SELECT * FROM registertb WHERE username= '$username'");
	if(mysqli_num_rows($duplicate) > 0){
		echo
		"<script> alert('Username has already taken');</script>";
	}
	else{
		if($password == $re_password){
			$query = "INSERT INTO registertb VALUES ('','$username','$password')";
			mysqli_query($conn,$query);
			echo
			"<script> alert('Registration successful');</script>";
		}
		else{
			echo
			"<script> alert('password does not match');</script>";
		}
	}
}

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Construction management system</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@900&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../../styles/login.css" />
    <link rel="stylesheet" href="../../styles/styles.css" />
    
  </head>

  <nav>
    <img src="images/logo.png" class="logo" />
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
        <img src="Images\rh.jpg" alt="" height="100%" width="100%" />
      </div>
      <div class="column-2">
        <div class="login-form">
          <div class="form">
            <h1>Register</h1>

            <form method="post">
              <p>User Name</p>
              <div class="text">
                <input
                  type="text"
                  name="username"
                  placeholder="Enter your Username"
                  required/>
              </div>
              <p>Password</p>
              <div class="text">
                <input
                  type="password"
                  name="password"
                  placeholder="Enter your Password"
                  required/>
			  </div>
				<p>Re-Password</p>
              <div class="text">
                <input
                  type="password"
                  name="re_password"
                  placeholder="Re-Enter your Password"
                  required/>
             
              <div class="text">
        <input type="submit" name="submit" value="Register">
       
        </form>
          </div>
        </div>
  </div>
  </div>
  </div>
</div>
<footer>2023@copyright</footer> 
  
</body>
</html>
