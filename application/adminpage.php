<!DOCTYPE html>
<html>
<title>IRRS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/gif/png" href="logo.gif">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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
a{
text-decoration:none;
}
#bt{
    border-radius:10px;
	border-color:grey;
    padding: 6.2px;
	line-height: 13px;
	-webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
 }
  #bt:hover{
     background-color: #ADD8E6;
    color: white;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

 }
 #bt1{
    border-radius:10px;
	border-color:grey;
    padding: 6.2px;
	line-height: 13px;
	-webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
 }
  #bt1:hover{
     background-color: red;
    color: white;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

 }
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 81%;
	margin-left:251px;
	padding:8px;
}

#customers td, #customers th {
    border: 1px solid #ddd;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
color: white;}

#customer {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 81%;
	margin-left:251px;
	padding:8px;
}

#customer td, #customers th {
    border: 1px solid #ddd;
}

#customer tr:nth-child(even){background-color: #f2f2f2;}

#customer tr:hover {background-color: #ddd;}

#customer th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
color: white;}
</style>
<body>

  <?php
      $servername = "localhost";
	$username = "root";
	$password = "";
	$database="irctc";
	$con=mysqli_connect($servername,$username,$password,$database);
      session_start();
      $username = $_SESSION["adminuser"];
      $query  = " SELECT * from admin where username = '$username' ";
      $r=mysqli_query($con, $query);
      $res=mysqli_fetch_assoc($r);
 ?>
<p style="font-size: 25px;">
<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
  <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="#"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $res['pic'] ).'" style="width:80%;" alt="upload your pic";/>' 
   ?></a>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  <p class="w3-bar-item w3-button w3-teal">IRRS ADMIN</p>
  <p class="w3-bar-item ">Username : <?php echo $res['username'];?></p>
  <a class="w3-bar-item ">Name : <?php echo $res['name'];?></p>
  <a class="w3-bar-item ">Email : <?php echo $res['email'];?></p>
  <a class="w3-bar-item" href="login.html">Sign-Out</a>

</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-container w3-top w3-theme w3-large">
  <p><i class="fa fa-bars w3-button w3-teal w3-hide-large w3-xlarge" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide"><?php echo $res['name'];?>'s Space</span></p>
</div>

<header class="w3-container w3-theme" style="padding:64px 32px">
  <h1 class="w3-xxxlarge">WELCOME <?php echo $res["name"];?></h1>
</header>

<div class="w3-container" style="padding:32px">
<center><h1><font color="blue">Indian Railway Reservation System</font></h1></center>



<div class="w3-panel w3-light-grey w3-padding-16 w3-card">
<h3 class="w3-center">Options</h3>
<div class="w3-content" style="max-width:800px">

   <div class="w3-row">
    <form action="adminpage.php#section" method="post" enctype="multipart/form-data" style="margin-left:200px;">
    <input class="button" type="submit" value="View Existing Train" name="existing" id="existing">
    <input class="button" type="submit" value="Add Train" name="add" style="margin-left:50px;">
	</form>
  </div>
  </div>
  </div>
<div class="w3-panel w3-light-grey w3-padding-16 w3-card">
<h3 class="w3-center"></h3>
<div class="w3-content" style="max-width:800px">

<div class="w3-row">
  
   <div class="w3-col m6 w3-large w3-margin-bottom" style="margin-left: 250px; margin-top: 50px;">
        <i class="fa fa-user" style="width:30px"></i> Sachin Rathod<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +91-78-46-988536<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: adminirrs@gmail.com<br>
		<i class="fa fa-train" style="width:30px"> </i> IRRS Admin<br>
        <a id="contact"></a>
      </div>
     <a id='section'></a>
    
  </div>
  
