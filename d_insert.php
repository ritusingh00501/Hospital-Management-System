<?php
// connect to PostgreSQL database
 $dbconn = pg_connect("host=127.0.0.1 dbname=ritu user=postgres password=postgres")or die("Connection failed");

 // retrieve form data
 $d_id=$_POST['d_id'];
 $name = $_POST['name'];
 $address = $_POST['address'];
 $gender = $_POST['gender'];
 $specilization=$_POST['specilization'];
 $date = $_POST['date'];
 $pno=$_POST['pno'];
 // insert data into database
 $query = "INSERT INTO doctor1 (d_id, name, address, gender, specilization, pno, date) VALUES ('$d_id','$name', '$address', '$gender','$specilization','$pno','$date')";
 $result = pg_query($dbconn, $query)or die("Query failed");

 if (!$result) {
   echo "Error: " . pg_last_error($dbconn);
   } else {
	echo "<h1><center>Doctor Added successfully!</center></h1>";
	echo"<center><a href=doctor1.php><h3>View Doctor</h3></a></center>";
    // echo "Doctor Added successfully!";
     }
// close database connection
     pg_close($dbconn);
     ?>
     
