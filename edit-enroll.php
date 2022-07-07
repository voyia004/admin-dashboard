<?php
   require_once('logics/dbconnection.php');


    $querystudent = mysqli_query($conn, "SELECT * FROM enroll WHERE no='".$_GET['id']."'  ");
    while($fetchstudent =mysqli_fetch_array($querystudent))
    {
       $fullname = $fetchstudent['fullname'];
       $phonenumber = $fetchstudent['phonenumber'];
       $email = $fetchstudent['email'];
       $gender = $fetchstudent['gender'];
       $course = $fetchstudent['course'];
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
                <div class="container-fluid">
                   <div class="row">
                        <div class="col-lg-12">
                          <div class="card">
                            <div class="card-header bg-dark text-center text-white">
                                <h4> Edit student <?php echo $fullname ?></h4>
                            </div>
                            <br><br>
            <div class="card shadow" style="width:55rem; justify-content:center; margin-left:50vh;">
                    <div class="card-body">
                        <form action="enroll.php" method="POST">
                            <div class="row">
                                    <div class="mb-3 col-lg-6">
                                            <label for="fullname" class="form-label">Fullname:</label>
                                            <input type="text" name="fullname" class="form-control" placeholder="Enter your fullname" value="<?php echo $fullname ?>">
                                        </div>
                                    
                                        <div class="mb-3 col-lg-6">
                                            <label for="phonenumber" class="form-label">phonenumber</label>
                                            <input type="tel" name="phonenumber" class="form-control" placeholder="phonenumber"value="<?php echo $phonenumber ?>" >
                                        </div>
                             </div>
                                    <div class="row">
                                        <div class="mb-3 col-lg-6">
                                            <label for="email" class="form-label">email</label>
                                            <input type="text" name="email" class="form-control" placeholder="Enter your email"value="<?php echo $email?>" >
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="gender" class="form-label">gender</label>
                                            <select class="form-control" aria-label="Default select example" name="gender" value="<?php echo $gender?>" >
                                            <option selected style><?php echo $gender?></option>
                                            <option value="male">male</option>
                                            <option value="female">female</option>
                                            </select>
                                        </div>
                                    </div>
                                        <br><br>
                                        
                                        <div class="row" style="text-align:center:">
                                    <div class="mb-3 col-lg-6">
                                    <label for="course" class="form-label"><b>whats your preffered course</b></label>
                                        <select class="form-select" aria-label="Default select example" name="course" value="<?php echo $course?>">
                                        <option selected style><?php echo $course?></option>
                                        <option value="data science">data science</option>
                                        <option value="cyber security">cyber security</option>
                                        <option value="software developement">software developement</option>
                                        </select>
                                    </div>
                                    </div>
                          
                                    <div class="row" style="text-align:center:">
                                            <div class="mb-3 col-lg-6">
                                                    <div class="mb-3 form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1"><b>Agree Terms & Conditions</b></label>
                                                    </div>
                                                <br>      
                                                <button type="submit" name="submitbutton" class="btn btn-primary">submit application</button>
                                            </div>
                                     </div>
                  </form>       
                </div>
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