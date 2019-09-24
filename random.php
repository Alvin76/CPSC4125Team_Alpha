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

    <script type="text/javascript">

        /*  jQuery function is the entrance function that jQuery execute.
        *
        *   Below code means when the html document load ready, this is similar to window.onload() = function(){......};
        *
        *   You can also use $(document).ready(function(){......}), $ is an alias of jQuery.
        *
        *   You can even use $(function(){......}) to process document load ready event.
        * */
        jQuery(document).ready(function(){

            // Show an alert popup message.
            alert('Hello World From JQuery.');

            // Get the button object by it's id.
          //  var button = jQuery('#click_button')

            // When click this button then execute below function.
            $('#click_button').bind('click', function () {

                // Get button original text.
                const original_text = jQuery(this).text();

                // Alert the text.
                alert('You click the button');

                alert('The original button text is : ' + original_text);

                // Set the button new text. And change the button text and background color.
                jQuery(this).text('Wish you like JQuery :)').css({color:'yellow', background:'blue'});
            })

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
