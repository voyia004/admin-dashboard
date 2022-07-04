<?php
  $server='localhost';
  $username='root';
  $password="";
  $database="zalego";




  $conn = mysqli_connect($server,$username,$password,$database);
  $sqli = mysqli_query($conn, "SELECT * FROM enroll");





  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- All our code. write here   -->
	<div class="header">
      <img src="images/images.jfif" alt="zalego" height="50" width="50" class="rounded-circle">
	  <a href="#" class="navbar-trigger"><span></span></a>
	</div>
	<div class="sidebar">
       <nav>
		   <ul>
		   <li>
			<a href="index.php">
				   <span><i class="fa fa-home" aria-hidden="true"></i></span>
				   <span>home</span>
				</a>
			</li>
			   <li>
				     <a href="">
                        <span> <i class="fa fa-group"></i></span>
						<span>students</span>
					 </a>
			   </li>
			   <li>
				<a href="">
				   <span> <i class="fa fa-folder-open"></i></span>
				   <span>courses</span>
				</a>
		       </li>
		     <li>
			 <a href="">
			   <span> <i class="fa fa-graduation-cap"></i></span>
			   <span>campus</span>
			  </a>
	      </li>
		   </ul>
	   </nav>
	</div>
	<div class="main-content">
        <div class="container-fluid">
			
		
		    <div class="row">
					
				
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>student Analysis</span>
					</div>
						<div class="card-body">
								<table class="table table-stripped table-hover table-responsive">
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
											<?php while($fetch= mysqli_fetch_array($sqli)) { ?>
							                    <tr>
													<td><?php echo $fetch['no']?></td>
                                                    <td><?php echo $fetch['fullname']?></td>
                                                    <td><?php echo $fetch['phonenumber']?></td>
											        <td><?php echo $fetch['email']?></td>
													<td><?php echo $fetch['course']?></td>
													<td><?php echo $fetch['gender']?></td>
													<td><?php echo $fetch['created_at']?></td>
													<td>
												<a href="#" class=" btn btn-primary btn-sm">
													<i class="fa fa-edit"></i>
												</a>
												<a href="#" class=" btn btn-info btn-sm">
													<i class="fa fa-eye"></i>
												</a>
												<a href="#" class=" btn btn-danger btn-sm">
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
       







<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>