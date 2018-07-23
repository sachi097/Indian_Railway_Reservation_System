<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Payment</title>
<link rel="icon" type="image/gif/png" href="pay.gif">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="container">
<div class="row">
<!-- You can make it whatever width you want. I'm making it full width
on <= small devices and 4/12 page width on >= medium devices -->
<div class="col-xs-12 col-md-4">


<!-- CREDIT CARD FORM STARTS HERE -->
<div class="panel panel-default credit-card-box">
<div class="panel-heading display-table" >
<div class="row display-tr" >
<h3 class="panel-title display-td" >Payment Details</h3>
<div class="display-td" >                            
<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
</div>
</div>                    
</div>
<div class="panel-body">
<form role="form" action="paymentprocess.php" id="payment-form">
<div class="row">
<div class="col-xs-12">
<div class="form-group">
<label for="cardNumber">Amount : <?php session_start(); echo $_SESSION['fare'];?></label>
<label for="cardNumber">CARD NUMBER</label>
<div class="input-group">
<input 
type="tel"
class="form-control"
name="cardNumber"
maxlength="16"
placeholder="Valid Card Number"
autocomplete="cc-number"
pattern="[1-9]{1}[0-9]{15}"
required autofocus 
/>
<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
</div>
</div>                            
</div>
</div>
<div class="row">
<div class="col-xs-12">
<div class="form-group">
<label for="cardNumber">Name On The Card</label>
<div class="input-group">
<input 
type="tel"
class="form-control"
name="cardNumber"
maxlength="30"
placeholder="Valid Name"
autocomplete="cc-number"
pattern='^[a-zA-Z][a-zA-Z\.]{1,29}$'
required autofocus 
/>
<span class="input-group-addon"><i class="fa fa-user" style="margin-left:4px;"></i></span>
</div>
</div>                            
</div>
</div>
<div class="row">
<div class="col-xs-7 col-md-7">
<div class="form-group">
<label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
<input 
type="tel" 
class="form-control" 
name="cardExpiry"
placeholder="MM / YY"
autocomplete="cc-exp"
pattern="[01]{1}[0-9]{1}[/][1-9]{1}[0-9]{1}"
maxlength="5"
required 
/>
</div>
</div>
<div class="col-xs-5 col-md-5 pull-right">
<div class="form-group">
<label for="cardCVC">CV CODE</label>
<input 
type="tel" 
class="form-control"
name="cardCVC"
placeholder="CVC"
autocomplete="cc-csc"
pattern="[0-9]{3}"
maxlength="3"
required
/>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<button class="btn btn-success btn-lg btn-block" type="submit">Make Payment</button>
</div>
</div>
<div class="row" style="display:none;">
<div class="col-xs-12">
<p class="payment-errors"></p>
</div>
</div>
</form>
</div>
</div>            
<!-- CREDIT CARD FORM ENDS HERE -->


</div>            



</div>
</div>

	<!-- If you're using Stripe for payments -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js'></script>

  

    <script  src="js/index.js"></script>
<?php
				$_SESSION['n1']=$_POST['uname'];
				$_SESSION['n2']=$_POST['mb'];
				$_SESSION['n3']=$_POST['age'];
				$_SESSION['n4']=$_POST['select'];
				$_SESSION['n5']=$_POST['sel'];
				if($_SESSION['n3']<58)
				{
					$_SESSION['n6']="NO";
				}
				else
				{
				  if(isset($_POST['citizen']))
					$_SESSION['n6']=$_POST['citizen'];
				  else
					$_SESSION['n6']="YES";
				}
				$_SESSION['n7']=$_POST['ssn'];
				$_SESSION['n8']=$_POST['date'];
				$_SESSION['n9']=$_POST['train'];
				$_SESSION['n10']=$_POST['train_name'];
				
				
				$_SESSION['m1']=$_POST['uname1'];
				if(strlen($_SESSION['m1'])!=0)
				{
					$_SESSION['m2']=$_POST['mb1'];
					$_SESSION['m3']=$_POST['age1'];
					$_SESSION['m4']=$_POST['select1'];
					$_SESSION['m5']=$_POST['sel1'];
					if($_SESSION['m3']<58)
					{
						$_SESSION['m6']="NO";
					}
					else
					{
					  if(isset($_POST['citizen1']))
					  $_SESSION['m6']=$_POST['citizen1'];
				      else
					  $_SESSION['m6']="YES";
					}
					$_SESSION['m7']=$_POST['ssn1'];
				}
				$_SESSION['x1']=$_POST['uname2'];
				if(strlen($_SESSION['x1'])!=0)
				{
					$_SESSION['x2']=$_POST['mb2'];
					$_SESSION['x3']=$_POST['age2'];
					$_SESSION['x4']=$_POST['select2'];
					$_SESSION['x5']=$_POST['sel2'];
					if($_SESSION['x3']<58)
					{
						$_SESSION['x6']="NO";
					}
					else
					{
				       if(isset($_POST['citizen2']))
					  $_SESSION['x6']=$_POST['citizen2'];
				      else
					  $_SESSION['x6']="YES";
					  
					}
					$_SESSION['x7']=$_POST['ssn2'];
				}
				
				$_SESSION['y1']=$_POST['uname3'];
				if(strlen($_SESSION['y1'])!=0)
				{
					$_SESSION['y2']=$_POST['mb3'];
					$_SESSION['y3']=$_POST['age3'];
					$_SESSION['y4']=$_POST['select3'];
					$_SESSION['y5']=$_POST['sel3'];
					if($_SESSION['y3']<58)
					{
						$_SESSION['y6']="NO";
					}
					else
					{
					  if(isset($_POST['citizen3']))
						$_SESSION['y6']=$_POST['citizen3'];
				      else
						 $y6="YES";
					}
					$_SESSION['y7']=$_POST['ssn3'];
				}
?>


</body>

</html>
