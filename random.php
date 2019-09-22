<!doctype html>
<html lang="en">
<?php require 'functions.php';?>
<?php head(); ?>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <!-- Image and text -->
      <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="/dumpster.png" width="30" height="30" class="d-inline-block align-top" alt="">
          Git Gud
        </a>
      </nav>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php nav_bar(); ?>
      </ul>
    </div>
  </nav>
    <?php echo '<p>Hello World</p>'; ?>
    <a href="/Home.php">Visit the home page.</a>
    <footer>
        <p> A footer </p>
        <?php footer(); ?>
        <p> end footer </p>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>



</html>
