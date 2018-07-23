
<html>
<head>
<link rel="icon" type="image/gif/png" href="logo.gif">
<title>
 IRRS
</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #c9cfff;
}
a{
	text-decoration:none;
}
</style>
</head>
<body>
<center><h1><font color="blue">Indian Railway Reservation System</font></h1></center><br><br>
<a href='afterlogin.php' style="margin-right:5px;margin-left:1230px;">Home</a>
<a href='login.html'>Log Out</a>
<?php
			  $servername = "localhost";
$username = "root";
$password = "";
$database="irctc";
$con=mysqli_connect($servername,$username,$password,$database);
$trainno=$_GET['name'];
$train_s=$_GET['cl'];
$train_name=$_GET['tname'];
$v=$_GET['s'];
$o=$_GET['time'];
$faret=$_GET['fare'];


session_start();
$_SESSION['tno']=$trainno;
$_SESSION['tns']=$train_s;
$_SESSION['tnn']=$train_name;
$_SESSION['tnt']=$v;
$_SESSION['time']=$o;
$_SESSION['fare']=$faret;

$s="select $train_s from route where train_no='$trainno' ";
 $r=mysqli_query($con,$s);
 echo "<center>Ticket Avilable</center>";
 echo "<br>";
 while($re= mysqli_fetch_array($r))


echo "<center>$v=<b>{$re[$train_s]}<b></center>";
?>
<h4><font color="blue"><center>Passenger detail</center></font><h4>
<h4><font color="blue"><center>Please Tick The Check Box In Case Your Age Is Greater Than 57</center></font><h4>
<form action="credit.php"  method="post">
<table id="customers">
  <tr>
    <th><label>Name</label></th>
    <th><label>Mobile No</label></th>
    <th><label>Age</label></th>
	 <th><label>Gender</label></th>
	  <th><label>Berth Preference</label></th>
	   <th><label>Senior Citizen</label></th>
	    <th><label>E-mail Id</label></th>
  </tr>
  <tr>
    <td><input type="text" name="uname" maxlength="20" pattern='^[a-zA-Z][a-zA-Z\.]{1,20}$' required></td>
    <td><input type="text" maxlength="10" pattern="[6789][0-9]{9}" name="mb" required></td>
    <td><input type="number" name="age" max="100" min="6" required></td>
	<td><select name="select" required>
	<option value="">Select</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>

</select></td>
<td><select name="sel">
	<option value="none">Select</option>
  <option value="side upper">side upper</option>
  <option value="side lower">side lower</option>
  <option value="upper berth">upper berth</option>
  <option value="middle berth">middle berth</option>
  <option value="lower birth">lower birth</option>
  </select></td>


<input type="hidden" name="date" id="hiddenField" value="<?php echo $train_s ?>" />
<input type="hidden" name="train" id="hiddenField" value="<?php echo $trainno ?>" />
<input type="hidden" name="train_name" id="hiddenField" value="<?php echo $train_name ?>" />
 
<td><center><input type="checkbox" name="citizen" value="YES"></center></td>

 <td><input type="text" name="ssn"></td>
  </tr>
<tr>
    <td><input type="text" name="uname1" maxlength="20" pattern='^[a-zA-Z][a-zA-Z\.]{1,20}$' ></td>
    <td><input type="text" name="mb1" maxlength="10" pattern="[6789][0-9]{9}"></td>
    <td><input type="number" name="age1" max="100" min="6" ></td>
	<td><select name="select1">
	<option value="none">Select</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>

</select></td>
<td><select name="sel1">
	<option value="none">Select</option>
  <option value="side upper">side upper</option>
  <option value="side lower">side lower</option>
  <option value="upper berth">upper berth</option>
  <option value="middle berth">middle berth</option>
  <option value="lower birth">lower birth</option>
  </select></td>



 
<td><center><input type="checkbox" name="citizen1" value="YES"></center></td>
 <td><input type="text" name="ssn1"></td>
  </tr>
  <tr>
    <td><input type="text" name="uname2" maxlength="20" pattern='^[a-zA-Z][a-zA-Z\.]{1,20}$' ></td>
    <td><input type="text" name="mb2" pattern="[6789][0-9]{9}" name="mb"></td>
    <td><input type="number" name="age2" max="100" min="6" ></td>
	<td><select name="select2">
	<option value="none">Select</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>

</select></td>
<td><select name="sel2">
	<option value="none">Select</option>
  <option value="side upper">side upper</option>
  <option value="side lower">side lower</option>
  <option value="upper berth">upper berth</option>
  <option value="middle berth">middle berth</option>
  <option value="lower birth">lower birth</option>
  </select></td>



 
<td><center><input type="checkbox" name="citizen2" value="YES"></center></td>
 <td><input type="text" name="ssn2"></td>
  </tr>
  <tr>
    <td><input type="text" name="uname3" maxlength="20" pattern='^[a-zA-Z][a-zA-Z\.]{1,20}$'></td>
    <td><input type="text" name="mb3" pattern="[6789][0-9]{9}" name="mb"></td>
    <td><input type="number" name="age3" max="100" min="6"></td>
	<td><select name="select3">
	<option value="none">Select</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>

</select></td>
<td><select name="sel3">
	<option value="none">Select</option>
  <option value="side upper">side upper</option>
  <option value="side lower">side lower</option>
  <option value="upper berth">upper berth</option>
  <option value="middle berth">middle berth</option>
  <option value="lower birth">lower birth</option>
  </select></td>



 
<td><center><input type="checkbox" name="citizen3" value="YES"></center></td>
 <td><input type="text" name="ssn3"></td>
  </tr>
  
</table><br>
 <center><button type="submit">Submit</button></center>
    
</form>
<div class="w3-row w3-center w3-section w3-light-grey" style="height:85px;">
          <div class="w3-quarter w3-section">
          <span><b>11+</b></span><br>
            <b>Years of experience</b> 
          </div>
          <div class="w3-quarter w3-section">
          <span><b>55+</b></span><br>
            <b>Booking Agents</b>
          </div>
          <div class="w3-quarter w3-section">
          <span ><b>8.9k</b></span><br>
           <b>Happy Passengers</b>
          </div>
          <div class="w3-quarter w3-section">
           <span><b>150+</b></span><br>
             <b>Delux Trains</b>
           </div>

	</div>
				
</body>
</html>
