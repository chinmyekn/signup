<?php require 'db.php'; ?>
<html>
<head>
<meta charset="utf-8">
<title>Sign-up PAGE</title>
<link rel="stylesheet" type="text/css" href="css/signup.css" media="screen">
</head>
<body style="background-image:url('docimg/blur.jpg')";> 
<a style="color:yellow" href="login.php">back to Login Page</a>
<center style="color:white; font-style:italic; letter-spacing:0.1em; font-size:40px;"><b><u>Welcome !!!!</u></b></center>
<fieldset>
<legend style="color:Black"><h2>DETAILS</h2></legend>
<form method="post">
<h3><center><label for="First Name:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Name:&nbsp;</label>
<input id="FirstName" type="text" name="uname" placeholder="Enter the User Name" required></center>
<h3><center><label for="E-Mail:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Mail ID:&nbsp;</label>
<input id="email" type="text" name="mail" placeholder="demo@gmail.com" required></center>
<br>
<center><label for="dob:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DOB:&nbsp;</label>
<input id="dob" type="date" name="getdob" placeholder="Date of Birth"></center>
<br>
<center><label>Gender:</label>
<select id="select" name="gender">
<optgroup label="choose">
<option>Select</option>
<option>MALE</option>
<option>FEMALE</option>
<option>OTHER</option></center>
</optgroup>
</select>
<br>
<br>
<center><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:</label>
<input id="ph" type="password" name="password" placeholder="Enter your Password"></center>
<br>
<center><label>Confirm Password:</label></center>
<center><input id="pass" type="password" name="password1" placeholder="Retype Password"</center>
<br><br>
<center><input id="terms" type="checkbox" name="checkbox" required>
<label>I agree to the terms and conditions</label></center>
<br></h3></h3>
<center><input type="submit" value="Register" id="submit" name="register">
<input type ="reset" value="Clear" id="res"></center>
</form>
</fieldset>

<?php 
if(isset($_POST['register']))
{
$username=$_POST['uname'];
$email=$_POST['mail'];
$password=$_POST['password'];
$confirm_password=$_POST['password1'];
$date=$_POST['getdob'];
$gender=$_POST['gender'];
 if($password==$confirm_password)
{
 $s="SELECT * FROM signuppg WHERE(email='$email')";
 $result=mysqli_query($connect,$s);
 if(mysqli_num_rows($result)>0)
 {
      while ($row=mysqli_fetch_assoc($result))
	  {
		if($email==$row['email']) 
		{
			echo "<script>alert(' email exists');</script>";
		}
 
	  }
 }
     else
	 {
     $sql="INSERT INTO signuppg(username,email,dob,gender,password,conformpass) VALUES ('$username' ,'$email','$date','$gender','$password','$confirm_password')";
		if(mysqli_query($connect,$sql))
		{
		echo "<script>alert('New record created');</script>";
		echo"<script>window.open('login.php','_self')</script>";
		}
		else
		{
		echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
	 }
}
else 
{
echo "<script>alert('password does not match');</script>";
}
}
?>
</body>
</html>
