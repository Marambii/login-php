<?php
    include_once 'header.php';
?>

<body>
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3"> Register today to join us</h1>
        <p class="col-lg-10 fs-4">It seems like you want to join our family <BR/> Welcome!</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" action='includes/signup.inc.php' method='post'>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" name='email' id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name='uid' id="floatingInput" placeholder="John Doe">
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" name='pwd' id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" name='pwdrepeat' id="floatingPassword" placeholder="repeat Password">
            <label for="floatingPassword">Repeat Password</label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-info" name='submit' type="submit">Sign up</button>
          <hr class="my-4">
          <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
          <?php
      if (isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
          echo "<p>Fill in All Fields!</p>";
        }
        else if($_GET["error"] == "invaliduid"){
          echo "<p>Please enter valid username</p>";
        }
        else if($_GET["error"] == "invalidemail"){
          echo "<p>Please enter valid email</p>";
        }
        else if($_GET["error"] == "passwordsdontmatch"){
          echo "<p>Password's don't match</p>";
        }
        else if($_GET["error"] == "stmtfailed"){
          echo "<p>Something went wrong try again</p>";
        }
        else if($_GET["error"] == "usernametaken"){
          echo "<p>Username already Taken</p>";
        }
        else if($_GET["error"] == "none"){
          echo "<p>You have signed up</p>";
        }

      }

  ?>
        </form>

      </div>
    </div>
  </div>
    

<?php
    include_once 'footer.php';
?>