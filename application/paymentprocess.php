<head>
<link rel="icon" type="image/gif/png" href="sbi.gif">
<title>
State Bank Of India
</title>
</head>
<?php
 echo "<p><h1>Proceeding Through Safe Gateway. Please Wait........<h1><p>";
 SESSION_START();
 $_SESSION['cd']=$_GET['cardNumber'];
 header("Refresh:1;url=paymentcomplete.php");
?>