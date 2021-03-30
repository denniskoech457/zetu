<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!-- notification message -->
<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
<!DOCTYPE html>
<html>
<head>
	<title>Management dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
    crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="dashboard.css">
    <script src="/registration/fontawesome.js"
            crossorigin="anonymous"></script>
</head>
<body>
<nav class="navigation">

	<h2 class="head">Management Dashboard</h2>
    <div class="header">
    <a class="bg" href="https://www.instagram.com/djdyex/"><i class="far fa-user-circle fa-4x"></i></a
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p> <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: white;">logout</a> </p>
    <?php endif ?>
</div>
</nav>

<div class="content" >

        

    <div class="orders">
        <button class="buttons" type="submit"><a href="scheduled-orders.php">scheduled orders</a></button><br>
        <button class="buttons" type="submit" ><a href="completed-orders.html">completed orders</a></button>
</div>
</div>
<footer >
    <h1 class="contact-head">contact us</h1>
    <ul class="">
        <a  href="sms:+254792919411">send sms</a></li>
        <a href="clanoptimism@gmail.com">Email </a>
    </ul>
    <div  class="">
      <a class="bg" href="https://www.facebook.com/profile.php?id=100009118189563"><i class="fab fa-facebook"></i></a>
      <a class="bg" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
      
      <a class="bg" href="https://twitter.com/" ><i class="fab fa-twitter-square"></i></a>
      </div>
      

    <p> Clan Optimism All right Reserved. ©2021 Nairobi, KENYA</p>
</footer>

  	
    

    
 




		
</body>
</html>