<?php
$con=pg_connect("host=localhost dbname=ritu port=5432 user=postgres password=postgres");
$user_id=$_POST['user_id'];
$password=$_POST['password'];
/*echo"<body style="background-color:powderblue;">";*/
//$res=pg_query($con,"select * from admin where user_id='$user_id' and password='$password'");
$res=pg_query($con,"insert into admin (user_id,password) values ('$user_id','$password')");
$count=pg_num_rows($res);
if (!$res) {
   echo "Error: " . pg_last_error($dbconn);
   } else {
	
     echo "<h1><center>User Added successfully!</center></h1>";
	echo"<center><a href=login1.html><h3>GOTO Login</h3></a></center>";
     }
// close database connection
    // pg_close($dbconn);
    

/*if($row=pg_fetch_row($res))
{
	echo"<center><h1>Registered Successfully</h1>";
	echo"<script>alert('Successfully register');</script>";
	echo"<a href=login1.html>GOTO Login</a></center>";
}
else
{
	echo"<script>alert('Login Unsuccessful');</script>";
	echo"<h1>Login Unsuccessfull</h1>";
	echo"<a href=register1.html>Register Now</a>";
}*/
pg_close($con);

?>

