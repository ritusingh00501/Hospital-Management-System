<?php
// Connect to the PostgreSQL database
$conn = pg_connect("host=127.0.0.1 dbname=ritu user=postgres password=postgres");

// Query to retrieve patient information
$query = "SELECT s_id, name, email, date FROM staff";

// Execute the query and retrieve the results
$result = pg_query($conn, $query);
$patients = pg_fetch_all($result);

// Group the patient information by month
$patients_by_month = array_filter($patients, function($staff) {
  return date('Y-m', strtotime($staff['date'])) === date('Y-m');
});

// Output the report
// echo"<html>";
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

echo"<table id=doctor>";
echo"<h1><b><center>Monthly Staff Report<center></b></h1>";
echo"<center><a href=dashboard.php><h3>GOTO  Dashboard</h3></a></center>";
echo"<tr><th><b>Staff_Id</b></th><th><b>Name</b></th><th><b>Email</b></th><th><b>Date of Registeration</b></th></tr>";


//echo "<h1>Monthly Patient Report</h1>";
foreach ($patients_by_month as $staff) {
  echo "<tr>";
  echo "<td>" . $staff['s_id'] . "</td>";
  echo "<td>" . $staff['name'] . "</td>";
  echo "<td>" . $staff['email'] . "</td>";
  echo "<td>" . $staff['date'] . "</td>";
  echo "</tr>";
}
?>

