<?php
// connect to PostgreSQL database
 $dbconn = pg_connect("host=127.0.0.1 dbname=ritu user=postgres password=postgres")or die("Connection failed");

 // retrieve form data
$tt=$_POST['tt'];
$date=$_POST['date'];
$blood_grp=$_POST['blood_grp'];
$email=$_POST['email'];
 $name = $_POST['p_name'];
 $address = $_POST['address'];
 $gender = $_POST['gender'];
 $age=$_POST['age'];
 $pno=$_POST['pno'];
 $a_id=$_POST['a_id'];
 // insert data into database
 $query = "INSERT INTO book_path (a_id, p_name,email,pno, address, age, blood_grp, date,gender, tt) VALUES ('$a_id','$name','$email','$pno', '$address','$age','$blood_grp','$date','$gender','$tt')";
 $result = pg_query($dbconn, $query)or die("Query failed");

 if (!$result) {
   echo "Error: " . pg_last_error($dbconn);
   } else {
	echo "<h1><center>Appointment Booked successfully!</center></h1>";
	echo"<center><a href=patient_dashboard.php><h3>GOTO Dashboard</h3></a></center>";
    // echo " Appointment Booked!";
     }
// close database connection
     pg_close($dbconn);
     ?>
     


