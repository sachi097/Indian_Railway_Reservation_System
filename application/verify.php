<head>
<title>IRRS</title>
	<link rel="icon" type="image/gif/png" href="logo.gif">
</head>

<?php
	error_reporting(0);
	$username=$_POST['username'];
	$password=$_POST['password'];
	$db=mysqli_connect('localhost','root','','irctc');
	$sql="SELECT count(*) as c FROM user WHERE username='$username' AND password='$password'";
	$res=mysqli_query($db,$sql);
	$data=mysqli_fetch_assoc($res);
	if($data['c']==1){
		session_start();
		$_SESSION['user']=$username;
		$_SESSION['status']='LOGIN';
	}
	if($data['c']==1)
	{
		header('refresh:0;url=afterlogin.php');
	}
	else
	{
		echo "<script> window.alert('Invalid Username Or Password'); </script>";
	    header('refresh:2;url=login.html');
	}
?>