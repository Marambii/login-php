<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'>
    <title>Login Page</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Credible Sounds</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
            </li>
            <?php
                if (isset($_SESSION["useruid"])) {
                    echo'
                    <li class="nav-item">
                        <a class="nav-link " >Profile</a>
                    </li>';
                    echo '
                    <li class="nav-item">
                         <a class="nav-link" href="includes/logout.inc.php">log out</a>
                    </li>';
                } else {
                    echo'
                    <li class="nav-item">
                         <a class="nav-link" href="login.php">log In</a>
                    </li>'; 
                    echo '
                    <li class="nav-item">
                         <a class="nav-link" href="signup.php">Sign Up</a>
                    </li>'; 
                }
            ?>
        </ul>
    </div>
  </div>
</nav>