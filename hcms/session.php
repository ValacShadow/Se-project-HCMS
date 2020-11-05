<?php
   include('connect.php');
   session_start();
   
   $user_check = $_SESSION['username'];
   
   $ses_sql = mysqli_query($con,"select username,user_id from user where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $user = $row['username'];
   $uid=$row['user_id'];
   
   if(!isset($_SESSION['username'])){
      header("location:index.php");
      die();
   }
?>