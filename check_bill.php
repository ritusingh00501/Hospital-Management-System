<?php
$con=pg_connect("host=127.0.0.1 dbname=ritu port=5432 user=postgres password=postgres");
$res=pg_query($con,"select * from bill;");
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
echo"<center><h1>Bill Details</h1></center>";
echo"<center><a href=patient_dashboard.php><h3>GOTO Patient Dashboard</h3></a></center>";
echo"<tr><th><b>Bill_Id</b></th><th><b>Patient ID</b></th><th><b>Doctor charge</b></th><th><b>Room charge</b></th><th><b>Total Bill</b></th><th><b>GOTO Payment</b></th></tr>";
while($data=pg_fetch_row($res))
{
			$add=$data[2]+$data[3];
			echo"<tr><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$add</td><td><a href=payment.html>Payment</a></td>";
			echo"<br>";
}
?>


