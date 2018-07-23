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
color: white;}
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
session_start();
$t=$_SESSION['tno'];
$cl=$_SESSION['tns'];
$q=$_SESSION['tnn'];
$v=$_SESSION['tnt'];
$o=$_SESSION['time'];
$jd=$_SESSION['enterdate'];
$faret=$_SESSION['fare'];

$servername = "localhost";
$username = "root";
$password = "";
$database="irctc";
$con=mysqli_connect($servername,$username,$password,$database);
$u=$_SESSION['user'];
				
				$n1=$_SESSION['n1'];
				$n2=$_SESSION['n2'];
				$n3=$_SESSION['n3'];
				$n4=$_SESSION['n4'];
				$n5=$_SESSION['n5'];
				$n6=$_SESSION['n6'];
				$n7=$_SESSION['n7'];
				$n8=$_SESSION['n8'];
				$n9=$_SESSION['n9'];
				$n10=$_SESSION['n10'];
				
				$pnr=array();
				$j=0;
				$pnr[$j]=rand(100000,10000000);
				$seat=rand(1,72);
				$coach=rand(1,10);
				$c=$_SESSION['cd'];
				$sql = "INSERT INTO payment VALUES('$c','$u','$pnr[$j]','$faret')"; 
				$result = mysqli_query($con, $sql);
				$sql = "INSERT INTO booking (pnr,seat,coach,name,mob,age,gender,bp,sc,id,user,train_no,train_name,time,jdate,fare)
                VALUES ('$pnr[$j]','$seat','$coach','$n1','$n2','$n3','$n4','$n5','$n6','$n7','$u','$t','$q','$o','$jd','$faret')";
                
				$result = mysqli_query($con, $sql);
				$sql="update route set $n8=$n8-1 where train_no=$n9";
                $result = mysqli_query($con, $sql);
				
				$m1=$_SESSION['m1'];
				if(strlen($m1)!=0)
				{
					$j++;
					$m2=$_SESSION['m2'];
					$m3=$_SESSION['m3'];
					$m4=$_SESSION['m4'];
					$m5=$_SESSION['m5'];
					$m6=$_SESSION['m6'];
					$m7=$_SESSION['m7'];
					$seat=$seat+1;
					$pnr[$j]=rand(100000,10000000);
					$sql = "INSERT INTO payment VALUES('$c','$u','$pnr[$j]','$faret')"; 
					$result = mysqli_query($con, $sql);
					$sql = "INSERT INTO booking (pnr,seat,coach,name,mob,age,gender,bp,sc,id,user,train_no,train_name,time,jdate,fare)
                    VALUES ('$pnr[$j]','$seat','$coach','$m1','$m2','$m3','$m4','$m5','$m6','$m7','$u','$t','$q','$o','$jd','$faret')";
                    
					$result = mysqli_query($con, $sql);
				    $sql="update route set $n8=$n8-1 where train_no=$n9";
                    $result = mysqli_query($con, $sql);
				}
				$x1=$_SESSION['x1'];
				if(strlen($x1)!=0)
				{
					$j++;
					$x2=$_SESSION['x2'];
					$x3=$_SESSION['x3'];
					$x4=$_SESSION['x4'];
					$x5=$_SESSION['x5'];
					$x6=$_SESSION['x6'];
					$x7=$_SESSION['x7'];
					$seat=$seat+1;
					$pnr[$j]=rand(100000,10000000);
					$sql = "INSERT INTO payment VALUES('$c','$u','$pnr[$j]','$faret')"; 
					$result = mysqli_query($con, $sql);
					$sql = "INSERT INTO booking (pnr,seat,coach,name,mob,age,gender,bp,sc,id,user,train_no,train_name,time,jdate,fare)
                    VALUES ('$pnr[$j]','$seat','$coach','$x1','$x2','$x3','$x4','$x5','$x6','$x7','$u','$t','$q','$o','$jd','$faret')";
                    
					$result = mysqli_query($con, $sql);
				    $sql="update route set $n8=$n8-1 where train_no=$n9";
                    $result = mysqli_query($con, $sql);
				}
				
				$y1=$_SESSION['y1'];
				if(strlen($y1)!=0)
				{
					$j++;
					$y2=$_SESSION['y2'];
					$y3=$_SESSION['y3'];
					$y4=$_SESSION['y4'];
					$y5=$_SESSION['y5'];
					$y6=$_SESSION['y6'];
					$y7=$_SESSION['y7'];
					$seat=$seat+1;
					$pnr[$j]=rand(100000,10000000);
					$sql = "INSERT INTO payment VALUES('$c','$u','$pnr[$j]','$faret')"; 
					$result = mysqli_query($con, $sql);
					$sql = "INSERT INTO booking (pnr,seat,coach,name,mob,age,gender,bp,sc,id,user,train_no,train_name,time,jdate,fare)
                    VALUES ('$pnr[$j]','$seat','$coach','$y1','$y2','$y3','$y4','$y5','$y6','$y7','$u','$t','$q','$o','$jd','$faret')";
                    
					$result = mysqli_query($con, $sql);
					$sql="update route set $n8=$n8-1 where train_no=$n9";
                    $result = mysqli_query($con, $sql);
				}		

echo" <center><h4><font color='blue'>Ticket Detail</font></h4></center><br>

       <table border='1'  id='customers'>	
		<tr>
			<td>Train No</td>
			<td>$n9</td></tr>
			<tr>
			<td>Train Name</td>
			<td>$n10</td></tr>";
		    $sql="select * from booking where pnr=$pnr[0]";			 
			$result=mysqli_query($con,$sql);
			  while($res = mysqli_fetch_array($result))
			  {
					echo "
			   <tr><td>Date of booking</td>
			   <td>{$res['date']}</td></tr>";
			   echo "
			   <tr><td>Date of Journey</td>
			   <td>{$res['jdate']} {$res['time']}</td></tr>
			   <tr><td>Ticket Fare</td>
			   <td>{$res['fare']} (PAID)</td></tr>
			   </table>";
			  }
			  
			  echo"<center><h4><font color='blue'>Passenger(s) Details with PNR</font></h4></center><br>
 <table border='1'  id='customers'>
   <thead>
                <tr>
                  <th>PNR</th>
				  <th>Name</th>
                  <th>Age</th>
                  <th>Gender</th>
               	  <th>status </th>
				  <th>coach </th>
				   <th>seat No </th></tr>
				   </thead>
				   <tbody>
			  ";
			  
			  
			for($i=0;$i<count($pnr);$i++)
			{
			  $sql="select * from booking where pnr=$pnr[$i]";			 
			  $result=mysqli_query($con,$sql);
			  
			  while($res = mysqli_fetch_array($result))
             {       
            	echo "
				  <tr>
					<td>$pnr[$i]</td>
					<td>{$res['name']}</td>
					<td>{$res['age']}</td>
					<td>{$res['gender']}</td>
					<td>CNF</td>
					<td>S{$res['coach']}</td>
					<td>{$res['seat']}</td>
				  </tr>
				  ";
			 }
			}
			echo "</tbody></table>";
			?>
            <div class="w3-row w3-center w3-section w3-light-blue" style="height:75px;">
				<div class="w3-single w3-section" style="font-size:25px;">
				<?php
					echo "<a href=\"booking.php?name=$t&cl=avilable_sl&tname=$q&s=$v&time=$o&fare=$faret\">Book Another Ticket For The Same Train.</a>";
				?>
				</div>
		     </div>          
			 
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