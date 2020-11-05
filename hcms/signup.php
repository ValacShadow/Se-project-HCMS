<?php
  include('session.php');
   if(isset($_POST['submit'])){
	   //database connection
	   $conn = mysqli_connect('localhost','root','','hcms');
	   // get submitted database
	  $email = $_POST['email'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $role= $_POST['role'];
	  
	   $sql = "INSERT INTO user (role,email,username,password) VALUES ('$role','$email','$username','$password')";
	   mysqli_query($conn,$sql);
	   {
		  echo '<script type="text/javascript">alert("User registered succesfully");</script>';
		  header("location: admin.php");
	   }
		//echo '<script type="text/javascript">alert("problem in registering");</script>';
	   }
 ?>