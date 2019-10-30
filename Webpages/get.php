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
  echo $_POST['search'];
  echo "pass/fail?";

  $testingGoal = $_POST['search'];
 echo testgetMovies($testingGoal);
} else {
 echo "fail";
};
 ?>
