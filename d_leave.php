<?php
// connect to PostgreSQL database
 $dbconn = pg_connect("host=127.0.0.1 dbname=ritu user=postgres password=postgres")or die("Connection failed");

 // retrieve form data
 $d_id=$_POST['d_id'];
 //$name = $_POST['name'];
 $date = $_POST['date'];
 //$gender = $_POST['gender'];
// $specialization=$_POST['specialization'];
 $duration=$_POST['duration'];
 $reason=$_POST['reason'];
 // insert data into database
 $query = "INSERT INTO doctor_leave (d_id, date,duration,reason) VALUES ('$d_id','$date', '$duration', '$reason')";
 $result = pg_query($dbconn, $query)or die("Query failed");

 if (!$result) {
   echo "Error: " . pg_last_error($dbconn);
   } else {
	echo "<h1><center>Doctor Leave Applied successfully!</center></h1>";
	echo"<center><a href=doctor_leave.php><h3>View Doctor</h3></a></center>";
     //echo "Applied successfully!";
     }
// close database connection
     pg_close($dbconn);
     ?>
     

