<?php
  include('session.php');
   if(isset($_POST['submit'])){
	   //database connection
	   $conn = mysqli_connect('localhost','root','','hcms');
	   // get submitted database
	   $username = $_SESSION['username'];
	   $ctype=$_POST['ctype'];
	   $room=$_POST['room'];
	   //$userid= $uid;
	   $complaint=$_POST['complaint'];
	   $damage=$_POST['damage'];
	  
	   $sql = "INSERT INTO complaint (username,ctype,room,complaint,damage,status,time_stamp) VALUES ('$username','$ctype','$room','$complaint','$damage','pending',NOW())";
	   mysqli_query($conn,$sql);
	   {
		  echo '<script type="text/javascript">alert("complaint registered succesfully");</script>';
		  header("location: first.php");
	   }
		//echo '<script type="text/javascript">alert("problem in registering");</script>';
	   }
 ?>