<?php
// connect to PostgreSQL database
 $dbconn = pg_connect("host=127.0.0.1 dbname=ritu user=postgres password=postgres")or die("Connection failed");

 // retrieve form data
$pid=$_POST['pid'];
$p_name=$_POST['p_name'];
$p_date=$_POST['p_date'];
$p_mode=$_POST['p_mode'];
 $p_amt = $_POST['p_amt'];

 // insert data into database
 $query = "INSERT INTO payment (pid,p_name,p_date,p_mode,p_amt) VALUES ('$pid','$p_name','$p_date','$p_mode','$p_amt')";
 $result = pg_query($dbconn, $query)or die("Query failed");

 if (!$result) {
   echo "Error: " . pg_last_error($dbconn);
   } else {
	echo "<h1><center>Payment Updated successfully!</center></h1>";
	echo"<center><a href=patient_dashboard.php><h3>GOTO Dashboard</h3></a></center>";
     //echo "payment Added successfully!";
     }
// close database connection
     pg_close($dbconn);
     ?>
     

