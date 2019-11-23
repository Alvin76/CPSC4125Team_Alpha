<!doctype html>
<html lang="en">
  <?php require '../Backend/functions.php';?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="js/wow.min.js"></script>
               <script>
               new WOW().init();
               </script>


  <?php head(); ?>

  <style>
  <?php include '../CSS/style.css'; ?>
  </style>

  <body>
    <?php nav_bar(); ?>


    <!-- Page specific content will go down here. -->

    <!--Carousel Wrapper-->
 <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

   <!--Indicators-->
   <ol class="carousel-indicators">
     <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
     <li data-target="#carousel-example-1z" data-slide-to="1"></li>
     <li data-target="#carousel-example-1z" data-slide-to="2"></li>
   </ol>
   <!--/.Indicators-->

   <!--Slides-->
   <div class="carousel-inner" role="listbox">

     <!--First slide-->
     <div class="carousel-item active">
       <div class="view" style="background-image: url('https://images5.alphacoders.com/887/887355.jpg'); background-repeat: no-repeat; background-size:cover;">

         <!-- Mask & flexbox options-->
         <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

           <!-- Content -->
           <div class="text-center white-text mx-5 wow fadeIn">
             <h1 class="mb-4">
               <strong>TAMD</strong>
             </h1>

             <h3>
               <strong>Team Alpha Movie Database</strong>
             </h3>

             <h4 class="mb-4 d-none d-md-block">
               <strong>Online Movie Database service used for obtaining information regarding all of your favorite films</strong>
             </h4>

             <a target="_blank" href='omdb.php' class="btn btn-outline-white btn-lg">Search Movies
               <i class="fa fa-graduation-cap ml-2"></i>
             </a>
           </div>
           <!-- Content -->

         </div>
         <!-- Mask & flexbox options-->

       </div>
     </div>
     <!--/First slide-->

     <!--Second slide-->
     <div class="carousel-item">
       <div class="view" style="background-image: url('https://images5.alphacoders.com/757/757038.jpg'); background-repeat: no-repeat; background-size:cover;">

         <!-- Mask & flexbox options-->
         <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

           <!-- Content -->
           <div class="text-center white-text mx-5 wow fadeIn">
             <h1 class="mb-4">
               <strong>TAMD</strong>
             </h1>

             <h3>
               <strong>Team Alpha Movie Database</strong>
             </h3>

             <h4 class="mb-4 d-none d-md-block">
               <strong>Online Movie Database service used for obtaining information regarding all of your favorite films</strong>
             </h4>

             <a target="_blank" href='omdb.php' class="btn btn-outline-white btn-lg">Search Movies
               <i class="fa fa-graduation-cap ml-2"></i>
             </a>
           </div>
           <!-- Content -->

         </div>
         <!-- Mask & flexbox options-->

       </div>
     </div>
     <!--/Second slide-->

     <!--Third slide-->
     <div class="carousel-item">
       <div class="view" style="background-image: url('https://images4.alphacoders.com/762/76276.jpg'); background-repeat: no-repeat; background-size:cover;">

         <!-- Mask & flexbox options-->
         <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

           <!-- Content -->
           <div class="text-center white-text mx-5 wow fadeIn">
             <h1 class="mb-4">
               <strong>TAMD</strong>
             </h1>

             <h3>
               <strong>Team Alpha Movie Database</strong>
             </h3>

             <h4 class="mb-4 d-none d-md-block">
               <strong>Online Movie Database service used for obtaining information regarding all of your favorite films</strong>
             </h4>

             <a target="_blank" href='omdb.php' class="btn btn-outline-white btn-lg">Search Movies
               <i class="fa fa-graduation-cap ml-2"></i>
             </a>
           </div>
           <!-- Content -->

         </div>
         <!-- Mask & flexbox options-->

       </div>
     </div>
     <!--/Third slide-->

   </div>
   <!--/.Slides-->

   <!--Controls-->
   <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
   <!--/.Controls-->

 </div>
 <!--/.Carousel Wrapper-->

    <!-- Page specific content ends here. -->
    <?php footer(); ?>
  </body>
</html>
