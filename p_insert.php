<?php
// connect to PostgreSQL database
 $dbconn = pg_connect("host=127.0.0.1 dbname=ritu user=postgres password=postgres")or die("Connection failed");

 // retrieve form data
$p_id=$_POST['p_id'];
$s_id=$_POST['staff_id'];
$d_id=$_POST['doctor_id'];
$room_id=$_POST['ward_id'];
 $name = $_POST['p_name'];
 $address = $_POST['address'];
 $gender = $_POST['gender'];
 $age=$_POST['age'];
 $pno=$_POST['pno'];
 // insert data into database
 $query = "INSERT INTO patient (p_id, staff_id, doctor_id, ward_id, p_name, address, gender, age, pno) VALUES ('$d_id','$s_id','$d_id','$room_id','$name', '$address', '$gender','$age','$pno')";
 $result = pg_query($dbconn, $query)or die("Query failed");

 if (!$result) {
   echo "Error: " . pg_last_error($dbconn);
   } else {
	echo "<h1><center>Patient Added successfully!</center></h1>";
	echo"<center><a href=patient.php><h3>View Patient</h3></a></center>";
     //echo "Patient Added successfully!";
     }
// close database connection
     pg_close($dbconn);
     ?>
     

