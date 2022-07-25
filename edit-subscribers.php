<?php
  $message = "";
   require_once('logics/dbconnection.php');


    $querystudent = mysqli_query($conn, "SELECT * FROM subscribers WHERE no='".$_GET['id']."'  ");
    while($fetchstudent =mysqli_fetch_array($querystudent))
    {
      
       $email = $fetchstudent['email'];
      
       $id = $fetchstudent['no'];  
    }
    
    require_once('logics/subscribers-update.php') 
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
                                <h4> Edit student <?php echo $email ?></h4>
                              <?php echo $message ?>
                            </div>
                               <br><br>
                                    <form action="edit-subscribers.php?id=<?php echo $id?>" method="POST">
                    
                                        
                                                <div class="row">
                                                    <div class="mb-3 col-lg-6">
                                                        <label for="email" class="form-label">email</label>
                                                        <input type="text" name="email" class="form-control" placeholder="Enter your email"value="<?php echo $email?>" >
                                                    </div>
                                                  
                                                   
                                    
                                                <div class="row" style="text-align:center:">
                                                        <div class="mb-3 col-lg-6">
                                                            <br>      
                                                            <button type="submit" name="update" class="btn btn-success">update</button>
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