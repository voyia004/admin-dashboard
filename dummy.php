<?php
  $server='localhost';
  $username='root';
  $password="";
  $database="zalego";




  $conn = mysqli_connect($server,$username,$password,$database);
  $sqli = mysqli_query($conn, "SELECT * FROM enroll");

  $fetchrecords = mysqli_fetch_array($sqli);
  $countrecords = mysqli_num_rows($sqli);

while ($fetchrecords =mysqli_fetch_array($sqli)){
    #code....
    echo $fetchrecords['fullname'].' <br> '. $fetchrecords['email'].' <br> '. $fetchrecords['phonenumber'].' <br> '. $fetchrecords['gender'].' <br> '. $fetchrecords['course'];
}


?>