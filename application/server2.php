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
	if (isset($_POST['register'])) {
		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = ($_POST['email']);
		$password = ($_POST['Password_1']);
		$conf=($_POST['Password_2']);
		$sql = "SELECT username FROM user  where username = '$username'";
		$r=mysqli_query($con, $sql);
		if (mysqli_num_rows($r) > 0) {
			        echo "<script>alert('User Already Exist. Redirecting to Register Page.');</script>";
			echo "<p><h1>Redirecting Within 2 Seconds....................</h1></p>";
			header("Refresh:0.5;url=register.php");
		}
	    else if($password==$conf)
		{
			$sql = "INSERT INTO user VALUES('$username', '$password','$email', '$name')";
			$r=mysqli_query($con, $sql);
			session_start();
			$_SESSION["user"] = $username;
			header("Location:afterlogin.php");
		}
		else
		{
			echo "<script>alert('Passwords must be same. Redirecting to Register Page.');</script>";
			echo "<p><h1>Redirecting Within 2 Seconds....................</h1></p>";
			header("Refresh:0.5;url=register.php");
		}
}	
?>
