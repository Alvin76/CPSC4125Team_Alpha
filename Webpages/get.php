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
 testgetMovies($_POST['search']);
} else {
 echo "fail";
};
 ?>
