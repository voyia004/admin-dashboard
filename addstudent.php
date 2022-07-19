<?php
  $server="localhost";
  $username="root";
  $password="";
  $database="zalego";




$conn= mysqli_connect($server, $username,$password,$database);
if( isset($_POST['submitbutton']))
{
  //1.fetch form data
   $fullname = $_POST["fullname"];
   $phonenumber = $_POST["phonenumber"];
   $email = $_POST["email"];
   $gender = $_POST["gender"];
   $course= $_POST["course"];
  //2.submit form data
 $insertData = mysqli_query($conn, "INSERT INTO
  enroll(fullname,phonenumber,email,gender,course)                 
  VALUES ('$fullname','$phonenumber','$email','$gender','$course')");


 if($insertData)
 {
   echo "data submitted successfully";
 }

 else{
  echo "data not submitted";
 }

}

?>
