<head>
<link rel="icon" type="image/gif/png" href="sbi.gif">
<title>
State Bank Of India
</title>
</head>

<?php
SESSION_START();
$pnr=$_GET['pnr'];
$servername = "localhost";
$username = "root";
$password = "";
$database="irctc";
$con=mysqli_connect($servername,$username,$password,$database);
$u=$_SESSION['user'];
$sql="DELETE FROM booking where pnr='$pnr' and user='$u'";
$result = mysqli_query($con, $sql);
$sql="SELECT * FROM payment where pnr='$pnr' and user='$u'";
$result = mysqli_query($con, $sql);
while($res = mysqli_fetch_array($result))
    {  
     $cd=$res['cardno'];
	 $ft=$res['fare'];
	}
	$cd=number_format($cd,0,'','');
$sql="DELETE FROM payment where pnr='$pnr' and user='$u'";
$result = mysqli_query($con, $sql);
echo "<h2>Ticket Has Been Successfully Cancelled. Amount $ft Will Be Refunded To The Account Connected To Card Number $cd<h2>";
header("Refresh:4;url=afterlogin.php");
?>