<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="style1.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
	<!--<div class="col-md-12">
	 <nav class="navbar navbar-inverse"
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
		   <a class="navbar-brand" href="#">Contact</a>-->
	     <!--<ul class="nav navbar-nav">
	       <li class="active"><a href="#">Contact</a></li>
	     </ul>-->
	   <!--</div>
	  </nav>
	   </div>--><!--menu div close-->
	
  <div class="container">
    <div class="title">Enter Patient detail</div>
    <div class="content">
      <form action="p_insert.php" method=post>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Patient Id</span>
            <input type="text" name=p_id placeholder="Enter Doctor Id" required>
          </div>
	  <div class="input-box">
            <span class="details">Enter Staff id</span>
            <input type="text" name=staff_id placeholder="Enter staff id" required>
          </div>
          <div class="input-box">
            <span class="details">Enter Doctor Id</span>
            <input type="text" name=doctor_id placeholder="Enter Doctor id" required>
          </div>
          <div class="input-box">
            <span class="details">Enter Ward Id</span>
            <input type="text" name=ward_id placeholder="Enter Ward id" required>
          </div>
          <div class="input-box">
            <span class="details">Enter Full Name</span>
            <input type="text" name=p_name placeholder="Enter name" required>
          </div>
          <div class="input-box">
		  <span class="details">Address</span>
            <input type="text" name=address placeholder="Enter your Address" required>
          </div>
	  <div class="input-box">
            <span class="details">Age of Patient</span>
            <input type="text" name=age placeholder="Age" required>
          </div>
	  <div class="input-box">
            <span class="details">Enter Phone no.</span>
            <input type="text" name=pno placeholder="Number" required>
          </div>
	 <!-- <div>
		  Male<input type=radio name=gender ><br>
		  Female<input type=radio name=gender>
	 </div>
          <div class="input-box">
            <span class="details"></span>
            <input type="text" placeholder="Confirm your password" required>
	  </div>-->
	</div>
        <!--<div class="gender-details">
		<span class="gender-title">Gender</span><br><br>
		<label>
		Male<input type="radio" name="gender"><br>
		</label>
		<label>
	        Female<input type="radio" name="gender">
		</label>
		-->
		<div class="gender-details">
		<input type="radio" name="gender" value=Male id="dot-1">
         	 <input type="radio" name="gender" value=Female id="dot-2">
          
          <span class="gender-title">Gender</span>
          <div class="category">
	 <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
       
