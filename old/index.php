<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
require 'includes/config.php';
require 'includes/functions.php';



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Local CSS -->
    <link href="/template/style.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title><?php page_title(); ?> | <?php site_name(); ?></title>

</head>
<body>
<div class="wrap">
    <header>
          <!-- <h1>?php site_name(); ?></h1> -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
          <!-- <a class="navbar-brand" href="#"></a> -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               <!-- <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li> -->
              <?php nav_bar(); ?>
            </ul>
          </div>
        </nav>
    </header>

    <article>
      <!-- <div class="jumbotron">
        <div class="container text-center"> -->
          <!-- <h1 class="display-4">?php page_title(); ?></h1> -->
        <!-- </div> -->
        <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> -->
        <div class="container text-center">
          <h2><?php page_title(); ?></h2>
      </div>
      <?php hello(); ?>
      // ?php page_content(); ?>
    </article>

    <footer>
        <small>&copy;<?php echo date('Y'); ?> <?php site_name(); ?>.<br><?php site_version(); ?></small>
    </footer>
    <div class="jumbotron">
      <div class="container text-center">
        <h2 class="display-6"><?php site_name(); ?></2>
      </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
