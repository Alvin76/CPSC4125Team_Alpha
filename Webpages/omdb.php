<!doctype html>

<html lang="en">
  <?php require '../Backend/functions.php';?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <?php head(); ?>

  <style>
  <?php include '../CSS/style.css'; ?>
  </style>

  <body>
    <?php nav_bar(); ?>
    <!-- Page specific content will go down here. -->
    <div class="container">

        <div class="container" style="margin-top: 8%;">
          <div class="col-md-auto">
            <div class="row">
              <div id="logo" class="text-center">
                <h1> <img src="../Images/mystic.png" width="60%" height="60%" alt="Alpha Alpaca Brand"></h1><h1>TAMD</h1>
              </div>
              </div>
          </div>
        </div>

        <div class="container align-items-center" >
        <div class="input-group">
        	<input input id="search" type="text" placeholder="Type Movie Here" class="form-control">
              <span class="input-group-btn">
                <button id="click_button" class="btn btn-search" type="button"><i class="fa fa-search fa-fw"></i> Search</button>
              </span>
        </div>
        </div>
          <div id="ComicImage">

          </div>
          <script>
            var userSearch = document.getElementById("search").value;
              $(document).ready(function(){
              $("#click_button").click(function(){
                $.ajax({type: 'post', url: "get.php", data: {
                  search: document.getElementById("search").value
                  }, success: function(result){
                  $("#ComicImage").html(result);
                }});
               });
              });
            </script>
          <!-- ?php getIronMan(); ?> -->

      </div>
    <!-- Page specific content ends here. -->
  </body>
</html>
