<?php
//1.data base connection
require_once('logics/dbconnection.php');
$sqlfetchenrolledstudent = mysqli_query($conn, "SELECT * FROM subscribers WHERE no='".$_GET['id']."'  "  );
   
    while($fetchstudent =mysqli_fetch_array($sqlfetchenrolledstudent))
    {
       
       $email = $fetchstudent['email'];
      
    }

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
                <div class="container-fluid" >
                   <div class="row">
                    <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header bg-dark text-white text-center">
                                    <h4 class="class-title">personal information</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                   
                                    <li class="list-group-item">email: <span class="float-right badge badge-warning"><?php echo $email ?></span></li> 
                                    
                                    </ul>
                                </div>
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