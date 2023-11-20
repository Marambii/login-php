<?php
    include_once 'header.php';
?>

<body>
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3"> Welcome back <span class='text-info'>Member</span></h1>
        <p class="col-lg-10 fs-4">Resume your wonderful journey with us </p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" action='includes/login.inc.php' method='post'>
          <div class="form-floating mb-3">
            <input type="text" name='uid' class="form-control" id="floatingInput" placeholder="name@example.com/username">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name='pwd' class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-info" name='submit' type="submit">Log in</button>
          <hr class="my-4">
          <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
          <?php
            if (isset($_GET["error"])){
              if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in All Fields!</p>";
              }
              else if($_GET["error"] == "wronglogin"){
                echo "<p>Wrong credentials used</p>";
              }
            }
          ?>
       
        </form>
      </div>
    </div>
  </div>
    
</body>
</html>

<?php
    include_once 'footer.php';
?>