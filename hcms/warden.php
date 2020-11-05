<?php
 session_start();
 $user=$_SESSION['username'];
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
<div class="topnav">
  <a  href="warden.php">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a> 
  <form action="logout.php">
   <a id="siu"  href="logout.php" <button style="width:auto;">Logout</button></a>
<a id="siu" <button style="width:auto;">Hello! <?php echo $user;?></button></a>   
    </form>
</div>
<br>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1500px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <a href="" target="_blank"><img src="hostel.jpg" width="1500" height="600"></a>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <a href="" target="_blank"><img src="download.jpg" width="1500" height="600"></a>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <a href="#1" target="_blank"><img src="download1.jpg"width="1500" height="600"></a>
</div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<style>
.left{
	display:block;
	margin:1px;
	float:left;
	width:40%;
	height:600px;
   box-shadow: 5px 1px 5px  ;
overflow:scroll;	  
}
.right{
	 display:block;
	margin:1px;
	float:right;
	width:59%;
}

 .vblock{
	display:inline-block;
	margin:10px;
	width:99%;
	text-align:center;
	box-shadow: 2px 1px 2px black;
	background-color:white;
	}
	 
 
</style>
<section>
<aside class="left">
<h2 style="text-align:center; ">All Complaints</h2>
<?php 
   $conn = mysqli_connect('localhost','root','','hcms');
   $sql = "SELECT * FROM complaint ORDER BY id DESC";
   $result=mysqli_query($conn,$sql);
   while ($row =mysqli_fetch_assoc($result)){
		 
	   echo "<div class='vblock'>";
	   echo "<p>Complaint:".$row['complaint']."</p>";
	   echo "<p>Complaint id: ".$row['id']."</p>";
	    echo "<p>Complaint type:".$row['ctype']."</p>";
		echo "<p>status:".$row['status']."</p>";
	    echo"</div>";		
   }
   
   ?>   
   </aside>
   <aside class="right">
<h2>Pending Complaints</h2>
<?php 
   $conn = mysqli_connect('localhost','root','','hcms');
   $sql = "SELECT * FROM complaint WHERE  status='pending'";
   $result=mysqli_query($conn,$sql);
   while ($row =mysqli_fetch_assoc($result)){
		 
	   echo "<div class='vblock'>";
	   echo "<p>Complaint:".$row['complaint']."</p>";
	   echo "<p>Complaint id: ".$row['id']."</p>";
	    echo "<p>Complaint type:".$row['ctype']."</p>";
		echo "<p>status:".$row['status']."</p>";
	    echo"</div>";		
   }
   
   ?>   
   </aside>
</section>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer style="background-color:black; color:white; border:10px; text-align:center;"> 
<p>Welcome <?php echo $_SESSION['email']; ?></p>
<p>copyright &copy; of IIIT VADODARA</p>
</footer>
</html>