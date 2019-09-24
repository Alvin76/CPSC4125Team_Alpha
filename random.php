<!doctype html>
<html lang="en">
  <?php require 'functions.php';?>
  <?php noCache(); ?>
  <?php head(); ?>
  <body>
    <?php nav_bar(); ?>




    <!-- Page specific content will go down here. -->
    <div class="center">
      <?php echo '<p>A Random Comic!</p>'; ?>
      <?php echoRandom(); ?>
    </div>

    <script>
      function myFunction() {
        document.getElementById("demo").innerHTML = "Hello World 1";
      }
      function myFunction2() {
        document.getElementById("demo").innerHTML = "Hello World 2";
      }
    </script>

    <button onclick="myFunction()">Click me 1</button>
    <button onclick="myFunction2()">Click me 2</button>

    <!-- https://test-app-ericsson.herokuapp.com/random.php -->
    <p id="demo"></p>
    <!-- <script>
        $( document ).ready(function(){
          console.log("wut")
    //        $('#click_button').bind('click', function () {
            //  document.getElementById("demo").innerHTML = "should also say hello World";
      //      })
        });
    </script> -->
    <script>
      $( document ).ready(function() {
        console.log( "ready!" );
      });
    </script>


    <button id="click_button">
      Welcome to JQuery world.
    </button>


    <!-- Page specific content ends here. -->



    <?php footer(); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
