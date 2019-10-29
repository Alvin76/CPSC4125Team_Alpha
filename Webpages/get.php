<!doctype html>
<html lang="en">

<?php $search2 = $_POST['search'];
  getMovies($search2);
?>
  <?php require '../Backend/functions.php';?>
  <?php noCache(); ?>
  <?php getMovies("fail"); ?>
  <p> "wut"</p>
  <?php getMovies(search); ?>
  <p> "wut"</p>
  <?php getMovies("fail"); ?>
  <p> "wut"</p>
  <?php getMovies($search); ?>
  <p> "wut"</p>
</html>
