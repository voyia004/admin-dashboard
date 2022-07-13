<?php
 require_once('logics/dbconnection.php');
   $sqldeletestudent = mysqli_query($conn, "DELETE FROM enroll WHERE no='".$_GET['id']."' ");
   if($sqldeletestudent)
{
    echo "user deleted succesfully";
}
else
{
    echo "Error occured. Please try again";
}
?>