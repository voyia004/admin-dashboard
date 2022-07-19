<?php
//1.data base connection
$msg="";
require_once('logics/dbconnection.php');
$sqlfetchenrolledstudent = mysqli_query($conn, "SELECT * FROM contactus WHERE no='".$_GET['id']."'  "  );
   
    while($fetchstudent =mysqli_fetch_array($sqlfetchenrolledstudent))
    {
       $firstname = $fetchstudent['firstname'];
       $lastname = $fetchstudent['lastname'];
       $email = $fetchstudent['email'];
       $phonenumber = $fetchstudent['phonenumber'];
       $message = $fetchstudent['message'];
    }
    require_once('logics/update.php') ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.2.0/bootstrap-5.2.0-/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  
</head>
<body>
        <?php require_once('includes/header.php') ?>

            <!-- All our code. write here   -->
            <?php require_once('includes/navbar.php') ?>

        <?php require_once('includes/sidebar.php') ?>
        <div class="main-content pt-5">
                <div class="container-fluid">
                   <div class="row">
                        <div class="col-lg-12">
                          <div class="card">
                              <div class="card-header bg-dark text-center text-white">
                                 <h4> Edit student <?php echo $firstname ?></h4>
                                    <?php echo $msg ?>
                               </div>
                               <br><br>
                                    <form action="contactus.php?id=<?php echo $id?>" method="POST">
                                        <div class="row">
                                                <div class="mb-3 col-lg-6">
                                                        <label for="firstname" class="form-label">Firstname:</label>
                                                        <input type="text" name="firstname" class="form-control" placeholder="Enter your firstname" value="<?php echo $firstname ?>">
                                                    </div>
                                                
                                                    <div class="mb-3 col-lg-6">
                                                        <label for="lastname" class="form-label">lastname</label>
                                                        <input type="tel" name="lastname" class="form-control" placeholder="lastname"value="<?php echo $lastname ?>" >
                                                    </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-lg-6">
                                                <label for="email" class="form-label">email</label>
                                                <input type="text" name="email" class="form-control" placeholder="Enter your email"value="<?php echo $email?>" >
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label for="message" class="form-label">message</label>
                                                <input type="text" name="message" class="form-control" placeholder="Enter your message"value="<?php echo $message?>" >
                                            </div>
                                            
                                        </div>
                                        <br><br>
                                            
                            
                                        <div class="row" style="text-align:center:">
                                                <div class="mb-3 col-lg-6">
                                                    <br>      
                                                    <button type="submit" name="updatecontactus" class="btn btn-primary">update records</button>
                                                </div>
                                        </div>
                                    </form>                                                                    
                            </div>
                        </div>
                   </div>
                </div>
            </div>    
           
                        <br><br>




        <?php  require_once('includes/script.php') ?>
            <script src="jquery.min.js"></script>
            <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>