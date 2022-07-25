<?php
// updating user records
    if(isset($_POST['update']))
    {
        //fetch form data
        $email =  $_POST['email'];
       
  
       //perform the sqli query
    
       $updateenroll = mysqli_query($conn, "UPDATE subscribers SET  email ='$email',
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