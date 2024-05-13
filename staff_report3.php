<?php

// Connect to PostgreSQL database
$conn = pg_connect("host=127.0.0.1 dbname=ritu user=postgres password=postgres");

// Get the year to retrieve data for (e.g. 2021)
$year = 2023;

// Query the database for patient data for the specified year
$query = "SELECT s_id, name, email, date  FROM staff WHERE EXTRACT(YEAR FROM date) = $year";
$result = pg_query($conn, $query);
echo"<head>";
echo"<style>
body{
background-color:#F5F6CE;
}

#doctor {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#doctor td, #doctor th {
  border: 1px solid #ddd;
  padding: 8px;
}


#doctor tr:hover {background-color: #ddd;}
#doctor tr:nth-child(even){background-color: #f2f2f2;}
#doctor th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3587B3;
  color: white;
}
</style>";
echo"</head>";

//echo"<table id=doctor>";
echo"<h1><b><center>Year wise Staff report<center></b></h1>";
echo"<center><a href=dashboard.php><h3>GOTO  Dashboard</h3></a></center>";
//echo"<tr><th><b>Staff_Id</b></th><th><b>Name</b></th><th><b>Specialization</b></th><th><b>Date of Registeration</b></th></tr>";
$table = "<table id=doctor><thead><tr><th><b>Staff ID</b></th><th><b>Name</b></th><th><b>Email</th><th><b>Date</b></th></tr></thead><tbody>";
while ($row = pg_fetch_assoc($result)) {
    $table .= "<tr><td>{$row['s_id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['date']}</td></tr>";
}
$table .= "</tbody></table>";

// Output the table
echo $table;


//echo "<h1>Monthly Patient Report</h1>";

// Loop through the results and format them into a table
//$table = "<table><thead><tr><th>Name</th><th>Appointment Date</th><th>Diagnosis</th></tr></thead><tbody>";
/*while ($data= pg_fetch_row($result)) {
	echo"<tr><td>$row[0]</td><td>$data[1]</td><td>$row[2]</td><td>$data[3]</td></tr>";
	echo"<br>";
}
echo"<table>";*/
//$table .= "</tbody></table>";

// Output the table
//echo $table;*/

// Close the database connection
pg_close($conn);

?>

