<?php
  $server='localhost';
  $username='root';
  $password="";
  $database="zalego";




  $conn = mysqli_connect($server,$username,$password,$database);
  if(!$conn){die('no connection'.mysqli_connect_error());}
  ?>