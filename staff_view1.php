<?php
$con=pg_connect("host=127.0.0.1 dbname=ritu port=5432 user=postgres password=postgres");
$res=pg_query($con,"select * from staff");
echo"<html>";
echo"<head>";
echo"<style>

body{
background-color:#F5F6CE;
}

#Staff {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#Staff td, #Staff th {
  border: 1px solid #ddd;
  padding: 8px;
}


#Staff tr:hover {background-color: #ddd;}
#Staff tr:nth-child(even){background-color: #f2f2f2;}
#Staff th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3587B3;
  color: white;
}
</style>";
echo"</head>";
//echo"<center><a href=sub_dashboard2.php><h3>GOTO Staff Dashboard</h3></a></center>";
echo"<table id=Staff>";
echo"<center><h1>Staff Details</h1></center>";
echo"<center><a href=doctor_dashboard.php><h3>GOTO Dashboard</h3></a></center>";
echo"<tr><th><b>Staff_Id</b></th><th><b>Name</b></th><th><b>Designation</b></th><th><b>Address</b></th><th><b>Email</b></th><th><b>Duty Hours</b></th><th><b>Phone Number</b></th><th><b>Date</b></th></tr>";
while($data=pg_fetch_row($res))
{
			echo"<tr><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[5]</td><td>$data[6]</td><td>$data[7]</td></tr>";
			echo"<br>";
}
?>

