<?php
$con=pg_connect("host=localhost dbname=ritu port=5432 user=postgres password=postgres");
$user_id=$_POST['user_id'];
$password=$_POST['password'];
$res=pg_query($con,"select * from admin where user_id='$user_id' and password='$password'");
$count=pg_num_rows($res);
if($row=pg_fetch_row($res))
{
	//echo"<h1>Login Successfull</h1>";
	echo"<script>alert('Successfully Login');</script>";
	//echo"<form action=dashboard.php></form>";
}
else
{
	echo"<script>alert('Login Unsuccessful');</script>";
	echo"<h1>Login Unsuccessfull</h1>";
	echo"<a href=register1.html>Register Now</a>";
}
pg_close($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script>
			function validateform()
			{
				var name=document.myform.user_id.value;
				var password=document.myform.password.value;
				if(name=null || name=="")
				{
					alert("Name can't be blank");
					return false;
				}
				else if(password.length<6)
				{
					alert("Password must be at least 6 characters long.");
					return false;
				}
			}
		</script>

    <title>Login</title>
</head>
<body>
	<!--<div class="container-fluid">
	<div class="col-md-12">
	  <nav class="navbar navbar-inverse">
	    <div class="container-fluid">
	      <div class="navbar-header">
	      <a class="navbar-brand" href="index.html">Home</a>
	      </div>
	      <div class="navbar-header">
	      <a class="navbar-brand" href="login1.html">Admin Login</a>
	      </div>
	        <div class="navbar-header">
		<a class="navbar-brand "href="login2.html">About Us</a>
	       </div>
	      <div class="navbar-header">
	       <a class="navbar-brand" href="#">Contact</a>
	       </div>
	      </ul>
	     </div>
	   </nav>
	</div>menu div close-->

	<div class="bg-img">
      <div class="container">
        <div class="box form-box">
                        <header>Admin Login</header>
            <form name=myform action=dashboard.php method="post" onsubmit="return validateform()">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="user_id" id="user_id" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" id=submitButton class="btn" name="submit" value="Login" required>
                 </div>
                <div class="links">
                    Don't have account? <a href="register1.html">Register Now</a>
                </div>
		<div class=links>
			<a href=index.html>Back</a>
			</div>

            </form>
        </div>
      </div>
      </div>
      </body>
</html>
