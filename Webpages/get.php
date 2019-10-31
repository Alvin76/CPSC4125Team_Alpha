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
<<<<<<< HEAD
  echo "cool";
  $testingGoal = $_POST['search'];
  echo "what?"
  echo testgetMovies($testingGoal);
=======
  echo $_POST['search'];
  echo "pass/fail?";

  $testingGoal = $_POST['search'];
 echo testgetMovies($testingGoal);
>>>>>>> parent of bd5babf... generic commit
} else {
 echo "fail";
};
 ?>
