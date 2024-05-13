<?php
// connect to PostgreSQL database
$dbconn = pg_connect("host=127.0.0.1 dbname=ritu user=postgres password=postgres") or die("Cant connect to the database.");
// retrieve form data
$p_id=$_POST['p_id'];
//$name = $_POST['name'];               
//$address = $_POST['address'];
//$gender = $_POST['gender'];
//$specialization=$_POST['specilization'];
//$pno=$_POST['pno'];
// insert data into database
$query = ("DELETE from patient where p_id=$p_id") ;
$result=pg_query($dbconn,$query) or die("Cant fire the query");
if (!$result) {
             echo "Error: " . pg_last_error($dbconn);
     } else {
		echo "<h1><center>Deleted successfully!</center></h1>";
	echo"<center><a href=patient.php><h3>View Patient</h3></a></center>";
             //echo "Deleted successfully!";
     }
      // close database connection
           pg_close($dbconn);
                                                                                                                                                                            ?>                                                                                                                                                                                                                                              

