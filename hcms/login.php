<?php
   include("connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT id,email,role FROM user WHERE username = '$myusername' and password = '$mypassword' ";
      $result = mysqli_query($con,$sql);
      $row  = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
	  $_SESSION['username'] = $myusername; 
         $_SESSION['email']  = $row["email"];
		 $_SESSION['role']  = $row["role"];
		 
		
      if($count == 1 and $row["role"]=="student") {
		  
         		 
         header("location: first.php");
      }
	  elseif($count == 1 and $row["role"]=='warden'){
		  
		 header("location: warden.php");
	  }
	  elseif($count == 1 and $row["role"]=='admin'){
		  
		 header("location: admin.php");
	  }
	  else{
         echo "<script type='text/javascript'>alert('wrong username or password');</script>"; 
	  }
   }
   ?>