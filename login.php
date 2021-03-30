<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>waste management system</title>
  
  <link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
  
	 
  <form method="post" action="login.php" class="container">
        <?php include('errors.php'); ?>
        <h1>Log in</h1>
        <div class="login">
        <div>
         <label class="username" for="uname"><b>Username</b></label><br>
         <input type="text" placeholder="Enter Username" name="username" required><br>
        </div>
    
        
            <label  for="psw"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="password" required><br>
        
    
        <button  class="login-b" type="submit" name="login_user">Login</button><br>
       </div>
       <p>
        Not yet a member? <a href="register.php">Sign up</a>
    </p>
       
       </form>
</body>
</html>