<!doctype html>
<html lang="en">
  <?php require '../Backend/functions.php';?>
  <?php noCache(); ?>
  <?php getMovies("test"); ?>
  <?php getMovies(search); ?>
  <?php getMovies("search"); ?>
  <?php getMovies($search); ?>
  <p> "wut"</p>
</html>
