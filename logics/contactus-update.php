<?php
// updating user records
    if(isset($_POST['updatecontactus']))
    {
        //fetch form data
            $firstname = $_POST['firstname'];
        $phonenumber = $_POST['phonenumber'];
        $email =  $_POST['email'];
        $lastname = $_POST['lastname'];
  
       //perform the sqli query
    
       $updateenroll = mysqli_query($conn, "UPDATE contactus SET firstname ='$firstname', phonenumber ='$phonenumber', email ='$email', lastname ='$lastname
       WHERE no='".$_GET['id']."'");

       if($updateenroll)
       {
        $message = "updated succesfully";
       }
       else
     {
        $message = "not updated succesfully";
     }
    }
    ?>