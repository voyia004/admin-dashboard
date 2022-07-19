<?php
   require_once('logics/dbconnection.php');
  $sqli = mysqli_query($conn, "SELECT * FROM enroll");





  ?>
<!DOCTYPE html>
<html>
  <?php require_once('includes/header.php') ;
  require_once('addstudent.php'); ?>
<body>
	<!-- All our code. write here   -->

	<?php require_once('includes/navbar.php') ?>
	<?php require_once('includes/sidebar.php') ?>
	<div class="main-content">
        <div class="container-fluid">
			
		
		    <div class="row">
					
				
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>student Analysis</span> 
						 <a href="#" class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#addstudent">
                                            
								<i class="fa fa-plus-circle"></i>
                                        </a>
					</div>
						<div class="card-body">
								<table class="table table-stripped table-hover table-responsive" style="font-size:12px">
										<thead>
											<tr>
											<th scope="col">id</th>
											<th scope="col">Fullname</th>
											<th scope="col">phone</th>
											<th scope="col">email</th>
											<th scope="col">course</th>
											<th scope="col">gender</th>
											<th scope="col">enrolled on</th>
											<th scope="col">action</th>
											</tr>
										</thead>
										<tbody>
											<?php while($fetch= mysqli_fetch_array($sqli)) { 
											?>
							                    <tr>
													<td><?php echo $fetch['no']?></td>
                                                    <td><?php echo $fetch['fullname']?></td>
                                                    <td><?php echo $fetch['phonenumber']?></td>
											        <td><?php echo $fetch['email']?></td>
													<td><?php echo $fetch['course']?></td>
													<td><?php echo $fetch['gender']?></td>
													<td><?php echo $fetch['created_at']?></td>
													<td>
														<a href="edit-enroll.php? id=<?php echo $fetch['no'] ?>" class=" btn btn-primary">
															<i class="fa fa-edit"></i>
														</a>
														<a href="view-enrollment.php? id=<?php echo $fetch['no'] ?>" class=" btn btn-info ">
															<i class="fa fa-eye"></i>
														</a>
														<a href="delete-enrollment.php? id=<?php echo $fetch['no'] ?>" class=" btn btn-danger ">
															<i class="fa fa-trash"></i>
														</a>
											        </td>	
											    </tr>
												<?php }?>	
											
									
									
										</tbody>
						        </table>
						</div>
						<div class="card-footer"></div>
					
				</div>
		    </div>

		</div>
	</div>
       
<div class="modal fade" id="addstudent" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Basic Modal</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="close">
				   <span aria-hidden="true">x</span>
			    </button>
			</div>
			<div class="modal-body">
                  <form action="addstudent.php" method="POST">
					<div class="row">
						<div class="col-lg-6">
						<form action="students.php" method="POST">
                                        <div class="row">
                                                <div class="mb-3 col-lg-6">
                                                        <label for="fullname" class="form-label">Fullname:</label>
                                                        <input type="text" name="fullname" class="form-control" placeholder="Enter your fullname">
                                                    </div>
                                                
                                                    <div class="mb-3 col-lg-6">
                                                        <label for="phonenumber" class="form-label">phonenumber</label>
                                                        <input type="tel" name="phonenumber" class="form-control" placeholder="phonenumber" >
                                                    </div>
                                        </div>
                                                <div class="row">
                                                    <div class="mb-3 col-lg-6">
                                                        <label for="email" class="form-label">email</label>
                                                        <input type="text" name="email" class="form-control" placeholder="Enter your email" >
                                                    </div>
                                                    <div class="mb-3 col-lg-6">
                                                        <label for="gender" class="form-label">gender</label>
                                                        <select class="form-control" aria-label="Default select example" name="gender"  >
                                                        <option selected style></option>
                                                        <option value="male">male</option>
                                                        <option value="female">female</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <span style="text-align:center;">in order to complete your registration to the bootcamp, you are required to select one course you will be undertaking. Please NOTE that this will be your learning trtack during the two weeks immersion.</span><br>
                                            <div class="row" style="text-align:center:">
                                                    <div class="mb-3 col-lg-6">
                                                        <label for="course" class="form-label"><b>whats your preffered course</b></label>
                                                            <select class="form-select" aria-label="Default select example" name="course">
                                                            <option>--select your course--</option>
                                                            <option value="data science">data science</option>
                                                            <option value="cyber security">cyber security</option>
                                                            <option value="software developement">software developement</option>
                                                            </select>
                                                    </div>
                                        </div>
                                                          <br> 
                                       
                                        <div class="row" style="text-align:center:">
                                            <div class="mb-3 col-lg-6">
                                            </div>
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1"><b>Agree Terms & Conditions</b></label>
                                        </div>
                                                                                
                                                    <br><br>
                                                   
                                    
                                                <div class="row" style="text-align:center:">
                                                        <div class="mb-3 col-lg-6">
                                                            <br>      
                                                            <button type="submit" name="submitbutton" class="btn btn-primary">Add students</button>
                                                        </div>
                                                </div>
                        </form>                                                  
						</div>
					</div>
				  </form>
			</div>
			<div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">close</button>
				  <button type="button" class="btn btn-dark btn-sm">save changes</button>
			</div>
		</div>
	</div>
</div>



	<?php  require_once('includes/script.php') ?>
</body>
</html>