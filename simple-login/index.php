<?php
    include_once 'header.php';
?>

<body>
<h1 class="visually-hidden">Heroes examples</h1>

<div class="px-4 py-5 my-5 text-center">
<?php
                if (isset($_SESSION["useruid"])) {
                    echo"<h5 class='display-3 '> Hello there, ". $_SESSION["useruid"] . " </h5>";

                } 
            ?>
  <h1 class="display-5 fw-bold text-body-emphasis">WHO ARE WE??</h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, quasi ab repudiandae aut quam quod aperiam. Nesciunt et quasi qui a dolore optio. Impedit ea sequi veritatis, quisquam ullam saepe!</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Contact us </button>
      <button type="button" class="btn btn-outline-secondary btn-lg px-4" href='about.php'>About us</button>
    </div>
  </div>
</div>

</body>
</html>

<?php
    include_once 'footer.php';
?>