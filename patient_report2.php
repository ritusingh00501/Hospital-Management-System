
<?php
// Connect to the PostgreSQL database
$conn = pg_connect("host=127.0.0.1 dbname=ritu user=postgres password=postgres");

// Query to retrieve patient information
//$date=$_GET['q'];
$query = "SELECT p_id, name, date FROM patient";
echo"<html>";
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
// Execute the query and retrieve the results
$result = pg_query($conn, $query);
$patients = pg_fetch_all($result);

// Group the patient information by month
$patients_by_month = array_filter($patients, function($patient) {
  return date('Y-m', strtotime($patient['date'])) === date('Y-m');
});

// Output the report
echo"<table border=1>";
echo"<table id=doctor>";
echo "<center><h1>Currently Registered Patient Report</center></h1>";
echo"<center><a href=dashboard.php><h3>GOTO Patient Dashboard</h3></a></center>";
echo '<tr><th>Patient ID</th><th>Name</th><th>Admission Date</th></tr>';
while ($row = pg_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['p_id'] . '</td>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['date'] . '</td>';
    //echo '<td>' . $row['discharge_date'] . '</td>';
    echo '</tr>';
}	
/*foreach ($patients_by_month as $patient) {
  echo "<p>Patient ID: " . $patient['p_id'] . "</p>";
  echo "<p>Name: " . $patient['name'] . "</p>";
  echo "<p>Date of Registration: " . $patient['date'] . "</p>";
  echo "<hr>";
}*/
echo"</table>";
?>
