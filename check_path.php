<?php
$con=pg_connect("host=127.0.0.1 dbname=ritu port=5432 user=postgres password=postgres");
$res=pg_query($con,"select * from book_path;");
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

echo"<table id=doctor>";
echo"<center><h1>Check Appointment</h1></center>";
echo"<center><a href=dashboard.php><h3>GOTO Dashboard</h3></a></center>";
echo"<tr><th><b>Appointment ID</b></th><th><b>Patient name</b></th><th><b>Email</b></th><th><b>Phone_no.</b></th><th><b>Address</b></th><th><b>Age</b></th><th><b>Blood Group</b></th><th><b>Gender</b></th><th><b>Appointment date</b></th><th><b>Test Type</b></th></tr>";
while($data=pg_fetch_row($res))
{
			echo"<tr><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[5]</td><td>$data[6]</td><td>$data[7]</td><td>$data[8]</td><td>$data[9]</td></tr>";
			echo"<br>";
}
?>



