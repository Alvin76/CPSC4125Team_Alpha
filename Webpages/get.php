<!doctype html>
<html lang="en">
  <?php require '../Backend/functions.php';?>
  <?php noCache(); ?>
  <?php getMovies("test"); ?>
  <p> "wut"</p>
  <?php getMovies(search); ?>
  <p> "wut"</p>
  <?php getMovies("search"); ?>
  <p> "wut"</p>
  <?php getMovies($search); ?>
  <p> "wut"</p>
</html>
