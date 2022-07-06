<?php
   require_once('logics/dbconnection.php');


    $querystudent = mysqli_query($conn, "SELECT * FROM enroll WHERE no='".$_GET['id']."'  ");
    while($fetchstudent =mysqli_fetch_array($querystudent))
    {
       $fullname = $fetchstudent['fullname'];

    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                                <h4> Edit student <?php echo $fullname ?></h4>
                            </div>
                          </div>
                        </div>
                    </div>
               </div>
            </div>







        <?php  require_once('includes/script.php') ?>
            <script src="jquery.min.js"></script>
            <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>