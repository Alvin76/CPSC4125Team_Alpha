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
  $testingGoal = $_POST['search'];
 testgetMovies($testingGoal);
} else {
 echo "fail";
};
 ?>
