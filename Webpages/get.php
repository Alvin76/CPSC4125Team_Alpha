<!doctype html>
<html lang="en">
  <?php require '../Backend/functions.php';?>
  <?php noCache(); ?>
  <?php getMovies("fail"); ?>
  <p> "wut"</p>
  <?php getMovies(search); ?>
  <p> "wut"</p>
  <?php getMovies("fail"); ?>
  <p> "wut"</p>
  <?php getMovies($search); ?>
  <p> "wut2"</p>
  <?php $search2 = $_POST['search']; ?>
  <?php getMovies($search2); ?>
</html>
