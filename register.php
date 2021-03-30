<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>

  <form method="post" action="register.php" class="sign-up" >
  	<?php include('errors.php'); ?>
<div class="register">

      <h1>Sign up</h1>
  	
  	  <label ><b>Username</b></label><br>
  	  <input placeholder="enter username" type="text" name="username" value="<?php echo $username; ?>">
  	
  	
  	  <label><b>Email</b></label><br>
  	  <input placeholder="Enter email" type="email" name="email" value="<?php echo $email; ?>">
  	
  	  <label><b>Password</b></label><br>
  	  <input placeholder="Enter Password" type="password" name="password_1">
  	
  	  <label><b>Confirm password</b></label><br>
  	  <input placeholder="Enter Password" type="password" name="password_2">
  	
  	  <button type="submit" class="login-b" name="reg_user">Create account</button>
  	
</div>
  	<p class="account">
  		Already have an account? <a href="login.php">log in</a>
  	</p>
  </form>
</body>
</html>