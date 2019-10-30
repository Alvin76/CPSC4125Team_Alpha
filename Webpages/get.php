<!--
?php
   if(isset($_POST['search'])) {
    echo "success"
  } else {
    echo "fail";
  };
   -->
<?php
if(isset($_POST['search'])) {
 echo $_POST['search'];
 testgetMovies($_POST['search']);
} else {
 echo "fail";
};
 ?>
