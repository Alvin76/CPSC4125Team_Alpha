<?php
require '../Backend/functions.php';
if(isset($_POST['search'])) {
  $testingGoal = $_POST['search'];
  echo getMovies($testingGoal);
} else {
  echo "fail";
};
 ?>
