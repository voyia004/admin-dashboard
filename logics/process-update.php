<?php
// updating user records
    if(isset($_POST['updateenroll']))
    {
        //fetch form data
            $fullname = $_POST['fullname'];
        $phonenumber = $_POST['phonenumber'];
        $email =  $_POST['email'];
        $gender = $_POST['gender'];
  
       //perform the sqli query
    
       $updateenroll = mysqli_query($conn, "UPDATE enroll SET fullname ='$fullname', phonenumber ='$phonenumber', email ='$email', gender ='$gender'
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