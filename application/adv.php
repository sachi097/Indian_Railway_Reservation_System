<!DOCTYPE html>
<html>
<title>IRRS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/gif/png" href="logo.gif">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><style>
body {font-family: "Roboto", sans-serif}
.w3-bar-block .w3-bar-item{padding:16px;font-weight:bold}
.button{
  background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
#bt{
    border-radius:10px;
	border-color:grey;
    padding: 6.2px;
	line-height: 13px;
	-webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
	margin-left:10px;
	width:180px;
 }
 
 #bt:hover{
     background-color: #4CAF50; /* Green */
    color: white;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

 }
a{
text-decoration:none;
}
#fill{
   margin-top:10px;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
</style>
<body>

<p style="font-size: 25px;">

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" >

<div id="myTop" class="w3-container w3-top w3-theme w3-large">
  <p><i class="fa fa-bars w3-button w3-teal w3-hide-large w3-xlarge" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">Advertiser's Space</span></p>
</div>

<header class="w3-container w3-theme" style="padding:64px 32px">
  <h1 class="w3-xxxlarge">WELCOME! Place Your Advertisement Here.</h1>
</header>

<div class="w3-container" style="padding:32px">



<div class="w3-panel w3-light-grey w3-padding-16 w3-card">
<h3 class="w3-center">Advertisement To Be Uploaded</h3>
<div class="w3-content" style="max-width:800px">

<div class="w3-row">
  
    <form action="adv.php" method="post" enctype="multipart/form-data">
    Select Image to upload:
    <input class="button" type="file" name="fileToUpload" id="fileToUpload">
    <input class="button" type="submit" value="uplaod" name="submit">
	<a class="button" href="login.html">HOME</a>
	</form>
	<?php
      session_start();
   
$anw2 ="";
$err4 ="";
$err5 ="";
$err6 ="";
$error3 ="";
$error1 ="";
$answer1 ="";
$error2="";
$target_dir = "uploads/";

$uploadOk = 1;

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    $error3 = "Sorry, only JPG,JPEG and PNG files are allowed.";
    $uploadOk = 0;
  }
    else if (file_exists($target_file)) {
    $err5 = "Sorry, Advertisement already exists.";
    $uploadOk = 0;
   }
    else if ($_FILES["fileToUpload"]["size"] > 50000000) {
    $err6 = "Sorry, your file is too large.";
    $uploadOk = 0;
   }
  else if(strcmp($imageFileType,'jpeg')==0||strcmp($imageFileType,'jpg')==0||strcmp($imageFileType,'png') == 0||strcmp($imageFileType,'gif') == 0){
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $answer1 = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $_SESSION['img']=basename( $_FILES["fileToUpload"]["name"]);
	   }
       else{
        $uploadOk =0;   
       }
       } 
    }
    else if ($uploadOk == 0) {
    $error1 = "Sorry, your file was not uploaded.";
    }
	echo "<br>$err4 $answer1 $error2 $error3 $err6 $err5 $error1<br>";
	if(strcmp($answer1,"")!=0)
	{
	echo "<fieldset id='fill'><legend>Fill Subscription Details</legend><form action='adv.php' method='POST'>
	<label>Company Name</label>
	<input type='text' required></input><br>
	<label>Time Period In Days</label><br>
	<select name='time' style='width:200px; margin-left:10px; border:5px; border-radius:6px;'>
	 <option value='10' selected>10</option>
	 <option value='20'>20</option>
	 <option value='30'>30</option>
	 <option value='40'>40</option>
	 <option value='50'>50</option>
	 <option value='60'>60</option>
	 </select><br>
	 <label>Type In Your Bank Name</label><br>
	 <input type='text' required></input>
	 <label>Type In Your Account Number</label><br>
	 <input type='text' required></input>
	 <input type='submit' value='Submit' name='next' style='margin-top:10px;' id='bt'></input>
	</form></fieldset>";
	}
}
if(isset($_POST['next']))
{
	echo "<fieldset id='fill'><legend>Confirm Placing Advertisement With Us.</legend><form action='adv.php' method='POST'>
	<label>By Confirming Below You Agree With Our Terms And Conditions. Advertisement May Be Discontinued If Contents Violates The Rules.</label>
     <input type='checkbox' required></input><br>
	 <input type='submit' value='Submit' name='next1' style='margin-top:10px;' id='bt'></input>
	</form></fieldset>";
}
if(isset($_POST['next1']))
{
 setlocale(LC_CTYPE,"en_US.UTF-8");
 $arg=$_SESSION['img'];
 $result=exec("c:\\xampp\\htdocs\\irctc\\img\\add.py $arg");
 echo "<script>alert('Thank You For Placing Advertisement With Us.');</script>";
 header("Refresh:0.5;url=login.html");
}
?>

    
  </div>
  
</div>
</div>
<div class="w3-panel w3-light-grey w3-padding-16 w3-card">
<h3 class="w3-center"></h3>
<div class="w3-content" style="max-width:800px">

<div class="w3-row">
  
   <div class="w3-col m6 w3-large w3-margin-bottom" style="margin-left: 250px;">
        <p><h3>Contact Admin</h3</p><br>
        <i class="fa fa-user" style="width:30px"></i> Sachin Rathod<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +91-78-46-988536<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: adminirrs@gmail.com<br>
		<i class="fa fa-train" style="width:30px"> </i> IRRS Admin<br>
        <a id="contact"></a>
      </div>
     
    
  </div>
  
</div>
</div>
</div>
</div>

<footer class="w3-container w3-theme" style="padding:32px">
  <center><i class="fa fa-train" style="margin-top:10px;"></i><h3><font color="white">Indian Railway Reservation System</font></h3></center>
</footer>
     
</div>

<script>
// Open and close the sidebar on medium and small screens
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Change style of top container on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("myTop").classList.add("w3-card-4", "w3-animate-opacity");
        document.getElementById("myIntro").classList.add("w3-show-inline-block");
    } else {
        document.getElementById("myIntro").classList.remove("w3-show-inline-block");
        document.getElementById("myTop").classList.remove("w3-card-4", "w3-animate-opacity");
    }
}

// Accordions
function myAccordion(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme", "");
    }
}
</script>
     
</body>
</html> 
