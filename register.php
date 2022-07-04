<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrapgridlayout</title>
    <link rel="stylesheet" href="bootstrap-5.2.0/bootstrap-5.2.0-/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="row pt-5">
<div class="card shadow" style="width:55rem; justify-content:center; margin-left:50vh;">
  <div class="card-body">
            <form action="index.php" method="POST">
             <div class="row">
                <div class="mb-3 col-lg-6">
              <label for="username" class="form-label">username</label>
              <input type="text" name="username" class="form-control">
            </div>
            <div class="mb-3 col-lg-6">
              <label for="email" class="form-label">email</label>
              <input type="text" name="email" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="mb-3 col-lg-6">
          <label for="password" class="form-label">Password</label>
          <input type="text" name="password" class="form-control">
        </div>
        <div class="mb-3 col-lg-6">
          <label for="confirm password" class="form-label">confirm password</label>
          <input type="text" name="confirm password" class="form-control">
        </div>
      </div>
      <br>  
      <button type="submit" name="submitbutton" class="btn btn-primary">send a message</button>
      
</div>
</div>  
</form>
</body>
</html>