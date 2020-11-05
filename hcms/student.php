<?php
 session_start();
 ?>
<html>
<head>
<title>HCMS</title>
<link rel="icon" type="image/x-icon" href="iiitv.png" sizes="16x16 24x24 32x32 48x48" />
<body style="background:grey;">
<h1 style="text-align:center; color:White; padding:20px;">HOSTEL COMPLAINT MANAGEMENT SYSTEM</h1>
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:black;
  height:50px;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: left;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>
<style>
#siu{
 float:right;
}
</style>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */


button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=textarea]{
	width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;

}
/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacitty: 0.8;
}

</style>
</head>
<script>
function myFunction() {
  var checkBox = document.getElementById("check");
  var text = document.getElementById("text");
  var dam = document.getElementById("dam");
  if (checkBox.checked == true){
    text.style.display = "block";
	dam.style.display = "block";
  } else {
     text.style.display = "none";
	 dam.style.display = "none";
  }
}
</script>

<div class="topnav">
  <a  href="first.php">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a> 
  <form action="logout.php">
   <a id="siu"  href="logout.php" <button style="width:auto;">Logout</button></a>  
<a id="siu" <button style="width:auto;">Hello! <?php echo $_SESSION['username'];?></button></a>      
    </form>
</div>
<br>
<Section>
<h3 style="text-align:center;">COMPLAINT FORM</h3>
<form action="register.php" method="post">
    <div class="container">
      <p>Please fill in this form to register a Complaint.</p>
      <hr>
	  <label for="ctype"><b>Complaint type</b></label>
<br><br>
  <select style="width:150px;height:30px;" id="ctype" name="ctype">
  <option value="electricity">Electricity</option>
  <option value="plumbing">Plumbing</option>
  <option value="mess">Mess</option>
  <option value="laundary">Laundary</option>
  <option value="water">Water</option>
  <option value="internet">Internet</option>
  <option value="propery damage">Property damage</option>
  <option value="other">Other</option>
  
</select><br><br>
      <label for="email"><b>Room no</b></label>
      <input type="text" placeholder="Room no" name="room" required>

      <label for="name"><b>Complaint</b></label>
      <input type="textarea" rows="10" cols="30" placeholder="Type complaint" height="50px" width="100px" name="complaint" required>
<br><br>
  <input style="width:30px;height:20px;"type="checkbox" id="check" onclick="myFunction()">
  <label for="check"><b>Any damage</b></label><br><br>
      <label id="text" for="damage"><b>Specify damage</b></label>
      <input id="dam" type="text" placeholder="optional" name="damage" >
	  
        <button type="submit" name="submit">Register</button>
      </div>
</Section>


<footer style="background-color:black; color:white; border:10px; text-align:center;"> 
<p>Welcome <?php echo $_SESSION['email']; ?></p>
<p>copyright &copy; of IIIT VADODARA</p>
</footer>

</body>
</html>