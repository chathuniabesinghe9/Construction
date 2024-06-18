<?php
	include_once 'php/admin/config.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Construction management system</title>

        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@900&display=swap" rel="stylesheet">   
        
        <link rel="stylesheet" href="styles/main.css">
        <script>
            </script>
        
</head>
<body>
    
    <nav>
        <img src="images/logo.png" class="logo">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="project.html">Projects</a></li>
            <li><a href="Budget.html">Budget</a></li>
            <li><a href="contact.php">Contact us</a></li>
            <button><a href="php/Register/login.php">Login</a></button>
        </ul>
    </nav>

    <br>


    <h1 class="center">Contact us</h1>
    <br>
    
    <div class="wrapper">
        <form action="php/admin/addcontact.php" method="post">
            <label>Name</label><br><br>
            <input type="text" id="name" name="name" required><br><br><br>
    
            <div class="flex">
                <div class="right">
                    <label>Email</label><br><br>
                    <input type="email" id="email" name="email" pattern="^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$" required>
    
                </div>
                
                <div class="left">
                    <label>Phone</label><br><br>
                    <input type="text" id="phone" name="phone" pattern="[0-9]{10}" required>
                </div>
                
            </div>
            <br><br>
    
            <label>Topic</label><br><br>
            <select name="topic" id="topic">
                <option value="registration">Registration</option>
                <option value="budget">Budget Packages</option>
                <option value="login">Login Issues</option>
                <option value="other">Others</option>
            </select><br><br><br>
    
            <label>Description</label><br><br>
            <textarea rows="5" cols="120" value="description" name ="description" required></textarea><br><br>

            <input type="submit" name="contact" value="Submit">

        </form>




     


        
    </div>
    <br>
    <footer>2023@copyright</footer>

    
</body>
</html>