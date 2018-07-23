<head>
<title>IRRS</title>
	<link rel="icon" type="image/gif/png" href="logo.gif">
</head>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database="irctc";
	$con=mysqli_connect($servername,$username,$password,$database);
	session_start();
	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['Password_1'];
		$sql = "SELECT username,password FROM admin where username = '$username' and password = '$password' ";
			$r=mysqli_query($con, $sql);
				if (mysqli_num_rows($r) >  0) {
					$_SESSION["adminuser"] = "$username";
					header("Location:adminpage.php");
					exit();
				} else {
    				echo "<script>alert('Invalid Username or Password. Redirecting to Admin Login Page.');</script>";
			echo "<p><h1>Redirecting Within 2 Seconds....................</h1></p>";
			header("Refresh:1;url=admin.php");
}
		}
	
?>

