<?php
   require_once('logics/dbconnection.php');
  $sqli = mysqli_query($conn, "SELECT * FROM enroll");





  ?>
<!DOCTYPE html>
<html>
  <?php require_once('includes/header.php') ?>
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
       





	<?php  require_once('includes/script.php') ?>
</body>
</html>