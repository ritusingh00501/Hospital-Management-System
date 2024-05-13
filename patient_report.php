<?php
// Connect to the PostgreSQL database
$conn = pg_connect("host=127.0.0.1 dbname=ritu user=postgres password=postgres");
$date=$_GET['q'];
echo $date;
// Query to retrieve patient information
$query = "SELECT p_id, name, date FROM patient where date='$date'";

// Execute the query and retrieve the results
$result = pg_query($conn, $query);
$patients = pg_fetch_all($result);

// Group the patient information by month
$patients_by_month = array_filter($patients, function($patient) {
  return date('Y-m', strtotime($patient['date'])) === date('Y-m');
});

// Output the report
//echo"<html>";
echo"<head>";
echo"<style>
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

echo"<table id=doctor>";
echo"<h1><b>Date wise patient report</b></h1>";
echo"<tr><th><b>Patient_Id</b></th><th><b>Name</b></th><th><b>Date of Registeration</b></th></tr>";

//echo "<h1>Monthly Patient Report</h1>";
foreach ($patients_by_month as $patient) {
  echo"<tr>";
  echo "<td>". $patient['p_id'] . "</td>";
  echo "<td>". $patient['name'] . "</td>";
  echo "<td>". $patient['date'] . "</td>";
  echo "</tr>";
}
echo"</table>";
?>

