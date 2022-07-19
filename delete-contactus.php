<?php
 require_once('logics/dbconnection.php');
   $sqldeletestudent = mysqli_query($conn, "DELETE FROM contactus WHERE no='".$_GET['id']."' ");
   if($sqldeletestudent)
{
    echo "user deleted succesfully";
    header('location:contactus.php');
}
else
{
    echo "Error occured. Please try again";
}
?>