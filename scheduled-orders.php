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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Scheduled</title>
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
<h1>Scheduled Orders</h1>
<div class="scheduled">
    <?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db_name ="waste_management_system";

    //create connection
    $connection = mysqli_connect($host, $user, $pass, $db_name);

    //test if connection failed
    if(mysqli_connect_errno()){
        die("connection failed: "
        . mysqli_connect_error()
        . "(" . mysqli_connect_errno()
        . ")");
    }

    //get results from database
    $result = mysqli_query($connection,"SELECT *FROM neworders");
    $all_property = array(); //declare an array for saving property

    //showing property
    echo '<table class="data-table" border="1">
            <tr class="data-heading">'; //initialize table tag
    while ($property = mysqli_fetch_field($result)) {
        echo ' <td>'.$property->name . '</td>'; //get field name for header
        array_push($all_property, $property->name); // save those to array
    }
    echo '</tr>'; //end tr tag

    //showing all data
    while ($row = mysqli_fetch_array($result)){
        echo "<tr>";
        foreach ($all_property as $item){
            echo '<td>' . $row[$item] . '</td>'; //get items using property value
        }
        echo '</tr>';
    }
    echo "</table>";
    ?>
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