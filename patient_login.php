<?php
$con=pg_connect("host=localhost dbname=ritu port=5432 user=postgres password=postgres");
$user_id=$_POST['user_id'];
$password=$_POST['password'];
$res=pg_query($con,"select * from patient_login where user_id='$user_id' and password='$password'");
$count=pg_num_rows($res);
if($row=pg_fetch_row($res))
{
	echo"<center><h1>Login Successfull</h1>";
	echo"<script>alert('Successfully Login');</script>";
	echo"<a href=patient_dashboard.php>GOTO Dashboard</a></center>";
}
else
{
	echo"<script>alert('Login Unsuccessful');</script>";
	echo"<center><h1>Login Unsuccessfull</h1>";
	echo"<a href=patient_register.html>Register Now</a></center>";
}
pg_close($con);

?>
