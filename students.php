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
	<div class="maincontent">
       <div class="container-fluid">
			
		
		    <div class="row">
					
				
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>student Analysis</span>
					</div>
						<div class="card-body">
												<table class="table">
						<thead>
							<tr>
							<th scope="col">id</th>
							<th scope="col">Fullname</th>
							<th scope="col">phone</th>
							<th scope="col">email</th>
							<th scope="col">course</th>
							<th scope="col">gender</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<th scope="row">1</th>
							<td>Mike</td>
							<td>0796475668</td>
							<td>voyiamike@gmail.com</td>
							<td>datascience</td>
							<td>male</td>
							</tr>
							<tr>
							<th scope="row">2</th>
							<td>Jake</td>
							<td>07225367746</td>
							<td>giddyman@gamil.com</td>
							<td>cybersecurity</td>
							<td>male</td>
							</tr>
							<tr>
							<th scope="row">3</th>
							<td>Lawson</td>
							<td>07883983939</td>
							<td>skilli@gmail.com</td>
							<td>cybersecurity</td>
							<td>male</td>
							</tr>
							<tr>
							<th scope="row">4</th>
							<td>wilson</td>
							<td>07883983939</td>
							<td>kwilson@gmail.com</td>
							<td>software developement</td>
							<td>male</td>
							</tr>
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