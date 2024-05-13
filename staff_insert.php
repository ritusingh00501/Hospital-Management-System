<?php
// connect to PostgreSQL database
 $dbconn = pg_connect("host=127.0.0.1 dbname=ritu user=postgres password=postgres");

 // retrieve form data
 $s_id=$_POST['s_id'];
 $name = $_POST['name'];
 $designation = $_POST['designation'];
 $address=$_POST['address'];
 $email=$_POST['email'];
 $pno=$_POST['pno'];
 $duty_hr=$_POST['duty_hr'];
 $date=$_POST['date'];
  // insert data into database
 $query = "INSERT INTO staff (s_id, name, designation, address, email, pno, duty_hr,date) VALUES ('$s_id','$name', '$designation','$address','$email','$pno','$duty_hr','$date')";
 $result = pg_query($dbconn, $query);

 if (!$result) {
   echo "Error: " . pg_last_error($dbconn);
   } else {
	echo "<h1><center>Staff Added successfully!</center></h1>";
	echo"<center><a href=staff_view.php><h3>View Staff</h3></a></center>";
    // echo "Staff added successfully!";
     }
// close database connection
     pg_close($dbconn);
     ?>
     
