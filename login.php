<?php require 'db.php'; ?>
<html>
<head>
<meta charset="utf-8">
<title>Login-pg</title>
</head>
<body>
<header> Login </header>
<hr><hr><br><br>
<link rel="stylesheet" type="text/css"
href="css/loginpg.css" media="screen"/>
<form method="post" action="">
<center><label><H1 style="color:brown"><b>E-Mail ID</b></H1></label>
<input type="text" name="email" id="user"  required></center>
<br>
<center><label><h1 style="color:brown"><b>PASSWORD</b></h1></label>
<input type="password" name="password" id="passw"  required></center>
<br><br>
<center><input type="submit" value=" Login " name="login" id="login"> </center>
<br>
</form>
<br>
<h3><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dont have an account..?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Click here to <a href="signuppg.php"><b> signup </b></a></i></h3>
</body>
</html>

<?php
session_start();
if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$sel_hos="select * from signuppg where email='$email' AND password='$pass'";
	$run_hos=mysqli_query($connect,$sel_hos);
	$flag_hos=mysqli_num_rows($run_hos);
	if($flag_hos==0)
	{
		echo"<script>alert('wrong Email and Password')</script>";
	}
	else
	{
		$_SESSION['email']=$email;
		echo"<script>alert('logged in successfully!!!')</script>";
		echo"<script>window.open('index.php','_self')</script>";
	}		
}
?>