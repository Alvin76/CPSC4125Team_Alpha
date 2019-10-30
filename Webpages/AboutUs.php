<!doctype html>
<html lang="en">
  <?php require '../Backend/functions.php';?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <link href="../CSS/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <?php head(); ?>
  <body>
    <?php nav_bar(); ?>

    <!-- Page specific content will go down here. -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <main>
          <div class="text-center">
            <article>Welcome to our OMDB search website. </article>
            <img src='../Images/alpaca-stare.jpg' alt='photo of me' />
          </div>
          <div class="container">
      <h2> The Group <h2>
      <img src="../Images/4alpacas.jpg" alt="Four Alpacas" class="img-fluid">
    </div>
    <div class="container">
      <h2> Adam Davies <h2>
      <img src="../Images/alpacaAdam.jpg" alt="alpacaAdam" class="img-fluid">
    </div>
    <div class="container">
      <h2> Taylor Woods <h2>
      <img src="../Images/alpacaTaylor.jpeg" alt="alpacaTaylor" class="img-fluid">
    </div>
    <div class="container">
      <h2> Evan <h2>
      <img src="../Images/alpacaEvan.jpeg" alt="alpacaEvan" class="img-fluid">
    </div>
    <div class="container">
      <h2> James Ericsson <h2>
      <img src="../Images/alpacaJames.jpeg" alt="alpacaJames" class="img-fluid">
    </div>
        </main>
      </div>
    </div>
    <!-- Page specific content ends here. -->
    <?php footer(); ?>
  </body>
</html>
