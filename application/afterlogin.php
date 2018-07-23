<?php
session_start();
?>
<!DOCTYPE html>
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

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
.mySlides {
    display: none;
}
.numbertext {
  color: red;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
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

.container {
    padding: 80px;
}
body{
 // background-color:#F0F8FF;
}

.shake {
	display:inline-block
}
.shake {
	display:block;
	position:relative;
}

h1.shake,
.shake.inline {
	display:inline-block
}

@-webkit-keyframes spaceboots {
	0% { -webkit-transform: translate(2px, 1px) rotate(0deg); }
	10% { -webkit-transform: translate(-1px, -2px) rotate(-1deg); }
	20% { -webkit-transform: translate(-3px, 0px) rotate(1deg); }
	30% { -webkit-transform: translate(0px, 2px) rotate(0deg); }
	40% { -webkit-transform: translate(1px, -1px) rotate(1deg); }
	50% { -webkit-transform: translate(-1px, 2px) rotate(-1deg); }
	60% { -webkit-transform: translate(-3px, 1px) rotate(0deg); }
	70% { -webkit-transform: translate(2px, 1px) rotate(-1deg); }
	80% { -webkit-transform: translate(-1px, -1px) rotate(1deg); }
	90% { -webkit-transform: translate(2px, 2px) rotate(0deg); }
	100% { -webkit-transform: translate(1px, -2px) rotate(-1deg); }
}
.shake:hover,
.shake:focus {
	-webkit-animation-name: spaceboots;
	-webkit-animation-duration: 0.8s;
	-webkit-transform-origin:50% 50%;
	-webkit-animation-iteration-count: infinite;
	-webkit-animation-timing-function: linear;
}
.b
{
	margin-bottom:200px;
	//margin-left:100px;
	
}

.main{
	display:grid;
	grid-template-rows:80px 500px 100px 1fr 1fr 1fr;
}
#one{
	background-color:#F0F8FF;
}
#two{
	display:grid;
	grid-template-columns:380px 960px 1fr 1fr;
}
#tf{
	display:grid;
	grid-template-rows:75px 350px 75px 1fr 1fr 1fr;
}
#tt{
	display:grid;
	grid-template-rows:400px 100px 1fr 1fr;
}

label{
	display: block;
	text-align: left;
	margin: 3px;
}
input{
	height: 34px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid gray;
}

 #bt{
    border-radius:10px;
	border-color:grey;
    padding: 6.2px;
	line-height: 13px;
	-webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
	margin-left:75px;
	width:180px;
 }
 
 #bt:hover{
     background-color: #4CAF50; /* Green */
    color: white;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

 }
 
 #bt2{
    border-radius:10px;
	border-color:grey;
    padding: 6.2px;
	line-height: 13px;
	-webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
	margin-left:75px;
	width:180px;
 }
 
 #bt2:hover{
     background-color: red;
    color: white;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

 }
 
  #bt1{
    border-radius:10px;
	border-color:grey;
    padding: 10px;
	line-height: 13px;
	-webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
	margin-left:75px;
	width:500px;
 }
 
 #bt1:hover{
     background-color: blue;
    color: white;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

 }

#log {
    background-color: gray;
    overflow: hidden;
}
 
 #log a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 23px;
	margin-left:100px;
}

a{
 text-decoration:none;
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
    background-color: #4CAF50;
    color: white;
}
</style>
<script>

