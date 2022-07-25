<div class="card shadow" style="width:55rem; justify-content:center; margin-left:50vh;">
  <div class="card-body">
      <form action="enroll.php" method="POST">
        <div class="row">
          <div class="mb-3 col-lg-6">
            <label for="fullname" class="form-label">Fullname:</label>
            <input type="text" name="fullname" class="form-control" placeholder="Enter your fullname">
          </div>
      
          <div class="mb-3 col-lg-6">
            <label for="phonenumber" class="form-label">phonenumber</label>
            <input type="tel" name="phonenumber" class="form-control" placeholder="phonenumber">
          </div>
        </div>
        <div class="row">
          <div class="mb-3 col-lg-6">
            <label for="email" class="form-label">email</label>
            <input type="text" name="email" class="form-control" placeholder="Enter your email">
          </div>
          <div class="mb-3 col-lg-6">
            <label for="gender" class="form-label">gender</label>
            <select class="form-select" aria-label="Default select example" name="gender">
              <option>--please enter your gender</option>
              <option value="male">male</option>
              <option value="female">female</option>
            </select>
          </div>
        </div>
            <br><br>
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
<br> <span style="text-align:center;">you agree by providing your information you underrstand all our data privaccy and protection policy aligned in our trems and conditions and the privacy statements</span><br>
        <div class="row" style="text-align:center:">
          <div class="mb-3 col-lg-6">
          </div>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1"><b>Agree Terms & Conditions</b></label>
        </div>
      <br>      
      <button type="submit" name="submitbutton" class="btn btn-primary">submit application</button>
    </form>
   
  </div>
  </div>
</div>