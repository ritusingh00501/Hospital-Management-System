<?php
// connect to PostgreSQL database
 $dbconn = pg_connect("host=127.0.0.1 dbname=ritu user=postgres password=postgres")or die("Connection failed");

 // retrieve form data
$p_id=$_POST['p_id'];
$email=$_POST['email'];
//$d_id=$_POST['doctor_id'];
$date=$_POST['date'];
 $name = $_POST['name'];
 $address = $_POST['address'];
 $gender = $_POST['gender'];
 $age=$_POST['age'];
 $pno=$_POST['pno'];
 // insert data into database
 $query = "INSERT INTO patient (p_id, email, name, address, gender, age, pno ,date) VALUES ('$p_id','$email','$name', '$address', '$gender','$age','$pno','$date')";
 $result = pg_query($dbconn, $query)or die("Query failed");

 if (!$result) {
   echo "Error: " . pg_last_error($dbconn);
   } else {
	echo "<h1><center>Patient Added successfully!</center></h1>";
	echo"<center><a href=patient_dashboard.php><h3>GOTO Dahboard</h3></a></center>";
     //echo "Patient Added successfully!";
     }
// close database connection
     pg_close($dbconn);
     ?>
     


