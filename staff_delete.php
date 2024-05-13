<?php
// connect to PostgreSQL database
$dbconn = pg_connect("host=127.0.0.1 dbname=ritu user=postgres password=postgres") or die("Cant connect to the database.");
// retrieve form data
$s_id=$_POST['s_id'];
//$name = $_POST['name'];               
//$designation = $_POST['Designation'];

// insert data into database
$query = ("DELETE from staff where s_id=$s_id") ;
$result=pg_query($dbconn,$query) or die("Cant fire the query");
if (!$result) {
             echo "Error: " . pg_last_error($dbconn);
     } else {
		echo "<h1><center>Deleted successfully!</center></h1>";
	echo"<center><a href=staff_view.php><h3>View Staff</h3></a></center>";
             //echo "Deleted successfully!";
     }
      // close database connection
           pg_close($dbconn);
                                                                                                                                                                            ?>                                                                                                                                                                                                                                              
