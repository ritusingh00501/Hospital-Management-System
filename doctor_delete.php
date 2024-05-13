<?php
// connect to PostgreSQL database
$dbconn = pg_connect("host=127.0.0.1 dbname=ritu user=postgres password=postgres") or die("Cant connect to the database.");
// retrieve form data
$d_id=$_POST['d_id'];
//$name = $_POST['name'];               
//$address = $_POST['address'];
//$gender = $_POST['gender'];
//$specialization=$_POST['specilization'];
//$pno=$_POST['pno'];
// insert data into database
$query = ("DELETE from doctor1 where d_id=$d_id") ;
$result=pg_query($dbconn,$query) or die("Cant fire the query");
if (!$result) {
		
            echo "Error: " . pg_last_error($dbconn);
     }
else if(!$d_id)
{
	echo"Data not found!!";
}
 else {
	echo "<h1><center>Deleted successfully!</center></h1>";
	echo"<center><a href=doctor1.php><h3>View Doctor</h3></a></center>";
            // echo "Deleted successfully!";
     }
      // close database connection
           pg_close($dbconn);
                                                                                                                                                                            ?>                                                                                                                                                                                                                                              
