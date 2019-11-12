<?php
require '../Backend/functions.php';

if(isset($_POST['search'])) {
//  echo "cool";
  $testingGoal = $_POST['search'];
//  echo "what?";
  echo testgetMovies($testingGoal);
  // echo "End";
} else {
  echo "fail";
};
 ?>
