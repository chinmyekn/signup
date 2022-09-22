<?php
$connect= mysqli_connect("localhost","root","");
if(!$connect)
{
	die("Failed to connect sql server!!!". mysqli_error());
}
mysqli_select_db($connect,"hms");
?>