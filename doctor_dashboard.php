
<div id="viewport">
  <!-- Sidebar -->
 <!--- <div id="sidebar">
    <header>
      <a href="#"><b>Doctor</b></a>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="simple_sidebar.css"> --->
 
<meta charset="UTF-8">
  <title>Dashboard Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <style>
    /* Custom styles for this dashboard page */
    body {
      padding-top: 50px;
    }
    
    .content {
      margin-left: 30px;
      padding: 20px;
    }
  </style>
 
 </header>

<!-- Navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">Doctor Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
       <!---<li class="nav-item">
          <a class="nav-link" href="#">Doctor Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="patient_login.html">Patient Login</a>
        </li>
	<li class="nav-item">
          <a class="nav-link" href="staff_login.html">Staff Login</a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

	<!--<div class="col-md-12">
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
			   <a class="navbar-brand" href="#">Contact</a>-->
                    <!--<ul class="nav navbar-nav">
                        <li class="active"><a href="#">Contact</a></li>
                        
		    </ul>-->
               <!-- </div>
            </nav>
        </div>--><!--menu div close-->


  <!---  <ul-nb class="nav">
      <li>
        <a href="#">
          <i class="zmdi zmdi-view-dashboard"></i> Dashboard
        </a>
      </li>
      <li>
       <a href="#">
          <i class="zmdi zmdi-link"></i> Doctors
        </a>
	
      </li>
       <li>
        <a href="#">
          <i class="zmdi zmdi-link"></i> Appointment
        </a> 
	</li>         
      <li>
        <a href="sub_dashboard3.php">
          <i class="zmdi zmdi-widgets"></i> Patients
        </a>
      </li>
      <li>
        <a href="sub_dashboard2.php">
          <i class="zmdi zmdi-widgets"></i> Staff
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-calendar"></i> Pathology</a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-info-outline"></i> OT </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-settings"></i> Ward
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-comment-more"></i> Bill </a>
      </li>
    </ul>
  </div>--->


  <!-- Content-->
  <!--<div id="content">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right" align="right">
          <li>
            <a href="#"><i class="zmdi zmdi-notifications "></i>
            </a>
          </li>
          <li><a href="#">Test User</a></li>
        </ul>
      </div>
    </nav>-->
    
	<div class="content">
	<h1>Welcome to dashboard!</h1>
    <p>Here you can view all of your important data and manage your account settings.</p>
    <div class="row">
     <!--- <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Doctor</h5>
            <p class="card-text">View and manage all of your Doctor Details.</p>
            <a href="doctor_screen.html" class="btn btn-primary">View All</a>
	    <a href="#" class="btn btn-primary">View By Name</a>
          </div>
        </div>
      </div>--->
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Patients</h5>
            <p class="card-text">View and manage all of your Patient.</p>
            <a href="patient02.php" class="btn btn-primary">View All</a>
	    <a href="ajax11.html" class="btn btn-primary">View By Name</a>
          </div>
        </div>
  </div>
<div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Staff</h5>
            <p class="card-text">View and manage all of your Staff.</p>
            <a href="staff_view1.php" class="btn btn-primary">View All</a>
	    <a href="staff_ajax.html" class="btn btn-primary">View By Name</a>
          </div>
        </div>
  </div>
<div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Appointment</h5>
            <p class="card-text">View and manage all of your Appointments.</p>
            <a href="check_app.php" class="btn btn-primary">Check Appoinment</a>
          </div>
        </div>
  </div>
<div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Payment</h5>
            <p class="card-text">View and manage all of your Payment.</p>
	    <!---<a href="payment.html" class="btn btn-primary">Insert</a>--->
            <a href="payment1.php" class="btn btn-primary">View</a>
          </div>
        </div>
  </div>
<div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Apply for Leave</h5>
            <p class="card-text">View and manage all of your Application.</p>
            <a href="doctor_leave.html" class="btn btn-primary">Apply Leave application</a>
	          </div>
        </div>
  </div>

</div>