</script>
    
   
</head>
<body>
<div class="main">
<div id="one">
<center><h1 class="shake"><font color="blue">Indian Railway Reservation System</font></h1></center>
</div>
<div id="two">
	<div id="tf">
		<div id="user" style="background-color:gray;border:solid;border-color:black;">
			<p style="font-size:20px;margin-left:80px;color:white;">
			<?php
			 	$servername = "localhost";
				$username = "root";
				$password = "";
				$database="irctc";
				$con=mysqli_connect($servername,$username,$password,$database);
				$u=$_SESSION['user'];
				$sql="select name from user where username = '$u'";
				$result=mysqli_query($con,$sql);
				while($res = mysqli_fetch_array($result))
				{
					$name=$res['name'];
				}
				$name=ucwords($name);
				echo "Welcome $name";
			?>
			</p>
		</div>
		<div id="form" style="background-color:#F0F8FF;">
		  <fieldset style="margin-top:5px;border-color:black;">
		   <legend style="color:black;font-size:20px;">Search Train Here!</legend>
			<form action="afterlogin.php#books" method="POST"> 
				<font color="blue" style="font-size:24px;">Select Favourite Journey List</font><br><br>
				<label><b>From Station</b></label>
				<input type="text" name="fs" required><br>
				<label><b>To Station</b></label>
				<input type="text"  name="ts" required><br>
				<label><b>Journey Date</b></label>
				<input type="date" id="txtDateEntered"  name="jd" required>
				<br><br>
				<button type="submit" id="bt" name="search">Submit</button>
			</form>
		  </fieldset>
		</div>
		<div id="log" style="border:solid;border-color:black;">
			<a id="hv" href="login.html">Log Out</a>
		</div>
	</div>
   <div id="tt">
		<div class="slideshow-container">
		<div class="mySlides fade">
		<div class="numbertext">1 / 6</div>
		<img src="train2.jpg" style="width:960px; height:400px;">
		</div>

		<div class="mySlides fade">
		<div class="numbertext">2 / 6</div>
		<img src="train1.jpg" style="width:960px; height:400px;">
		</div>

		<div class="mySlides fade">
		<div class="numbertext">3 / 6</div>
		<img src="train3.jpg" style="width:960px; height:400px;">
		</div>
  
		<div class="mySlides fade">
		<div class="numbertext">4 / 6</div>
		<img src="train4.jpg" style="width:960px; height:400px;">
		</div>
  
		<div class="mySlides fade">
		<div class="numbertext">5 / 6</div>
		<img src="train5.jpg" style="width:960px; height:400px;">
		</div>
		
		<div class="mySlides fade">
		<div class="numbertext">6 / 6</div>
		<img src="train6.jpg" style="width:960px; height:400px;">
		</div>
		<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
     </div>	
	 <div style="margin-top:9.3px;">
	<div class="w3-row w3-center w3-section w3-light-blue" style="height:75px;">
          <div class="w3-single w3-section" >
          <form action="afterlogin.php#books" method="POST">
		<button type="submit" id="bt1" name="review">Review Your Booking History.</button>
	 </form>
          </div>
		  </div>
	</div>
    </div>
