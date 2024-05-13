<?php
// connect to PostgreSQL database
 $dbconn = pg_connect("host=127.0.0.1 dbname=ritu user=postgres password=postgres")or die("Connection failed");

 // retrieve form data
 $user_id=$_POST['user_id'];
 $password = $_POST['password'];
 //$address = $_POST['address'];
 //$gender = $_POST['gender'];
 //$specialization=$_POST['specialization'];
 //$pno=$_POST['pno'];
 // insert data into database
 //$query = "INSERT INTO login (user_id,password) VALUES ('$user_id','$password')";
 $query=("select * from admin where user_id='$user_id' and password='$password'");
 $result = pg_query($dbconn, $query)or die("Query failed");
 /*$count = pg_num_rows($result);
    $row = pg_fetch_array($result);

    if($count == 1){
        $_SESSION['user_session'] = $row['userName'];
        echo TRUE;
    }
    else {
        echo FALSE;
    }
    exit;*/

 if (!$result) {
   echo "Invalid Username or password" . pg_last_error($dbconn);
   } else {
     echo "Login successfully!";
   }
// close database connection
     pg_close($dbconn);
     ?>
     

