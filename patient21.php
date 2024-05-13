<?php
$con=pg_connect("host=127.0.0.1 dbname=ritu port=5432 user=postgres password=postgres");
$name=$_GET['q'];
//echo "Hello<b>".$name;
$res=pg_query($con,"select * from patient where name='$name'");
echo"<html>";
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
echo"<body>";
/*echo"<center>";
echo"<b>";
echo"Patient Details";
echo"</b>";
echo"</center>";*/
echo"<table id=doctor>";

echo"<tr><th><b>Patient_Id</b></th><th><b>Email</b></th><th><b>Patient Name</b></th><th><b>Address</b></th><th><b>Gender</b></th><th><b>Age</b></th><th><b>Phone_no.</b></th></tr>";
$count=pg_num_rows($res);
if($count>0)
{	
	while($data=pg_fetch_row($res))
	{
			echo"<tr><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[5]</td><td>$data[6]</td></tr>";
			echo"<br>";
	}
}

echo"</body></table>";
?>



