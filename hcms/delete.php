<?php
  include('session.php');
   if(isset($_POST['delete'])){
                
	  //database connection
	$conn = mysqli_connect('localhost','root','','hcms');
	   // get submitted database
	   $name =$_POST['uname'];
	   $sql = " DELETE FROM user WHERE username = '$name'";
	   $result=mysqli_query($conn,$sql);
	   {
		header("location: admin.php");
   }  
   }
 ?>