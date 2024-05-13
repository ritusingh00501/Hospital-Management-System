<?php
$con=pg_connect("host=127.0.0.1 dbname=ritu port=5432 user=postgres password=postgres");
$res=pg_query($con,"select * from doctor1;");
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
echo"<center><h1>Doctor Details</h1></center>";
echo"<center><a href=sub_dashboard1.php><h3>GOTO Doctor Dashboard</h3></a></center>";
echo"<tr><th><b>Doctor_Id</b></th><th><b>Name</b></th><th><b>Address</b></th><th><b>Gender</b></th><th><b>Specialization</b></th><th><b>Phone_no.</b></th><th><b>Date</b></th></tr>";
while($data=pg_fetch_row($res))
{
			echo"<tr><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[5]</td><td>$data[6]</td></tr>";
			echo"<br>";
}
?>

