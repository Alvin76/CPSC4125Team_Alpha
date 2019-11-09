<!--
?php
   if(isset($_POST['search'])) {
    echo "success"
  } else {
    echo "fail";
  };
   -->
<?php
require '../Backend/functions.php';

if(isset($_POST['search'])) {
//  echo "cool";
  $testingGoal = $_POST['search'];
//  echo "what?";
  echo testgetMovies($testingGoal);
} else {
  echo "fail";
};
 ?>
