<?php
// updating user records

 require_once('logics/dbconnection.php');
    if(isset($_POST['update']))
    {
        //fetch form data
        $firstname = $_POST['firstname'];
        $phonenumber = $_POST['phonenumber'];
        $email =  $_POST['email'];
        $lastname =  $_POST['lastname'];
  
       //perform the sqli query
    
       $updateenroll = mysqli_query($conn, "UPDATE contactus SET firstname ='$firstname', phonenumber ='$phonenumber', email ='$email',  lastname ='$lastname'
       WHERE no='".$_GET['id']."'");

       if($updateenroll)
       {
        $msg = "updated succesfully";
       }
       else
     {
        $msg = "not updated succesfully";
     }
    }
    ?>