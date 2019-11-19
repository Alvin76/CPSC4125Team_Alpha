<!doctype html>
<html lang="en">
  <?php require '../Backend/functions.php';?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <link href="../CSS/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <?php head(); ?>

  <style>
  <?php include '../CSS/style.css'; ?>
  </style>

  <body>
    <?php nav_bar(); ?>

    <!-- Page specific content will go down here. -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">This is team Alphas super awesome OMDB API Interfacer.</h1>
        <p class="lead">Go to the Navbar to look up some movies.</p>
        <main>
          <h1>Contact-us </h1>
          <p>You can email us at <a href= "mailto:abc@example.com">Send Email</a> </p>
          <p>or call us at (555)555-5555</p>
        </main>
      </div>
    </div>
    <!-- Page specific content ends here. -->
    <?php footer(); ?>
  </body>
</html>