</div>
</div>
</div>
</div>
<?php
   if(isset($_POST['existing']))
   {
	   $sql="select * from route";
	   $result=mysqli_query($con,$sql);
	   echo"<center><h3><p style='margin-left:250px'><font color='blue'>Existing Trains</font></p></h3></center><br>
	<table border='1'  id='customers'>
	<thead>
                <tr>
                  <th>Train No.</th>
				  <th>Train Name</th>
                  <th>Avail Sleepe</th>
                  <th>Avail AC</th>
               	  <th>From</th>
				  <th>Station 1</th>
				   <th>Station 2</th>
				   <th>Station 3</th>
				   <th>Station 4</th>
				   <th>Station 5</th>
				   <th>Station 6</th>
				   <th>Station 7</th>
				   <th>Station 8</th>
				   <th>Station 9</th>
				   <th>Station 9</th>
				   <th>Modify</th></tr>
				   </thead>
				   <tbody>
			  ";
	  while($res=mysqli_fetch_array($result)){
		  $tn=$res['train_no'];
	   echo "<tr>
	   <td>{$res['train_no']}</td>
	   <td>{$res['train_name']}</td>
	   <td>{$res['avilable_sl']}</td>
	   <td>{$res['avilable_ac']}</td>
	   <td>{$res['r1']}</td>
	   <td>{$res['r2']}</td>
	   <td>{$res['r3']}</td>
	   <td>{$res['r4']}</td>
	   <td>{$res['r5']}</td>
	   <td>{$res['r6']}</td>
	   <td>{$res['r7']}</td>
	   <td>{$res['r8']}</td>
	   <td>{$res['r9']}</td>
	   <td>{$res['r10']}</td>
	   <td><form action='adminpage.php#section' method='POST'>
	   <input type='submit' name='modify' value='$tn' id='bt'></input></form>
	   </td>
	   </tr>";
	  }
	  echo "</tbody></table>";
	   
   }
   if(isset($_POST['add']))
   {
	   echo"<center><h3><p style='margin-left:250px'><font color='blue'>Add Train</font></p></h3></center><br>";
	   echo "<table border='1'  id='customer'>
	<thead>
                <tr>
                  <th>Train No.</th>
				  <th>Train Name</th>
                  <th>Avail Sleepe</th>
                  <th>Avail AC</th>
               	  <th>From</th>
				  <th>Station 1</th>
				   <th>Station 2</th>
				   <th>Station 3</th>
				   <th>Station 4</th>
				   <th>Station 5</th>
				   <th>Station 6</th>
				   <th>Station 7</th>
				   <th>Station 8</th>
				   <th>Station 9</th>
				   <th>Ticket Fare</th>
				   <th>Add Train</th></tr>
				   </thead>
				   <tbody><form action='adminpage.php#section' method='POST'>
			  ";
			    echo "<tr><td><input type='text' value='' name='tn' style='width:60px;border:solid gray;border-radius:10px;' required></td>
				<td><input type='text' value='' name='tnn' style='width:60px;border:solid gray;border-radius:10px;' required></td>";
				echo "<td><input type='text' value='' name='sl' style='width:30px;border:solid gray;border-radius:10px;' required></input></td>
				<td><input type='text' value='' name='ac' style='width:30px;border:solid gray;border-radius:10px;' required></input></td>
				<td><input type='text' value='' name='r1' style='width:70px;border:solid gray;border-radius:10px;' required></input></td>
				<td><input type='text' value='' name='r2' style='width:70px;border:solid gray;border-radius:10px;' required></input></td>
				<td><input type='text' value='' name='r3' style='width:70px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='text' value='' name='r4' style='width:70px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='text' value='' name='r5' style='width:70px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='text' value='' name='r6' style='width:70px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='text' value='' name='r7' style='width:70px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='text' value='' name='r8' style='width:70px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='text' value='' name='r9' style='width:70px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='text' value='' name='r10' style='width:70px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='text' value='' name='fare' style='width:65px;border:solid gray;border-radius:10px;' required></input></td>
				<td><input type='submit' name='addtrain' value='Add' id='bt'></input>
				</td></tr>";
			  
			  echo "</form></tbody></table>";
   }
   if(isset($_POST['addtrain']))
   {
	   $tn=$_POST['tn'];
	   $_SESSION['newtn']=$tn;
	   $tnn=$_POST['tnn'];
	   $sl=$_POST['sl'];
	   $ac=$_POST['ac'];
	   $r1=$_POST['r1'];
	   $r2=$_POST['r2'];
	   $r3=$_POST['r3'];
	   $r4=$_POST['r4'];
	   $r5=$_POST['r5'];
	   $r6=$_POST['r6'];
	   $r7=$_POST['r7'];
	   $r8=$_POST['r8'];
	   $r9=$_POST['r9'];
	   $r10=$_POST['r10'];
	   $f=$_POST['fare'];
	   $sql="select * from route where train_no = '$tn'";
	   $result=mysqli_query($con,$sql);
	   if (mysqli_num_rows($result) >  0) {
	     echo "<script>alert('Failed! Train With Train No. $tn Already Exist.');</script>";
	   }
	   else
	   {
		   $sql="insert into route(train_no, train_name, avilable_sl, avilable_ac, r1, r2, r3, r4, r5, r6, r7, r8, r9, r10,fare) values('$tn','$tnn','$sl','$ac','$r1','$r2','$r3','$r4','$r5','$r6','$r7','$r8','$r9','$r10','$f')";
	       $result=mysqli_query($con,$sql);
		   echo"<center><h3><p style='margin-left:250px'><font color='blue'>Add Departure Times In (X.XX)</font></p></h3></center><br>";
	   echo "<table border='1'  id='customer'>
	<thead>
                <tr>
                  <th>Train No.</th>
				  <th>D1</th>
                  <th>D2</th>
                  <th>D3</th>
               	  <th>D4</th>
				  <th>D5</th>
				   <th>D6</th>
				   <th>D7</th>
				   <th>D8</th>
				   <th>D9</th>
				   <th>D10</th>
				   <th>Add Times</th></tr>
				   </thead>
				   <tbody><form action='adminpage.php#section' method='POST'>";
				  echo "<tr><td>$tn</td>
				<td><input type='text' value='' name='d1' style='width:60px;border:solid gray;border-radius:10px;' required></td>";
				echo "<td><input type='text' value='' name='d2' style='width:60px;border:solid gray;border-radius:10px;' required></input></td>";
				if(strcmp($r3,'')!=0)
				{
					echo "<td><input type='text' value='' name='d3' style='width:60px;border:solid gray;border-radius:10px;' required></input></td>";
				}
				else{
				 echo "<td><input type='text' value='' name='d3' style='width:60px;border:solid gray;border-radius:10px;'></input></td>";
				}
                if(strcmp($r4,'')!=0)
				{
					echo "<td><input type='text' value='' name='d4' style='width:60px;border:solid gray;border-radius:10px;' required></input></td>";
				}
				else{
				 echo "<td><input type='text' value='' name='d4' style='width:60px;border:solid gray;border-radius:10px;'></input></td>";
				}
				if(strcmp($r5,'')!=0)
				{
					echo "<td><input type='text' value='' name='d5' style='width:60px;border:solid gray;border-radius:10px;' required></input></td>";
				}
				else{
				 echo "<td><input type='text' value='' name='d5' style='width:60px;border:solid gray;border-radius:10px;'></input></td>";
				}
				if(strcmp($r6,'')!=0)
				{
					echo "<td><input type='text' value='' name='d6' style='width:60px;border:solid gray;border-radius:10px;' required></input></td>";
				}
				else{
				 echo "<td><input type='text' value='' name='d6' style='width:60px;border:solid gray;border-radius:10px;'></input></td>";
				}
				if(strcmp($r7,'')!=0)
				{
					echo "<td><input type='text' value='' name='d7' style='width:60px;border:solid gray;border-radius:10px;' required></input></td>";
				}
				else{
				 echo "<td><input type='text' value='' name='d7' style='width:60px;border:solid gray;border-radius:10px;'></input></td>";
				}
				if(strcmp($r8,'')!=0)
				{
					echo "<td><input type='text' value='' name='d8' style='width:60px;border:solid gray;border-radius:10px;' required></input></td>";
				}
				else{
				 echo "<td><input type='text' value='' name='d8' style='width:60px;border:solid gray;border-radius:10px;'></input></td>";
				}
				if(strcmp($r9,'')!=0)
				{
					echo "<td><input type='text' value='' name='d9' style='width:60px;border:solid gray;border-radius:10px;' required></input></td>";
				}
				else{
				 echo "<td><input type='text' value='' name='d9' style='width:60px;border:solid gray;border-radius:10px;'></input></td>";
				}
				if(strcmp($r10,'')!=0)
				{
					echo "<td><input type='text' value='' name='d10' style='width:60px;border:solid gray;border-radius:10px;' required></input></td>";
				}
				else{
				 echo "<td><input type='text' value='' name='d10' style='width:60px;border:solid gray;border-radius:10px;'></input></td>";
				}
				echo "<td><input type='submit' name='addtime' value='Add' id='bt' style='margin-left:5px; width:70px;'></input>
				</td></tr>";
				echo "</form></tbody></table>";
	   }
   }
   if(isset($_POST['addtime']))
   {
	   $tn=$_SESSION['newtn'];
	   $d1=$_POST['d1'];
	   $d2=$_POST['d2'];
	   $d3=$_POST['d3'];
	   $d4=$_POST['d4'];
	   $d5=$_POST['d5'];
	   $d6=$_POST['d6'];
	   $d7=$_POST['d7'];
	   $d8=$_POST['d8'];
	   $d9=$_POST['d9'];
	   $d10=$_POST['d10'];
	   $sql="insert into departure (train_no, d1, d2, d3, d4, d5, d6, d7, d8, d9, d10) values('$tn','$d1','$d2','$d3','$d4','$d5','$d6','$d7','$d8','$d9','$d10')";
	   $result=mysqli_query($con,$sql);
	   echo"<center><h3><p style='margin-left:250px'><font color='blue'>Add Schedule Details For The Week</font></p></h3></center><br>";
	   echo "<table border='1'  id='customer'>
	<thead>
                <tr>
                  <th>Train No.</th>
				  <th>Mon</th>
                  <th>Tue</th>
                  <th>Wed</th>
               	  <th>Thu</th>
				  <th>Fri</th>
				   <th>Sat</th>
				   <th>Sun</th>
				   <th>Add Schedule</th></tr>
				   </thead>
				   <tbody><form action='adminpage.php#section' method='POST'>";
				   echo "<tr><td>$tn</td>
				   <td><select name='mon' style='width:50px;border:solid gray;border-radius:10px;' required>
				   <option value='y'>y</option>
				   <option vlaue='n'>n</option>
				   </select>
				   </td>
				   <td><select name='tue' style='width:50px;border:solid gray;border-radius:10px;' required>
				   <option value='y' >y</option>
				   <option vlaue='n'>n</option>
				   </select>
				   </td>
				   <td><select name='wed' style='width:50px;border:solid gray;border-radius:10px;' required>
				   <option value='y'>y</option>
				   <option vlaue='n'>n</option>
				   </select>
				   </td>
				   <td><select name='thu' style='width:50px;border:solid gray;border-radius:10px;' required>
				   <option value='y' >y</option>
				   <option vlaue='n'>n</option>
				   </select>
				   </td>
				   <td><select name='fri' style='width:50px;border:solid gray;border-radius:10px;' required>
				   <option value='y' >y</option>
				   <option vlaue='n'>n</option>
				   </select>
				   </td>
				   <td><select name='sat' style='width:50px;border:solid gray;border-radius:10px;' required>
				   <option value='y' >y</option>
				   <option vlaue='n'>n</option>
				   </select>
				   </td>
				   <td><select name='sun' style='width:50px;border:solid gray;border-radius:10px;' required>
				   <option value='y'>y</option>
				   <option vlaue='n'>n</option>
				   </select>
				   </td>
				   <td><input type='submit' name='addweek' value='Add' id='bt' style='margin-left:5px; width:70px;'></input></td>
				   </tr>";
				   echo "</form></tbody></table>";	   
   }
   if(isset($_POST['addweek']))
   {
	   $tn=$_SESSION['newtn'];
	   $d1=$_POST['mon'];
	   $d2=$_POST['tue'];
	   $d3=$_POST['wed'];
	   $d4=$_POST['thu'];
	   $d5=$_POST['fri'];
	   $d6=$_POST['sat'];
	   $d7=$_POST['sun'];
	   $sql="insert into day(train_no, mon, tue, wed, thu, sat, sun, fri) values('$tn','$d1','$d2','$d3','$d4','$d6','$d7','$d5')";
	   $result=mysqli_query($con,$sql);
	   echo "<script>alert('Train With Train No. $tn Added Successfully.');</script>";
   }
   if(isset($_POST['modify']))
   {
	   $tn=$_POST['modify'];
	   $_SESSION['tn']=$tn;
	   $sql="select train_name from route where train_no='$tn'";
	   $result=mysqli_query($con,$sql);
	   while($res=mysqli_fetch_array($result)){
	      $trainn=$res['train_name'];  
	   }
	   echo"<center><h3><p style='margin-left:250px'><font color='blue'>Modify Train Details Of Train $trainn</font></p></h3></center><br>";
	   $sql="select * from route where train_no='$tn'";
	   $result=mysqli_query($con,$sql);
     echo "<table border='1'  id='customer'>
	<thead>
                <tr>
                  <th>Train No.</th>
				  <th>Train Name</th>
                  <th>Avail Sleepe</th>
                  <th>Avail AC</th>
               	  <th>From</th>
				  <th>Station 1</th>
				   <th>Station 2</th>
				   <th>Station 3</th>
				   <th>Station 4</th>
				   <th>Station 5</th>
				   <th>Station 6</th>
				   <th>Station 7</th>
				   <th>Station 8</th>
				   <th>Station 9</th>
				   <th>Ticket Fare</th>
				   <th>Modify</th></tr>
				   </thead>
				   <tbody><form action='adminpage.php#section' method='POST'>
			  ";
			  
			  while($res=mysqli_fetch_array($result))
			  {
			    echo "<tr><td>{$res['train_no']}</td>
				<td>{$res['train_name']}</td>";
				$sl=$res['avilable_sl'];
				$ac=$res['avilable_ac'];
				$r1=$res['r1'];
				$r2=$res['r2'];
				$r3=$res['r3'];
				$r4=$res['r4'];
				$r5=$res['r5'];
				$r6=$res['r6'];
				$r7=$res['r7'];
				$r8=$res['r8'];
				$r9=$res['r9'];
				$r10=$res['r10'];
				$f=$res['fare'];
				echo "<td><input type='text' value='$sl' name='sl' style='width:30px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='text' value='$ac' name='ac' style='width:30px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='text' value='$r1' name='r1' style='width:65px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='text' value='$r2' name='r2' style='width:65px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='text' value='$r3' name='r3' style='width:65px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='text' value='$r4' name='r4' style='width:65px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='text' value='$r5' name='r5' style='width:65px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='text' value='$r6' name='r6' style='width:65px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='text' value='$r7' name='r7' style='width:65px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='text' value='$r8' name='r8' style='width:65px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='text' value='$r9' name='r9' style='width:65px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='text' value='$r10' name='r10' style='width:65px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='text' value='$f' name='fare' style='width:65px;border:solid gray;border-radius:10px;'></input></td>
				<td><input type='submit' name='update' value='Update' id='bt' style='margin-left:5px;'></input>
				<input type='submit' name='delete' value='Delete' id='bt1' style='margin-top:4px;margin-left:5px;width:65px;'></input></td></tr>";
			  }
			  echo "</form></tbody></table>";
			  
   }
   if(isset($_POST['delete']))
   {
	   $tn=$_SESSION['tn'];
	   $sql="delete from route where train_no = '$tn'";
	   $result=mysqli_query($con,$sql);
	   echo "<script>alert('Train With Train No. $tn Has Been Deleted');</script>";
   }
   if(isset($_POST['update']))
   {
	   $tn=$_SESSION['tn'];
	   $sl=$_POST['sl'];
	   $ac=$_POST['ac'];
	   $r1=$_POST['r1'];
	   $r2=$_POST['r2'];
	   $r3=$_POST['r3'];
	   $r4=$_POST['r4'];
	   $r5=$_POST['r5'];
	   $r6=$_POST['r6'];
	   $r7=$_POST['r7'];
	   $r8=$_POST['r8'];
	   $r9=$_POST['r9'];
	   $r10=$_POST['r10'];
	   $f=$_POST['fare'];
	   $sql="update route set avilable_sl = '$sl', avilable_ac = '$ac' , r1 = '$r1' , r2 = '$r2' , r3 = '$r3' , r4 = '$r4' , r5 = '$r5' ,r6 = '$r6' ,r7 = '$r7' ,r8 = '$r8' ,r9 = '$r9' , r10 = '$r10', fare = '$f' where train_no = '$tn'";
	   $result=mysqli_query($con,$sql);
	   echo "<script>alert('Train Details Of Train No. $tn Has Been Updated');</script>";
   }
   ?>
<footer class="w3-container w3-theme" style="margin-left:251px;">
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
