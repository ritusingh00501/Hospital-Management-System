<?php
//echo"<style>body{background-image: url("dashboard1.jpg");}</style>";
// connect to PostgreSQL database
 $dbconn = pg_connect("host=127.0.0.1 dbname=ritu user=postgres password=postgres")or die("Connection failed");

 // retrieve form data
$b_id=$_POST['bill_id'];
$p_id=$_POST['p_id'];
$name=$_POST['name'];
//$room_id=$_POST['ward_id'];
 $doctor_charge = $_POST['doctor_charge'];
 $room_charge= $_POST['room_charge'];
 //$gender = $_POST['gender'];
// $age=$_POST['age'];
 //$pno=$_POST['pno'];
 // insert data into database
 $query = "INSERT INTO bill (bill_id,p_id,name, doctor_charge, room_charge) VALUES ('$b_id','$p_id','$name','$doctor_charge', '$room_charge')";
 $result = pg_query($dbconn, $query)or die("Query failed");

 if (!$result) {
   echo "Error: " . pg_last_error($dbconn);
   } else {
	echo "<h1><center>Bill Added successfully!</center></h1>";
	echo"<center><a href=check_bill2.php><h3>View Bill</h3></a></center>";
    // echo "Bill Added successfully!";
     }
// close database connection
     pg_close($dbconn);
     ?>
     



