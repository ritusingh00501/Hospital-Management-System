<?php
// Connect to the PostgreSQL database
$conn = pg_connect("host=127.0.0.1 dbname=ritu user=postgres password=postgres");

// Retrieve patient data for the specified quarter
$quarter_start_date = '2023-02-01';
$quarter_end_date = '2023-04-25';
$result = pg_query_params($conn, "SELECT * FROM staff WHERE date BETWEEN $1 AND $2", array($quarter_start_date, $quarter_end_date));

// Generate HTML table
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
echo "<center><h1>Quarterly Staff Report</center></h1>";
echo"<center><a href=dashboard.php><h3>GOTO  Dashboard</h3></a></center>";

//echo "<table>\n";
echo "<tr><th>Doctor ID</th><th>Name</th><th>Date</th><th>Email</th></tr>\n";
while ($row = pg_fetch_assoc($result)) {
    echo "<tr>\n";
    echo "<td>" . $row['s_id'] . "</td>\n";
    echo "<td>" . $row['name'] . "</td>\n";
    echo "<td>" . $row['date'] . "</td>\n";
    echo "<td>" . $row['email'] . "</td>\n";
    echo "</tr>\n";
}
echo "</table>\n";

// Close database connection
pg_close($conn);
?>