</div>
<div id="three">
<?php
   if(isset($_POST['review']))
   {
    $sql="select * from booking where user='$u'";
    $result=mysqli_query($con,$sql);
	echo"<center><center><h3><font color='blue'>Booking Details</font></h3></center>";
	echo "<a id='books'></a>";
	echo "<table id=\"customers\">
	<th>PNR</th>
	<th>Name</th>
	<th>Train_Name</th>
	<th>Train_No</th>
	<th>Booking_Date_Time</th>
	<th>Journey_Date_Time</th>
	<th>Ticket Fare</th>
	<th>Cancel?</th>";
	$hour=idate("H");
	$min=idate("i");
   if (mysqli_num_rows($result) > 0)
  {
	while($res = mysqli_fetch_array($result))
    {
		echo "<tr>
		<td>{$res['pnr']}</td>
	    <td>{$res['name']}</td>
		<td>{$res['train_name']}</td>
		<td>{$res['train_no']}</td>
		<td>{$res['date']}</td>";
		$showtime=str_replace(".",":",$res['time']);
		echo "<td>{$res['jdate']} $showtime</td>";
		echo "<td>{$res['fare']}";
		$i=strpos($res['time'],".");
		$len=strlen($res['time']);
		$jh=substr($res['time'],0,$i);
        $jm=substr($res['time'],$i+1,$len);
		$d=$res['jdate'];
		$date = date("Y-m-d");
		$d = date('Y-m-d', strtotime($d));
		if(strcmp($d,$date)>0){
			echo "<td><a href='cancel.php?pnr={$res['pnr']}'><button type=\"submit\" id='bt2'>Cancel</button></a></td>";
	    }
		else if(strcmp($d,$date)==0)
		{
			if($hour<$jh)
			{
			 echo "<td><a href='cancel.php?pnr={$res['pnr']}'><button type=\"submit\" id='bt2'>Cancel</button></a></td>";
			}
			else if($hour==$jh && $min<$jm)
			{
				echo "<td><a href='cancel.php?pnr={$res['pnr']}'><button type=\"submit\" id='bt2'>Cancel</button></a></td>";
			}
			else
			{
			 echo "<td>N/A (Train Already Departed)</td>";
			}
		}
		else
		{
			echo "<td>N/A (Train Already Departed)</td>";
		}
		echo "</tr>";
	}
   }
   else
   {
    echo "<tr>
		<td>No_Tickets_Found</td>
	    <td>N/A</td>
		<td>N/A</td>
		<td>N/A</td>
		<td>N/A</td>
		<td>N/A</td>
		<td>N/A</td>
		<td>N/A</td></tr>";
   }
   }  
   if(isset($_POST['search']))
   {
	        $n3 = $_POST['jd'];
			$_SESSION['enterdate']=$n3;
			$date = date("Y-m-d");
			$n1=$_POST['fs'];
				$n2=$_POST['ts'];
				$n3=$_POST['jd'];
				$dayofweek = date('w', strtotime($n3));
                switch ($dayofweek)
				{
					case 0: $l="sun";
					        break;
					case 1: $l="mon";
					        break;
					case 2: $l="tue";
					        break;
					case 3: $l="wed";
					        break;
					case 4: $l="thu";
					        break;
					case 5: $l="fri";
					        break;
					case 6: $l="sat";
					        break;
				}
				 $hour=idate("H");
				 $min=idate("i");
				echo"<center><center><h3><font color='blue'>Trains Detail</font></h3></center>";
				echo "<a id='books'></a>";
				echo" <table border='2' id=\"customers\">
              <thead>
                <tr>
                  <th width='60px'> No</th>
				  <th>Train No</th>
                  <th>Train Name</th>
                  <th>From</th>
				  <th>To </th>
				  <th>Time</th>
				   <th>M </th>
				    <th>T </th>
					 <th>W </th>
					  <th>T </th>
					   <th>F </th>
					    <th>S </th>
						 <th>S</th>
						 <th>Ticket Fare</th>
						  <th>Class</th>
                </tr>
              </thead>
              <tbody>";
			  $servername = "localhost";
				$username = "root";
				$password = "";
				$database="irctc";
				$con=mysqli_connect($servername,$username,$password,$database);
			  $sql="select * from route where (r1 like '$n1%' or r2 like '$n1%' or r3 like '$n1%' or r4 like '$n1%' or r5 like '$n1%'  or r6 like '$n1%' or r7 like '$n1%'  or r8 like '$n1%' or r9 like '$n1%' or r10 like '$n1%') and (r1 like '$n2%' or r2 like '$n2%' or r3 like '$n2%' or r4 like '$n2%' or r5 like '$n2%'  or r6 like '$n2%' or r7 like '$n2%'  or r8 like '$n2%' or r9 like '$n2%' or r10 like '$n2%')";
			  $no=1;
			  $result=mysqli_query($con,$sql);
			  $no=1;
			 if (mysqli_num_rows($result) > 0)
		{
			if(strcmp($n3,$date)>0)
			{	
			  while($res = mysqli_fetch_array($result))
				{
					$key=0;
					for($i=5;$i<count($res)/2;$i++){
					 $str1=strtolower($n1);	
					 $k1="/" . $str1 . "/";
					 $str=strtolower($res[$i]);
					 preg_match($k1, $str, $matches, PREG_OFFSET_CAPTURE);
					 if(count($matches)>0){
					 $key=$i;
					 }
					}
					$key=($key+1)-5;
					$departtime="d".$key;
                    $t=$res['train_no'];
					$q=$res['train_name'];
					$faret=$res['fare'];
					$s="select * from departure where train_no='$t'";
					$r=mysqli_query($con,$s);
					while($re= mysqli_fetch_array($r)){
					 $depttime=$re[$departtime];
					}
					$s="select * from day where train_no='$t' ";
					$r=mysqli_query($con,$s);
					while($re= mysqli_fetch_array($r))
					{
    
						if(strcmp($re[$l],"y")==0)
						{
							$o=$depttime;
							echo "<tr style='align=:center'>
							<td >{$no}</td>
							<td>{$res['train_no']}</td>
							<td>{$res['train_name']}</td>
							<td>{$n1}</td>
							<td>{$n2}</td>";
							$showtime=str_replace(".",":",$depttime);
							echo "<td>$showtime</td>
							<td>{$re['mon']}</td>
							<td>{$re['tue']}</td>
							<td>{$re['wed']}</td>
							<td>{$re['thu']}</td>
							<td>{$re['fri']}</td>
							<td>{$re['sat']}</td>
							<td>{$re['sun']}</td>
							<td>{$res['fare']}</td>
							<td>
							<a href='booking.php?name=$t&cl=avilable_sl&tname=$q&s=Sleeper&time=$o&fare=$faret'>SL</a>
							<a href='booking.php?name=$t&cl=avilable_ac&tname=$q&s=3AC&time=$o&fare=$faret'>3A</a>
							</td>
							</tr>";
							$no=$no+1;
						}
					}
			     }
			}
			else if(strcmp($n3,$date)==0)
			{	
				while($res = mysqli_fetch_array($result))
				{   
			        $key=0;
					for($i=5;$i<count($res)/2;$i++){
					 $str1=strtolower($n1);	
					 $k1="/" . $str1 . "/";
					 $str=strtolower($res[$i]);
					 preg_match($k1, $str, $matches, PREG_OFFSET_CAPTURE);
					 if(count($matches)>0){
					 $key=$i;
					 }
					}
					$key=($key+1)-5;
					$departtime="d".$key;
                    $t=$res['train_no'];
					$q=$res['train_name'];
					$faret=$res['fare'];
					$s="select * from departure where train_no='$t'";
					$r=mysqli_query($con,$s);
					while($re= mysqli_fetch_array($r)){
					 $depttime=$re[$departtime];
					}
					$t=$res['train_no'];
					$q=$res['train_name'];

					$s="select * from day where train_no='$t' ";
					$r=mysqli_query($con,$s);
					while($re= mysqli_fetch_array($r))
					{
                        $i=strpos($depttime,".");
						$len=strlen($depttime);
						$jh=substr($depttime,0,$i);
						$jm=substr($depttime,$i+1,$len);
						if($hour<$jh)
						{
							if(strcmp($re[$l],"y")==0)
						 {
							$o=$depttime;
							echo "<tr style='align=:center'>
							<td >{$no}</td>
							<td>{$res['train_no']}</td>
							<td>{$res['train_name']}</td>
							<td>{$n1}</td>
							<td>{$n2}</td>";
							$showtime=str_replace(".",":",$depttime);
							echo "<td>$showtime</td>
							<td>{$re['mon']}</td>
							<td>{$re['tue']}</td>
							<td>{$re['tue']}</td>
							<td>{$re['wed']}</td>
							<td>{$re['thu']}</td>
							<td>{$re['sat']}</td>
							<td>{$re['sun']}</td>
							<td>{$res['fare']}</td>
							<td>
							<a href='booking.php?name=$t&cl=avilable_sl&tname=$q&s=Sleeper&time=$o&fare=$faret'>SL</a>
							<a href='booking.php?name=$t&cl=avilable_ac&tname=$q&s=3AC&time=$o&fare=$faret'>3A</a>
							</td>
							</tr>";
							$no=$no+1;
						 }
						}
						else if($hour==$jh && $min<$jm)
						{
							if(strcmp($re[$l],"y")==0)
						 {
							$o=$depttime;
							echo "<tr style='align=:center'>
							<td >{$no}</td>
							<td>{$res['train_no']}</td>
							<td>{$res['train_name']}</td>
							<td>{$n1}</td>
							<td>{$n2}</td>";
							$showtime=str_replace(".",":",$depttime);
							echo "<td>$showtime</td>
							<td>{$re['mon']}</td>
							<td>{$re['tue']}</td>
							<td>{$re['tue']}</td>
							<td>{$re['wed']}</td>
							<td>{$re['thu']}</td>
							<td>{$re['sat']}</td>
							<td>{$re['sun']}</td>
							<td>{$res['fare']}</td>
							<td>
							<a href='booking.php?name=$t&cl=avilable_sl&tname=$q&s=Sleeper&time=$o&fare=$faret'>SL</a>
							<a href='booking.php?name=$t&cl=avilable_ac&tname=$q&s=3AC&time=$o&fare=$faret'>3A</a>
							</td>
							</tr>";
							$no=$no+1;
						 }
						}
						else
						{
							if(strcmp($re[$l],"y")==0)
						  {
							$o=$depttime;
							echo "<tr style='align=:center'>
							<td >{$no}</td>
							<td>{$res['train_no']}</td>
							<td>{$res['train_name']}</td>
							<td>{$n1}</td>
							<td>{$n2}</td>";
							$showtime=str_replace(".",":",$depttime);
							echo "<td>$showtime</td>
							<td>{$re['mon']}</td>
							<td>{$re['tue']}</td>
							<td>{$re['tue']}</td>
							<td>{$re['wed']}</td>
							<td>{$re['thu']}</td>
							<td>{$re['sat']}</td>
							<td>{$re['sun']}</td>
							<td>{$res['fare']}</td>
							<td>N/A (Train Already Departed)</td>
							</tr>";
							$no=$no+1;
						  }
						}	
					}
				}
			}
			else
			{
				echo "<script>alert('Date Entered is lesser than Current Date');</script>";
			    echo "<tr style='align=:center'>
							<td >1</td>
							<td>N/A</td>
							<td>No_Trains_Found</td>
							<td>N/A</td>
							<td>N/A</td>
							<td>N/A</td>
							<td>N/A</td>
							<td>N/A</td>
							<td>N/A</td>
							<td>N/A</td>
							<td>N/A</td>
							<td>N/A</td>
							<td>N/A</td>
							<td>N/A</td>
							<td>N/A</td>
							</tr>";
			}
		}
		else
			  {
				  echo "<tr style='align=:center'>
							<td >1</td>
							<td>N/A</td>
							<td>No_Trains_Found</td>
							<td>N/A</td>
							<td>N/A</td>
							<td>N/A</td>
							<td>N/A</td>
							<td>N/A</td>
							<td>N/A</td>
							<td>N/A</td>
							<td>N/A</td>
							<td>N/A</td>
							<td>N/A</td>
							<td>N/A</td>
							<td>N/A</td>
							</tr>";
			  }
	
	 }
	?>
    </tbody>
	</table>
	<div class="w3-row w3-center w3-section w3-light-grey" style="height:70px;">
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
</div>
</body>
</html>
