<?php require 'db.php';?>
<html>
<head>
 <title>Add Profile</title>
 <link rel="stylesheet"href="css/app.css" type="text/css">
 </head>
 <body>
<form method="post" enctype="multipart/form-data">
<h3 style="font-size:52px;text-align:center;color:orange;"><u>Add Profile</u></h3>
<h2><center><label for="Name:"> Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="FirstName" type="text" name="docname" placeholder="Enter the User Name" required></center></h2>
<h2><center><label for="E-Mail:">E-Mail ID:</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="email" type="text" name="docemail" placeholder="demo@gmail.com" ></center></h2>
<h2><center><label for="mobile:">Mobile Number:</label>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="designation" placeholder="Enter Phone Number"><center></h2>
<h2><center><label for="info:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address:</label>
&nbsp;<input type="text" name="info" placeholder="Enter Address"></center></h2>
<h2><center><label for="city:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City:</label>
&nbsp;<input type="text" name="city" placeholder="Enter city"></center></h2>
<h2><center><label for="state:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State:</label>
&nbsp;<input type="text" name="state" placeholder="Enter State"></center></h2>
<h2><center><label for="pin:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pincode:</label>
&nbsp;<input type="number" name="pin" placeholder="Enter Pincode"></center></h2>
<h2><center><label for="country:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Country:</label>
&nbsp;<input type="text" name="country" placeholder="Enter Country"></center></h2>
<h2><center><label for="company:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Company Name:</label>
&nbsp;<input type="text" name="company" placeholder="Enter Company Name"></center></h2>
<br>
<center><input class="submit" type="submit" value="SUBMIT" id="submit" name="register"></center>
</form>
<h3><a href="login.php" style="font-size:24px;"><b><< Go back to Login page</b></a></h3>
</body>
</html>
<?php 
if(isset($_POST['register']))
{
$docname=$_POST['docname'];
$docemail=$_POST['docemail'];
$designation=$_POST['designation'];
$info=$_POST['info'];
$city=$_POST['city'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$country=$_POST['country'];
$company=$_POST['company'];
     $sql1="INSERT INTO doctor(doctorname,designation,info,city,state,pin,country,company) VALUES ('$docname' ,'$designation','$info','$city','$state','$pin','$country','$company')";
	 $sql2="INSERT INTO doclogin(docemail) VALUES ('$docemail')";
		if(mysqli_query($connect,$sql1))
		{
			if(mysqli_query($connect,$sql2))
			{
		echo "<script>alert('Successfully Inserted new doctor!!');</script>";
		echo"<script>window.open('login.php','_self')</script>";
			}
		}
		else
			{
		echo "Error: " . $sql . "<br>" . mysqli_error($connect);
			}
	
}
?>